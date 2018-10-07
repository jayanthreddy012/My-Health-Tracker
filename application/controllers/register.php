<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	
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
	
	function __construct()
    {
	parent::__construct();
	$this->load->library('session');
       //session_start();
		//$session_id = $this->session->userdata('session_id');
   //echo $session_id;
    }
	public function index()
	{
		$data = array(
             /*  'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'*/			   
          );		
		loginregisterhelper ( 'register/index', $data);
	}
	public function doctor()
	{
		$data = array(
             /*  'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'*/			   
          );		
		loginregisterhelper ( 'register/doctor_register', $data);
	}
	public function validate()
	{
	$userid=$_POST['inputEmail'];
		//$userpass=$_POST['inputPassword'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->regvalidateUser($userid);
		
		if (sizeof($users)>0){
			$result=array("status"=>"sorry","message"=>"this email is already registerd");
			//echo "'$inputEmail.'is already in use.";
		}
		else{
			$result=array("status"=>"success","message"=>"not found");
		}		
		exit(json_encode($result));
	}
	public function validatedoctor()
	{
	$docid=$_POST['inputEmail'];
		//$userpass=$_POST['inputPassword'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->regvalidatedoctor($docid);
		
		if (sizeof($users)>0){
			
			
	
	$result=array("status"=>"success","message"=>"not found");
			
		}
		else{
			$result=array("status"=>"sorry","message"=>"this email doesn't exit");
			
		}		
		exit(json_encode($result));
	}
	
	
	public function add_doctor()
	{
	$users_model=$this->load->model('users_model', '', TRUE);
	$data = array(
		   
		   'doc_firstname' => $this->input->post('inputFirstname'),
           'doc_lastname' => $this->input->post('inputLastname'),
           'doc_email' => $this->input->post('inputEmail'),
           'doc_password' => $this->input->post('inputPassword'),
		   'doc_address' => $this->input->post('inputAddress'),
           'doc_country' => $this->input->post('inputCountry'),
		   'doc_state' => $this->input->post('inputState'),
		   'doc_city' => $this->input->post('inputCity'),
		   'doc_designation' => $this->input->post('designation'),
		   'doc_practicename' => $this->input->post('PracticeName'),
		   
          );
	
	$users = $this->users_model->addDoctor($data);	
   	header('location:'.LOGIN.'/doctor');
	}
	public function add_user()
	{
	$users_model=$this->load->model('users_model', '', TRUE);
	$data = array(
		   
		   'usr_firstname' => $this->input->post('inputFirstname'),
           'usr_lastname' => $this->input->post('inputLastname'),
           'usr_email' => $this->input->post('inputEmail'),
           'usr_password' => $this->input->post('inputPassword'),
		   'usr_dob' => $this->input->post('inputdateofbirth'),
		   'usr_contact' => $this->input->post('quantity'),
		   'usr_address' => $this->input->post('inputAddress'),
           'usr_country' => $this->input->post('inputCountry'),
		   'usr_state' => $this->input->post('inputState'),
		   'usr_city' => $this->input->post('inputCity'),
		   
          );
	
	$users = $this->users_model->addUsers($data);	
   	header('location:'.LOGIN.'/index');
	}

	public function client()
	{
	$userid=$_POST['inputEmail'];
		//$userpass=$_POST['inputPassword'];
		$this->load->model('users_model', '', TRUE);
		$users = $this->users_model->clientlist($userid);
		
			
		if (sizeof($users)>0){
			
			$result=array("status"=>"sorry","message"=>"this email is already registerd");
			//echo "'$inputEmail.'is already in use.";
		}
		else{
			$result=array("status"=>"success","message"=>"not found");
		}		
		exit(json_encode($result));
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>