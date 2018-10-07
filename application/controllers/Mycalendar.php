<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycalendar extends CI_Controller {

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
		loadViewHelper ( 'mycalendar/index', $data);
	}
	public function mydietplan()
	{	
		$data = array();
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	public function insert()
	{
		 $inputname = $this->input->post('inputname');
 $inputemail = $this->input->post('inputemail');
 $Date = $this->input->post('Date');
 $time = $this->input->post('time');
		$data = array( 
		'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'usrap_dr_name' => $inputname,
           'usrap_dr_email' => $inputemail,
           'usrap_date' => $Date,
           'usrap_time' => $time,
		
		);	
$users = $this->users_model->insert_usrappointment($data);		
		loadViewHelper ( 'mycalendar/myappointments', $data);
	}
	public function ftba()
	{	
	
	 $Date = $this->input->post('Date');
 $timeofday = $this->input->post('timeofday');
 $FoodIngredients = $this->input->post('FoodIngredients');
 $comments = $this->input->post('comments');
 for($x=0; $x<count($Date); $x++){
		$data = array(
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'ftba_date' => $Date[$x],
           'ftba_time' => $timeofday[$x],
           'ftba_foodingredients' => $FoodIngredients[$x],
           'ftba_comments' => $comments[$x],
		
		);
		$users = $this->users_model->insert_ftba($data);
       
	}
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	public function ftbe()
	{	
	
	 $Date = $this->input->post('Date');
 $timeofday = $this->input->post('timeofday');
 $FoodIngredients = $this->input->post('FoodIngredients');
 $comments = $this->input->post('comments');
 for($x=0; $x<count($Date); $x++){
		$data = array(
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'ftbe_date' => $Date[$x],
           'ftbe_time' => $timeofday[$x],
           'ftbe_foodingredients' => $FoodIngredients[$x],
           'ftbe_comments' => $comments[$x],
		
		);
		$users = $this->users_model->insert_ftbe($data);
       
	}
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	public function stba()
	{	
	
	 $Date = $this->input->post('Date');
 $timeofday = $this->input->post('timeofday');
 $SupplementItem = $this->input->post('SupplementItem');
  $Dosage = $this->input->post('Dosage');
 $comments = $this->input->post('comments');
 for($x=0; $x<count($Date); $x++){
		$data = array(
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'stba_date' => $Date[$x],
           'stba_time' => $timeofday[$x],
           'stba_supplementation' => $SupplementItem[$x],
           'stba_dosage' => $Dosage[$x],
		   'stba_comments' => $comments[$x],
		
		);
		$users = $this->users_model->insert_stba($data);
       
	}
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	public function stbe()
		{	
	
	 $Date = $this->input->post('Date');
 $timeofday = $this->input->post('timeofday');
 $SupplementItem = $this->input->post('SupplementItem');
  $Dosage = $this->input->post('Dosage');
 $comments = $this->input->post('comments');
 for($x=0; $x<count($Date); $x++){
		$data = array(
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'stbe_date' => $Date[$x],
           'stbe_time' => $timeofday[$x],
           'stbe_supplementitem' => $SupplementItem[$x],
           'stbe_dosage' => $Dosage[$x],
		   'stbe_comments' => $comments[$x],
		
		);
		$users = $this->users_model->insert_stbe($data);
       
	}
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	public function sdc()
		{	
	
	 $Date = $this->input->post('Date');
 $timeofday = $this->input->post('timeofday');
 $SupplementItem = $this->input->post('SupplementItem');
  $Dosage = $this->input->post('Dosage');
 $comments = $this->input->post('comments');
 for($x=0; $x<count($Date); $x++){
		$data = array(
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'sdc_date' => $Date[$x],
           'sdc_time' => $timeofday[$x],
           'sdc_supplementitem' => $SupplementItem[$x],
           'sdc_dosage' => $Dosage[$x],
		   'sdc_comments' => $comments[$x],
		
		);
		$users = $this->users_model->insert_sdc($data);
       
	}
		loadViewHelper ( 'mycalendar/mydietplan', $data);
		
	}
	
	
	public function myappointments()
	{	
		$data = array();
		loadViewHelper ( 'mycalendar/myappointments', $data);
		
	}
	public function calendar()
	{	
		$data = array();
		loadViewHelper ( 'mycalendar/calendar', $data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>