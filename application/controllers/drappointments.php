<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drappointments extends CI_Controller {

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
		$data = array( );		
		logindoctorhelper ( 'drappointments/index', $data);
	}
public function insert()
	{
		 $inputname = $this->input->post('inputname');
 $inputemail = $this->input->post('inputemail');
 $Date = $this->input->post('Date');
 $time = $this->input->post('time');
		$data = array( 
		'doctor_id' =>$this->session->userdata['logged_in']['docId'],
		   'drap_usr_name' => $inputname,
           'drap_usr_email' => $inputemail,
           'drap_date' => $Date,
           'drap_time' => $time,
		
		);	
$users = $this->users_model->insert_drappointment($data);		
		logindoctorhelper ( 'drappointments/index', $data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>