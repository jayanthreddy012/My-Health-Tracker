<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientdata extends CI_Controller {

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
		$data1=array();
		$result=$this->users_model->clientlist1($data1);
				$data = array('test'=>$result);
		  logindoctorhelper ( 'clientdata/index', $data);
		
	}
	public function clientdata_return()
	{  $chooseClient=$_POST['chooseClient'];
	$choosejournal=$_POST['choosejournal'];

	switch ($choosejournal){
	case 'food':
		$table='mht_tbl_foodentry';
		$datath=array(
		'FoodCourse','FoodTime','FoodTaken','WaterTaken','Comments','Entry-on');
		$datatr=array(
		'fe_course','fe_time','fe_foodtaken','fe_watertaken','fe_comments','fe_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
	   break;
    case 'supplements':
        $table='mht_tbl_supplements';
		$datath=array(
		'SupplementTaken-time','Supplements-Info','Entry-on');
		$datatr=array(
		'supp_time','supp_supplementstaken','supp_entry_on'
		);
		
		
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
    case 'bath':
        $table='mht_tbl_bathdetails';
		$datath=array(
		'BathTime','BathType','DetoxWith','Comments','Entry-on');
		$datatr=array(
		'bd_time','bd_typeofbath','bd_detoxwith','bd_comments','bd_entry_on'
		);
		$theader=array("sno","");
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
    case 'sleep1':
        $table='mht_tbl_sleepdetails';
		$datath=array(
		'BedTime Prep','TimeinBed','WakeupTime','TimesWokeup','SleepPattern','BedWetting','Comments','Entry-on');
		$datatr=array(
		'sd_bedtimeprep','sd_timeinbed','sd_wakeuptime','sd_timeswokeup','sd_sleeppattern','sd_bedwetting','sd_comments','sd_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
    case 'bowel':
        $table='mht_tbl_bowelmovement';
		$datath=array(
		'Bowel Time','BowelType','Enema/Laxative','Mucus','Undigested','Stoolcolor','Comments','Entry-on');
		$datatr=array(
		'bm_time','bm_bmtype','bm_enema/laxative','bm_mucus','bm_undigested','bm_stoolcolor','bm_comments','bm_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
    case 'therapy':
        $table='mht_tbl_therapy';
		$datath=array(
		'TherapyType','StartTime','EndTime','Comments','Entry-on');
		$datatr=array(
		'th_type','th_starttime','th_endtime','th_comments','th_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
	case 'fitness':
        $table='mht_tbl_fitness';
		$datath=array(
		'FitnessType','StartTime','EndTime','CaloriesBurnt','Comments','Entry-on');
		$datatr=array(
		'fit_typeoffitness','fit_starttime','fit_endtime','fit_calories','fit_comments','fit_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;
	case 'health':
        $table='mht_tbl_foodentry';
		$datath=array(
		'Food_course','Food_Time','FoodTaken','WaterTaken','Comments','Entry-on');
		$datatr=array(
		'fe_course','fe_time','fe_foodtaken','fe_watertaken','fe_comments','fe_entry_on'
		);
       $journal1=array(
	   'chooseClient'=>$chooseClient,
	   'table'=>$table
	   );
        break;	
	}
		$result1=$this->users_model->doctorjournal($journal1);
		/*if(sizeof($result)>0){
			exit(json_encode(array("status"=>"success","result"=>$result)));
		}else{
			exit(json_encode(array("status"=>"no data found")));
		}*/
		
			$data1=array();
		$result=$this->users_model->clientlist1($data1);
				$data = array('test'=>$result,'th'=>$datath,'td'=>$result1,'tr'=>$datatr);
		  logindoctorhelper ( 'clientdata/index', $data);
		 
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>