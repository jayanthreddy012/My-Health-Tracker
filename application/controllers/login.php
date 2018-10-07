<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		loginregisterhelper ( 'login/index', $data);
	}
	public function doctor()
	{
		$data = array(
             /*  'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'*/			   
          );		
		loginregisterhelper ( 'login/doctor_login', $data);
	}
	
	

}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>