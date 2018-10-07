<?php defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';
class Call extends REST_Controller
{
	
	protected $responseArray;
	protected $emptyArray;
	protected $resStatusLbl;
	protected $resMsgLbl;
	protected $resResultLbl;
	protected $resSucc;
	protected $resErr;
	protected $resOk;
	protected $resCount;
	protected $resInvalidUser;
	protected $resInvalidCredentials;
	protected $resNoRecords;
	protected $resTryAgain;
	protected $resEmailExists;
	protected $resMobileExists;
	protected $accountInactive;
	
	
	
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
		date_default_timezone_set('Asia/Calcutta'); 
		$this->responseArray 	= array();
		$this->emptyArray 		= array();
		$this->resStatusLbl 	= 'Status';				
		$this->resMsgLbl		= 'Message';
		$this->resResultLbl		= 'Result';			
		
		$this->resSucc 			= 'Success';
		$this->resErr 			= 'Error';	
				
		$this->resOk	 		= 'OK';
		$this->resCount			= 'Count';
		$this->resInvalidUser 	= 'Invalid User';
		
		$this->resInvalidCredentials= 'Invalid Credentials';
		$this->resNoRecords = 'No Records Found';
		$this->resTryAgain = 'Error! Please try again after sometime';
		
		$this->resEmailExists = 'Email is already registered';
		$this->resMobileExists = 'Mobile is alredy registered';
		
