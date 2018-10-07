<?php
class Users_model extends CI_Model {
	
	function __construct() 
	{
		/* Call the Model constructor */
		parent::__construct();
	$this->load->library('session');
	//$users_model=$this->load->model('users_model', '', TRUE);
	}

	 function validateUser($userid, $userpass)
  {
    //$query = $this->db->query("SELECT * FROM mht_tbl_userreg where usr_email='$userid' and usr_password='$userpass'");
	$this->db->select('*');
$this->db->from('mht_tbl_userreg');
$this->db->where('usr_email',$userid);
$this->db->where("usr_password",$userpass);
$query=$this->db->get();

	return $query->result_array();
	
	
  }
   function validateDoctor($docid, $docpass)
  {
    //$query = $this->db->query("SELECT * FROM mht_tbl_userreg where usr_email='$userid' and usr_password='$userpass'");
	$this->db->select('*');
$this->db->from('mht_tbl_doctorreg');
$this->db->where('doc_email',$docid);
$this->db->where('doc_password',$docpass);
$query=$this->db->get();

	return $query->result_array();
	
	
  }
  	 function regvalidateUser($userid)
  {
    $query = $this->db->query("SELECT * FROM mht_tbl_userreg where usr_email='$userid'");
	return $result= $query->result_array();
	
	
  }
   function regvalidatedoctor($docid)
  {
    $query = $this->db->query("SELECT * FROM mht_tbl_doctorreg where doc_email='$docid'");
	return $result= $query->result_array();
	
	
  }
    function clientlist($data)
  {   
      $docid=$this->session->userdata['logged_in']['docId'];
	  
    $query = $this->db->query("SELECT clnt.user_approve, clnt.usr_email, clnt.user_id, CONCAT(usrs.usr_firstname,' ',usrs.usr_lastname)AS user_name FROM 
mht_tbl_clientlist clnt  
LEFT JOIN `mht_tbl_userreg` usrs ON usrs.user_id=clnt.user_id WHERE doctor_id='$docid'");
	return $result= $query->result_array();
	
	
  }
    function clientlist1($data)
  {   
      $docid=$this->session->userdata['logged_in']['docId'];
	  
    $query = $this->db->query("SELECT clnt.user_approve, clnt.usr_email, usrs.user_id, CONCAT(usrs.usr_firstname,' ',usrs.usr_lastname)AS user_name FROM 
mht_tbl_clientlist clnt  
LEFT JOIN `mht_tbl_userreg` usrs ON usrs.user_id=clnt.user_id WHERE doctor_id='$docid'");
	return $result= $query->result_array();
	
	
  }
   function user_clientlist($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	  
    $query = $this->db->query("SELECT clnt.doctor_email, clnt.doctor_id, CONCAT(dr.doc_firstname,' ',dr.doc_lastname)AS doc_name, dr.doc_address FROM 
mht_tbl_clientlist clnt  
LEFT JOIN `mht_tbl_doctorreg` dr ON dr.doctor_id=clnt.doctor_id WHERE user_id='$userid'");
	return $result= $query->result_array();
	
	
  }
   function doctorappointment($data)
  {   
      $docid=$this->session->userdata['logged_in']['docId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_doctorappointment');
		$this -> db -> where('doctor_id', $docid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
    function doctorjournal($data)
  {   
   
	
	$this -> db -> select('*');
		$this -> db -> from($data['table']);
		$this -> db -> where('user_id', $data['chooseClient']);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
   function ftba_return($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_foodstobeadded');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
   function ftba_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
    $this->db->where('ftba_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_foodstobeadded');
	
	return ;
	
	
  }
  function ftbe_return($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_foodstobeeliminated');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
   function ftbe_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	    $this->db->where('ftbe_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_foodstobeeliminated');
	
	return ;
	
	
  }
  function stba_return($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_supplementstobeadded');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
    function stba_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	    $this->db->where('stba_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_supplementstobeadded');
	
	return ;
	
	
  }
  function stbe_return($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_supplementstobeeliminated');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
    function stbe_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	    $this->db->where('stbe_id', $data);
	$this->db->where('stbe_id', $userid);
    $this->db->delete('mht_tbl_supplementstobeeliminated');
	
	return ;
	
	
  }
  function sdc_return($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_supplementdosagechange');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
   function sdc_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	    $this->db->where('sdc_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_supplementdosagechange');
	
	return ;
	
	
  }
  function userappointment($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	
	$this -> db -> select('*');
		$this -> db -> from('mht_tbl_userappointment');
		$this -> db -> where('user_id', $userid);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
    function dr_id_req($data)
  {   
     
	
	$this -> db -> select('doctor_id');
		$this -> db -> from('mht_tbl_doctorreg');
		$this -> db -> where('doc_email', $data);				
		$query = $this -> db -> get();
	
	return $result= $query->result_array();
	
	
  }
   function doctorappointment_delete($data)
  {   
      $docid=$this->session->userdata['logged_in']['docId'];
	

    $this->db->where('drap_id', $data);
	$this->db->where('doctor_id', $docid);
    $this->db->delete('mht_tbl_doctorappointment');

	
	return ;
	
	
  }
   function userappointment_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	

    $this->db->where('usrap_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_userappointment');

	
	return ;
	
	
  }
   function userreq_delete($data)
  {   
      $userid=$this->session->userdata['logged_in']['userId'];
	

    $this->db->where('doctor_id', $data);
	$this->db->where('user_id', $userid);
    $this->db->delete('mht_tbl_clientlist');

	
	return ;
	
	
  }
  
  
  
	function getUsers(){
		$query = $this->db->query("SELECT * FROM ".TBL_USERS);
		return $query->result_array();
	}
	
	function login($data)
	{
		$this -> db -> select('id,tbl_username,tbl_mobile, tbl_email');
		$this -> db -> from(TBL_USERS);
		$this -> db -> where('tbl_email', $data['email']);
		$this -> db -> where('tbl_password', MD5($data['password']));
		$this -> db -> where('tbl_isActive', 1);		
		$query = $this -> db -> get();		
		return $query->result_array();
	}
	
	function getUserByEmail($data)
	{
		$this -> db -> select('tbl_email');
		$this -> db -> from(TBL_USERS);
		$this -> db -> where('tbl_email', $data['email']);				
		$query = $this -> db -> get();
		return $query->result_array();
	}
	
	function getUserByMobile($data)
	{
		$this -> db -> select('tbl_mobile');
		$this -> db -> from(TBL_USERS);
		$this -> db -> where(array('tbl_mobile'=>$data['mobile'],'tbl_isActive'=>1));				
		$query = $this -> db -> get();		
		return $query->result_array();
	}
	function doctorapprove($data)
	{ 
	$data1= array(
		
		'user_approve'=>'Approved',
		);
	
	$doc_id =$this->session->userdata['logged_in']['docId'];
		$this->db->where('doctor_id',$doc_id);
		$this->db->where('user_id',$data['userid']);
		$this->db->update('mht_tbl_clientlist', $data1);
	}
	function doctordeny($data)
	{
$data1= array(
		
		'user_approve'=>'Deny',
		);		
	$doc_id =$this->session->userdata['logged_in']['docId'];
	
	    $this->db->where('doctor_id', $doc_id);
	$this->db->where('user_id', $data['userid']);
    $this->db->delete('mht_tbl_clientlist');
	
		//$this->db->where('doctor_id',$doc_id);
		//$this->db->where('user_id',$data['userid']);
		//$this->db->update('mht_tbl_clientlist', $data1);
	}
	
	function createUser($data){
		$data = array(
		   'tbl_username' => $data['userName'] ,
		   'tbl_password' => md5($data['password']),
		   'tbl_mobile' => $data['mobile'],
		   'tbl_email' => $data['email'],
		   'tbl_createdOn' => date("Y-m-d H:i:s"),
		);
		$insertRecord = $this->db->insert(TBL_USERS, $data) ? $this->db->insert_id() : 'fail' ;		
		return $insertRecord;	
	}
	
	function getUserById($id){
		$this -> db -> select('id,tbl_username,tbl_mobile, tbl_email');
		$this -> db -> from(TBL_USERS);
		$this -> db -> where(array('id'=>$id,'tbl_isActive'=>1));				
		$query = $this -> db -> get();
		return $query->result_array();
	}
	
			function insert_rec($data)
	{ 
		$this->db->insert('mht_tbl_clientlist', $data);
	
	}
			function insert_request($data)
	{ 
		$this->db->insert('mht_tbl_clientlist', $data);
	
	}
				function insert_ftba($data)
	{ 
		$this->db->insert('mht_tbl_foodstobeadded', $data);
	
	}
				function insert_ftbe($data)
	{ 
		$this->db->insert('mht_tbl_foodstobeeliminated', $data);
	
	}
				function insert_stba($data)
	{ 
		$this->db->insert('mht_tbl_supplementstobeadded', $data);
	
	}
				function insert_stbe($data)
	{ 
		$this->db->insert('mht_tbl_supplementstobeeliminated', $data);
	
	}
				function insert_sdc($data)
	{ 
		$this->db->insert('mht_tbl_supplementdosagechange', $data);
	
	}
	
			function insert_drappointment($data)
	{ 
		$this->db->insert('mht_tbl_doctorappointment', $data);
	
	}
			function insert_usrappointment($data)
	{ 
		$this->db->insert('mht_tbl_userappointment', $data);
	
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
			function insert_foodentry($data)
	{ 
		$this->db->insert('mht_tbl_foodentry', $data);
	
	}
			function insert_supplements($data)
	{
		
		$this->db->insert('mht_tbl_supplements', $data);
	
	}
		function insert_bathdetails($data)
	{
		
		$this->db->insert('mht_tbl_bathdetails', $data);
	
	}
		function insert_sleepdetails($data)
	{
		
		$this->db->insert('mht_tbl_sleepdetails', $data);
	
	}
		function insert_bowelmovements($data)
	{
		
		$this->db->insert('mht_tbl_bowelmovement', $data);
	
	}
		function insert_symptoms($data)
	{
		
		$this->db->insert('mht_tbl_symptoms', $data);
	
	}
		function insert_therapy($data)
	{
		
		$this->db->insert('mht_tbl_therapy', $data);
	
	}
		function insert_fitness($data)
	{
		
		$this->db->insert('mht_tbl_fitness', $data);
	
	}
		function insert_physicalprofileentry($data)
	{
		
		$this->db->insert('mht_tbl_physicalmarkers', $data);
	
	}
		function insert_cholestrolmarkers($data)
	{
		
		$this->db->insert('mht_tbl_cholestrolmarkers', $data);
	
	}
	function insert_thyroidmarkers($data)
	{
		
		$this->db->insert('mht_tbl_thyroidmarkers', $data);
	
	}
	function insert_bloodsugarmarkers($data)
	{
		
		$this->db->insert('mht_tbl_bloodsugar', $data);
	
	}
	function insert_heartratemarkers($data)
	{
		
		$this->db->insert('mht_tbl_heartratemarkers', $data);
	
	}
	function insert_ironmarkers($data)
	{
		
		$this->db->insert('mht_tbl_ironmarkers', $data);
	
	}
	function insert_othermarkers($data)
	{
		
		$this->db->insert('mht_tbl_othermarkers', $data);
	
	}	





//////////////////////////////////////////////////////////////////////////////////////////////////
	


	function addUsers($data)
  {
	  
	$this->db->insert('mht_tbl_userreg', $data);
		//$result=array("status"=>"success","message"=>"not found");
		//exit(json_encode($result));
  }
  	 function addDoctor($data)
  {
	  
	$this->db->insert('mht_tbl_doctorreg', $data);
		//$result=array("status"=>"success","message"=>"not found");
		//exit(json_encode($result));
  }
	
	
}
?>