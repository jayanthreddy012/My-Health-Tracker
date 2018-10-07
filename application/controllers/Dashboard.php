<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$users_model=$this->load->model('users_model', '', TRUE);
       //session_start();
		//$session_id = $this->session->userdata('session_id');
   //echo $session_id;
    } 
	
	public function index()
	{
			$data=array();
		$result=$this->users_model->userappointment($data);
		
		$data1=array();
		$result1=$this->users_model->user_clientlist($data1);
		
		$data2=array();
		$result2=$this->users_model->ftba_return($data2);
		$data3=array();
		$result3=$this->users_model->ftbe_return($data3);
		$data4=array();
		$result4=$this->users_model->stba_return($data4);
		$data5=array();
		$result5=$this->users_model->stbe_return($data5);
		$data6=array();
		$result6=$this->users_model->sdc_return($data6);
		//echo "<pre>";print_r($result); exit;
		$data = array('test'=>$result,'test1'=>$result1,'test2'=>$result2,'test3'=>$result3,'test4'=>$result4,'test5'=>$result5,'test6'=>$result6);
	
		loadViewHelper ( 'dashboard/index', $data);
	}
	public function doctor_dashboard()
	{	
	//echo "coming here"; exit();
	$data2=array();
		$result1=$this->users_model->doctorappointment($data2);
	$data1=array();
		$result=$this->users_model->clientlist($data1);
		//echo "<pre>";print_r($result); exit;
		$data = array('test'=>$result,'test1'=>$result1);
		
		logindoctorhelper ( 'dashboard/doctor_dashboard', $data);
		
	}
	
	public function userreq_delete()
	{	
	$data= $this->input->post('ID');
	
		$users = $this->users_model->userreq_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	
		public function doctor_approve()
	{	
	$data= $this->input->post('ID');
		$data = array(
		'userid'=>$data,
		
		);
  
		$users = $this->users_model->doctorapprove($data);
		header('location:'.DASHBOARD.'/doctor_dashboard');
	}
	public function doctor_deny()
	{	
	$data= $this->input->post('ID');
	$data = array(
	'userid'=>$data,
		
		);
  
		$users = $this->users_model->doctordeny($data);
		header('location:'.DASHBOARD.'/doctor_dashboard');
	}
	public function doctor_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->doctorappointment_delete($data);
		header('location:'.DASHBOARD.'/doctor_dashboard');
	}
	public function user_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->userappointment_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	public function ftba_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->ftba_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	public function ftbe_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->ftbe_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	public function stba_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->stba_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	public function stbe_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->stbe_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	public function sdc_delete()
	{	
	 $data= $this->input->post('ID');
	
		$users = $this->users_model->sdc_delete($data);
		header('location:'.DASHBOARD.'/index');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>