<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login1 extends My_Controller {
	function __construct()
    {
parent::__construct();
	$this->load->library('session');
       //session_start();
		//$session_id = $this->session->userdata('session_id');
   //echo $session_id;
    } 



public function validate(){
		$useremail=$_POST['inputEmail'];
		$userpass=$_POST['inputPassword'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->validateUser($useremail, $userpass);
		
		if (sizeof($users)>0){
		
		
		$newdata=array('userId' => $users[0]['user_id'],
				'userFirstname' => $users[0]['usr_firstname'],
				'userLastname' => $users[0]['usr_lastname'],
				'userEmail' => $users[0]['usr_email'],
				
				);
		//$this->session->set_userdata($newdata);
		$this->session->set_userdata('logged_in',$newdata);
		//echo "<pre>";
		//print_r($this->session->userdata['logged_in']);
		//exit;
		
		setcookie('userId','$userid',time()+(3600*24));
		setcookie('userpass','$userpass',time()+(3600*24));
		/*if(!isset($_SESSION['userEmail']) && !isset($_SESSION['userPass'])){
		//print_r($_SESSION);
		$_SESSION['userId'] = $users[0]['user_id'];
		$_SESSION['userFirstname'] = $users[0]['usr_firstname'];
		$_SESSION['userLastname'] = $users[0]['usr_lastname'];
		if(!$_COOKIE['userid'] && !$_COOKIE['userpass']){
		setcookie('userId','$userid',time()+(3600*24));
		setcookie('userpass','$userpass',time()+(3600*24));
		}
		}*/
		
	
			//$_SESSION['useremail']='mail@mail.com';
			//$result=array("status"=>'success');
		$data = array();
		
		header('location:'.DASHBOARD.'/index');
		//redirect('http://www.tutorialspoint.com'); 	
		}else{
			$result=array("status"=>'error');
			header('location:'.LOGIN.'/index');
		}
		//exit(json_encode($result));	
	}
	public function validate_doctor(){
		$docemail=$_POST['inputEmail'];
		$docpass=$_POST['inputPassword'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->validateDoctor($docemail, $docpass);
		
		if (sizeof($users)>0){
		
		
			$newdata=array('docId' => $users[0]['doctor_id'],
				'docFirstname' => $users[0]['doc_firstname'],
				'docLastname' => $users[0]['doc_lastname'], 
				'docDesignation' => $users[0]['doc_designation'],
				'docEmail' => $users[0]['doc_email'], 
				);
		$this->session->set_userdata('logged_in',$newdata);
		setcookie('docId','$userid',time()+(3600*24));
		setcookie('docpass','$userpass',time()+(3600*24));
		/*if(!isset($_SESSION['userEmail']) && !isset($_SESSION['userPass'])){
		//print_r($_SESSION);
		$_SESSION['userId'] = $users[0]['user_id'];
		$_SESSION['userFirstname'] = $users[0]['usr_firstname'];
		$_SESSION['userLastname'] = $users[0]['usr_lastname'];
		if(!$_COOKIE['userid'] && !$_COOKIE['userpass']){
		setcookie('userId','$userid',time()+(3600*24));
		setcookie('userpass','$userpass',time()+(3600*24));
		}
		}*/
		
	
			//$_SESSION['useremail']='mail@mail.com';
			//$result=array("status"=>'success');
		$data = array();
		
		header('location:'.DASHBOARD.'/doctor_dashboard');
		//redirect('http://www.tutorialspoint.com'); 	
		}else{
			$result=array("status"=>'error');
			header('location:'.LOGIN.'/doctor');
		}
		//exit(json_encode($result));	
	}
	
		public function doctor_dashboard(){
		//session_start();
		print_r($_SESSION);
		print_r($_COOKIE);
		$data=array();
		$this->load->view('doctor_dashboard',$data);
	}
	public function doctor_logout(){
	$this->session->sess_destroy();
	setcookie('userId','$userid',time()-3600);
		header('location:'.LOGIN.'/doctor_login');
	}
	public function dashboard(){
		
		$data=array();
		$this->load->view('dashboard',$data);
	}
	public function logout(){
	$data=array();
	$this->session->sess_destroy();
	//echo "<pre>";
		//print_r($this->session->userdata['logged_in']);
		//exit;
	setcookie('userId','$userid',time()-3600);
		header('location:'.LOGIN.'/index');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>