		$this->load->model(USERS_MODEL,'',true);
		$this->load->model(OTP_MODEL,'',true);
    }

	function test_get()
	{
		$requiredParams = array('type');
		$validation = $this->_validateParams($requiredParams,$this->get());
		if(sizeof($validation) > 1)
		{
			$this->response($validation,200);
		}
		$getUsers = $this->Users_model->getUsers();
		if(is_array($getUsers) && count($getUsers)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resSucc;
			$this->responseArray[$this->resMsgLbl]   	=$this->resOk;
			$this->responseArray[$this->resResultLbl]   =$getUsers;
		}else{
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resNoRecords;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}
		return $this->response($this->responseArray,200);
	}

	function createRandomString($length){
			return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , $length );
	}
	

	function sendOTP_post(){
		$requiredParams = array('mobile','email');
		$validation = $this->_validateParams($requiredParams,$this->post());
		if(sizeof($validation) > 1){
			$this->response($validation,200);
		}		
		$checkIfUserEmail 	= $this->Users_model->getUserByEmail($this->get());		
		$checkIfUserMobile 	= $this->Users_model->getUserByMobile($this->get());
		if(count($checkIfUserEmail)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resEmailExists;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}else if(count($checkIfUserMobile)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resMobileExists;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}else{
			
			$otp = $this->createRandomString(6);
			$checkOtp = $this->otp_model->getOtpByEmailAndType($this->get(),'CU');
			$sendOtp='';
			if(count($checkOtp)>0){
				$sendOtp = $this->otp_model->updateotp($checkOtp[0]['id'],$otp,'CU');
			}else{
				$sendOtp = $this->otp_model->sendotp($this->get(),$otp,'CU');
			}
			
			if($sendOtp){
				$mailObj = array();
				$mailObj['send_to']=$this->get()['email'];
				$mailObj['subject']='Welcom to '. APP_TITLE;
				$mailObj['message']='Your OTP is '.$otp;				
				$sendEmail = send_email_helper($mailObj);				
				if($sendEmail){
					$this->responseArray[$this->resStatusLbl]	=$this->resSucc;
					$this->responseArray[$this->resMsgLbl]   	='Please check your email for OTP.';
					$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
				}else{
					$this->responseArray[$this->resStatusLbl]	=$this->resErr;
					$this->responseArray[$this->resMsgLbl]   	=$this->resTryAgain;
					$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
				}
			}else{
				$this->responseArray[$this->resStatusLbl]	=$this->resErr;
				$this->responseArray[$this->resMsgLbl]   	=$this->resTryAgain;
				$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
			}
		}
		return $this->response($this->responseArray,200);
	}

	function validateOTP_get(){
		$requiredParams = array('email','otp','type');
		$validation = $this->_validateParams($requiredParams,$this->get());
		if(sizeof($validation) > 1){
			$this->response($validation,200);
		}
		$getOtpByEmail = $this->otp_model->getOtpByEmail($this->get());
		if(count($getOtpByEmail)>0){
			$this->createUser($this->get(),$getOtpByEmail[0]['id']);
		}else{
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	='OTP invalid';
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}
		return $this->response($this->responseArray,200);
	}

	function createUser($data,$otpId){
		$requiredParams = array('userName','password','mobile','email');
		$validation = $this->_validateParams($requiredParams,$this->get());
		if(sizeof($validation) > 1){
			$this->response($validation,200);
		}		
		$checkIfUserEmail 	= $this->Users_model->getUserByEmail($this->get());		
		$checkIfUserMobile 	= $this->Users_model->getUserByMobile($this->get());
		if(count($checkIfUserEmail)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resEmailExists;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}else if(count($checkIfUserMobile)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resMobileExists;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}else{
			$createUser = $this->Users_model->createUser($this->get());
			if($createUser){
				$deleteOtp = $this->otp_model->deleteotp($otpId);
				$data = array();
				$data['userName']= $this->get()['userName'];
				$data['email']= $this->get()['email'];
				$data['password']= $this->get()['password'];
				$mailObj = array();
				$mailObj['send_to']=$this->get()['email'];
				$mailObj['subject']='Welcom to '. APP_TITLE;
				$mailObj['message']=$this->load->view('emailtemplate',$data,TRUE);				
				$sendEmail = send_email_helper($mailObj);
				$this->responseArray[$this->resStatusLbl]	=$this->resSucc;
				$this->responseArray[$this->resMsgLbl]   	=$this->resOk;
				$this->responseArray[$this->resResultLbl]   =$this->Users_model->getUserById($createUser);
			}else{
				$this->responseArray[$this->resStatusLbl]	=$this->resErr;
				$this->responseArray[$this->resMsgLbl]   	=$this->resTryAgain;
				$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
			}
		}
		return $this->response($this->responseArray,200);
	}

	function login_get(){
		$requiredParams = array('email','password');
		$validation = $this->_validateParams($requiredParams,$this->get());
		if(sizeof($validation) > 1){
			$this->response($validation,200);
		}
		
		$checkLogin = $this->Users_model->login($this->get());
		if(count($checkLogin)>0){
			$this->responseArray[$this->resStatusLbl]	=$this->resSucc;
			$this->responseArray[$this->resMsgLbl]   	=$this->resOk;
			$this->responseArray[$this->resResultLbl]   =$checkLogin;
		}else{
			$this->responseArray[$this->resStatusLbl]	=$this->resErr;
			$this->responseArray[$this->resMsgLbl]   	=$this->resInvalidCredentials;
			$this->responseArray[$this->resResultLbl]   =$this->emptyArray;
		}
		return $this->response($this->responseArray,200);
	}
	
	//validation function
	function _validateParams($requiredParams,$params)
	{
		$missingParams = array();
		$emptyParams = array();
		if(is_array($requiredParams) && is_array($params))
		{
			foreach($requiredParams as $requiredParamName)
			{
				if(!array_key_exists($requiredParamName,$params))
				array_push($missingParams, $requiredParamName);
				else if(!strpos($requiredParamName, 'UpdateCount') && $params[$requiredParamName] == '' )
				array_push($emptyParams, $requiredParamName);
			}
			if(sizeof($missingParams)>0)
			{
				$result['Status'] = 'Error';
				$result['Message'] = 'Following parameter(s) are missing: '.implode(',',$missingParams);
				$result['Result'] = array();
				return $result;
			}
			else if(sizeof($emptyParams)>0)
			{
				$result['Status'] = 'Error';
				$result['Message'] = 'Following parameter(s) are empty: '.implode(',',$emptyParams);
				$result['Result'] = array();
				return $result;
			}
			return '';
		}
		else
		{
			$result['Status'] = 'Error';
			$result['Message'] = 'Parameters and requiredParameters should be an array.';
			$result['Result'] = array();
			return $result;
		}
		return true;
	}
	
	function sendPushNotification()
	{
		// Put your device token here (without spaces):
	 	$deviceToken = "";
		
		// Put your private key"s passphrase here:
		$passphrase = "";
		
		// Put your alert message here:
		
		$message = "";
		
		//echo "deviceToken ".$deviceToken."<br/> Message:".$message;exit;
		
		$ctx = stream_context_create();
		//stream_context_set_option($ctx, "ssl", "local_cert", "Certificates.pem");
		stream_context_set_option($ctx, "ssl", "local_cert", "ck.pem");
		stream_context_set_option($ctx, "ssl", "passphrase", $passphrase);
		// Open a connection to the APNS server
		$fp = stream_socket_client("ssl://gateway.sandbox.push.apple.com:2195", $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
		
			if (!$fp)
			exit("Failed to connect: $err $errstr" . PHP_EOL);
		
		// Encode the payload as JSON
		//$payload = json_encode($body);
		
		$load = array(
			"aps" => 
				array(
				"alert" => $message,
				"sound" => "default"
				),
			"media"=>
				array(
				"media_type" => ""
				),
				
			
			);		
			
		$payload = json_encode($load);
		
		// Build the binary notification
		$msg = chr(0) . pack("n", 32) . pack("H*", $deviceToken) . pack("n", strlen($payload)) . $payload;
		// Send it to the server
		$result = fwrite($fp, $msg, strlen($msg));
		
		// Close the connection to the server
		fclose($fp);
		return true;
	}
}
?>