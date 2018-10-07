<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data=array();
		$this->load->view('welcome/welcome_message',$data);
		
		
	}
	public function testfun(){
		exit("hwerererer");
	}
	public function sendemail(){
		$userid=$_POST['user_id'];
		$userpass=$_POST['user_password'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->validateUser($userid, $userpass);
		session_start();
		$_SESSION["userName"] = $userid;
		$_SESSION["userEmail"] = 'sdfsdf@asdasdas.xom';
		if (sizeof($users)>0){
			
			//$_SESSION['useremail']='mail@mail.com';
			$result=array("status"=>'success');
		}else{
			$result=array("status"=>'error');
		}
		exit(json_encode($result));	
	}
	public function dashboard(){
		session_start();
		print_r($_SESSION);
		$data=array();
		$this->load->view('welcome/dashboard',$data);
	}
	public function logout(){
	$data=array();
		$this->load->view('welcome/logout',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */