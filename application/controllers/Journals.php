<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Journals extends CI_Controller {

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
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/index', $data);
	}
	public function foodentry()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/foodentry', $data);
	}
		public function add_foodentry()
	{  


 //echo '<pre>';print_r($this->input->post('course')); exit;
 //$this->load->library('session');
 
 $course = $this->input->post('course');
 $food_time = $this->input->post('food_time');
 $fooddesc = $this->input->post('fooddesc');
 $comments = $this->input->post('comments');
 $watertaken = $this->input->post('watertaken');
	for($x=0; $x<count($course); $x++){
	//foreach($course as $val)
		$data = array(
		   'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'fe_course' => $course[$x],
           'fe_time' => $food_time[$x],
           'fe_foodtaken' => $fooddesc[$x],
           'fe_comments' => $comments[$x],
		   'fe_watertaken' => $watertaken[0],
          );
		  $users = $this->users_model->insert_foodentry($data);
       
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/foodentry', $data);
	}
	public function supplements()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/supplements', $data);
	}
			public function add_supplements()
	{   
		

	 $supplement_time = $this->input->post('supplement_time');
 $supplement_dosage = $this->input->post('supplement_dosage');
    	for($x=0; $x<count($supplement_time); $x++){
		$data = array(
		
		   'user_id' =>$this->session->userdata['logged_in']['userId'],
		   'supp_time' => $supplement_time[$x],
           'supp_supplementstaken' => $supplement_dosage[$x],
           
          );
		  $users = $this->users_model->insert_supplements($data);

	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/supplements', $data);
	}
	public function bathdetails()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/bathdetails', $data);
	}
	public function add_bathdetails()
	{   	

	 $timeofday = $this->input->post('timeofday');
 $typeofbath = $this->input->post('typeofbath');
 $detoxwith = $this->input->post('detoxwith');
  $comments = $this->input->post('comments');
    	for($x=0; $x<count($timeofday); $x++){
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		    'bd_time' => $timeofday[$x],
           'bd_typeofbath' => $typeofbath[$x],
		    'bd_detoxwith' => $detoxwith[$x],
           'bd_comments' => $comments[$x],
           
          );
		  $users = $this->users_model->insert_bathdetails($data);
      
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/bathdetails', $data);
	}
	public function sleepdetails()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/sleepdetails', $data);
	}
	public function add_sleepdetails()
	{   
	
	 $bedtimeprep = $this->input->post('bedtimeprep');
 $timeinbed = $this->input->post('timeinbed');
 $wakeuptime = $this->input->post('wakeuptime');
  $timeswokeup = $this->input->post('timeswokeup');
   $sleeppattern = $this->input->post('sleeppattern');
 $bedwetting = $this->input->post('bedwetting');
  $comments = $this->input->post('comments');
    	for($x=0; $x<count($bedtimeprep); $x++){
		$data = array(
		
		   'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'sd_bedtimeprep' => $bedtimeprep[$x],
           'sd_timeinbed' => $timeinbed[$x],
		    'sd_wakeuptime' => $wakeuptime[$x],
           'sd_timeswokeup' => $timeswokeup[$x],
		   'sd_sleeppattern' => $sleeppattern[$x],
		    'sd_bedwetting' => $bedwetting[$x],
           'sd_comments' => $comments[$x],
           
           
          );
		  $users = $this->users_model->insert_sleepdetails($data);
       
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/sleepdetails', $data);
	}
	public function bowelmovements()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/bowelmovements', $data);
	}
	public function add_bowelmovements()
	{   
	
	 $time = $this->input->post('time');
 $bmtype = $this->input->post('bmtype');
 $Enema = $this->input->post('Enema/Laxative');
  $mucus = $this->input->post('mucus');
   $undigested = $this->input->post('undigested');
 $stoolcolor = $this->input->post('stoolcolor');
  $comments = $this->input->post('comments');
    	for($x=0; $x<count($time); $x++){
		$data = array(
		
		   'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'bm_time' => $time[$x],
           'bm_bmtype' => $bmtype[$x],
		    'bm_enema/laxative' => $Enema[$x],
           'bm_mucus' => $mucus[$x],
		   'bm_undigested' => $undigested[$x],
		    'bm_stoolcolor' => $stoolcolor[$x],
           'bm_comments' => $comments[$x],
          );
		  $users = $this->users_model->insert_bowelmovements($data);
      
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/bowelmovements', $data);
	}
	public function healthmarkers()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/healthmarkers', $data);
	}
	public function add_healthmarkers()
	{   
	 $height = $this->input->post('height');
 $weight = $this->input->post('weight');
 $HDL = $this->input->post('HDL');
  $LDL = $this->input->post('LDL');
   $Totalcholestrol = $this->input->post('Totalcholestrol');
 $Triglycerides = $this->input->post('Triglycerides');
  $RT3 = $this->input->post('RT3');
  $T3 = $this->input->post('T3');
  $TotalT4 = $this->input->post('TotalT4');
   $TPOAb = $this->input->post('TPOAb');
 $TSH = $this->input->post('TSH');
  $FastingBloodGlucose = $this->input->post('FastingBloodGlucose');
    $Hemoglobina1c = $this->input->post('Hemoglobina1c');
  $bp = $this->input->post('bp');
  $Pulse = $this->input->post('Pulse');
   $Ferritin = $this->input->post('Ferritin');
 $Hemoglobin = $this->input->post('Hemoglobin');
  $protein = $this->input->post('protein');
    $Urine = $this->input->post('Urine');
 $Vitamind = $this->input->post('Vitamind');
 
    	for($x=0; $x<count($height); $x++){//physical profile entry
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'pm_height' => $height[$x],
           'pm_weight' => $weight[$x],
           
          );
		    $users = $this->users_model->insert_physicalprofileentry($data);
       
	}
		for($x=0; $x<count($HDL); $x++){//cholestrol markers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'cm_hdl' => $HDL[$x],
           'cm_ldl' => $LDL[$x],
           'cm_totalcholestrol' => $Totalcholestrol[$x],
		   'cm_triglycerides' => $Triglycerides[$x],
          );
		    $users = $this->users_model->insert_cholestrolmarkers($data);
       
	}
		for($x=0; $x<count($RT3); $x++){//thyroid markers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'thy_rt3' => $RT3[$x],
           'thy_t3' => $T3[$x],
		   'thy_totalt4' => $TotalT4[$x],
           'thy_tpoab' => $TPOAb[$x],
		   'thy_tsh' => $TSH[$x],
           
           
          );
		    $users = $this->users_model->insert_thyroidmarkers($data);
       
	}
	
		for($x=0; $x<count($FastingBloodGlucose); $x++){//blood sugar markers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'bs_ha1c' => $FastingBloodGlucose[$x],
           'bs_fbg' => $Hemoglobina1c[$x],
           
          );
		    $users = $this->users_model->insert_bloodsugarmarkers($data);
       
	}
		for($x=0; $x<count($bp); $x++){//heart rate markers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'hrm_bp' => $bp[$x],
           'hrm_pulse' => $Pulse[$x],
           
          );
		    $users = $this->users_model->insert_heartratemarkers($data);
       
	}
		for($x=0; $x<count($Ferritin); $x++){//iron markers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'irm_ferritin' => $Ferritin[$x],
           'irm_hemoglobin' => $Hemoglobin[$x],
           
          );
		    $users = $this->users_model->insert_ironmarkers($data);
       
	}
	
		for($x=0; $x<count($protein); $x++){//othermarkers
		$data = array(
		
		  'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'om_c-reactiveprotein' => $protein[$x],
           'om_urine_ph' => $Urine[$x],
           'om_vit_d' => $Vitamind[$x],
          );
		    $users = $this->users_model->insert_othermarkers($data);
       
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/healthmarkers', $data);
	}
	public function symptoms()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/symptoms', $data);
	}
	public function add_symptoms()
	{   
    	for($x=0; $x<2; $x++){
		$data = array(
		
		   'user_id' => $this->input->post('userEmail'),
		   'supp_time' => $this->input->post('supplement_time[x]'),
           'supp_supplementstaken' => $this->input->post('supplement_dosage[x]'),
           
          );
       $this->load->model('users_model/insert_symptoms', $data);
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/symptoms', $data);
	}
	public function fitness()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/fitness', $data);
	}
	public function add_fitness()
	{   
	$users_model=$this->load->model('users_model', '', TRUE);
	$TypeOfFitness = $this->input->post('TypeOfFitness');
  $start_time = $this->input->post('start_time');
   $end_time = $this->input->post('end_time');
 $calories = $this->input->post('calories');
  $comments = $this->input->post('comments');
    	for($x=0; $x<count($start_time); $x++){
		$data = array(
		
		 'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'fit_typeoffitness' => $TypeOfFitness[$x],
           'fit_starttime' => $start_time[$x],
		   'fit_endtime' => $end_time[$x],
		    'fit_calories' => $calories[$x],
           'fit_comments' => $comments[$x],
          );
		  $users = $this->users_model->insert_fitness($data);
      
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/fitness', $data);
	}
		public function therapy()
	{
		$data = array(
              /* 'title' => APP_TITLE.' - Dashboard',
               'heading' => 'SM',
			   'tableTitle' => 'Dashboard',
               'message' => 'Dashboard'	*/		   
          );		
		loadViewHelper ( 'journals/therapy', $data);
	}
	public function add_therapy()
	{   $users_model=$this->load->model('users_model', '', TRUE);
	$typeoftherapy = $this->input->post('typeoftherapy');
  $start_time = $this->input->post('start_time');
   $end_time = $this->input->post('end_time');
  $comments = $this->input->post('comments');
    	for($x=0; $x<count($start_time); $x++){
		$data = array(
		
		   'user_id' =>$this->session->userdata['logged_in']['userId'],
		  'th_type' => $typeoftherapy[$x],
           'th_starttime' => $start_time[$x],
		   'th_endtime' => $end_time[$x],
           'th_comments' => $comments[$x],
          );
		   $users = $this->users_model->insert_therapy($data);
      
	}
    $data['message'] = 'Data Inserted Successfully';

	
		loadViewHelper ( 'journals/therapy', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>