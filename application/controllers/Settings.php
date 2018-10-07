<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		$data = array(
               'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'			   
          );		
		loadViewHelper ( 'settings/index', $data);
	}
	public function toolsettings()
	{	
		$data = array();
		loadViewHelper ( 'settings/toolsettings', $data);
		
	}
	public function accountprofile()
	{	
		$data = array();
		loadViewHelper ( 'settings/accountprofile', $data);
		
	}
	public function insertdata()
	{	
		$data = $this->input->post('inputEmail');
		$users = $this->users_model->dr_id_req($data);
		$doc_id=($users[0]['doctor_id']);
		
		$data1=array(
		'user_id' =>$this->session->userdata['logged_in']['userId'],
		'doctor_id'=>$doc_id,
		'doctor_email'=>$data,
		'usr_email' =>$this->session->userdata['logged_in']['userEmail'],
		'usr_name' =>$this->session->userdata['logged_in']['userLastname'],
		);
		$users = $this->users_model->insert_rec($data1);
		$data2=array();
		loadViewHelper ( 'settings/accountprofile', $data2);
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>