<?php
class Otp_model extends CI_Model {
	
	function __construct() 
	{
		/* Call the Model constructor */
		parent::__construct();
	}
	
	function getOtpByEmailAndType($data,$type)
	{
		$this -> db -> select();
		$this -> db -> from(TBL_OTP);
		$this -> db -> where(array('emailId'=>$data['email'],'otp_type'=>$type));
		$query = $this -> db -> get();		
		return $query->result_array();
	}
	
	function getUserByMobile($data)
	{
		$this -> db -> select('tbl_mobile');
		$this -> db -> from(TBL_OTP);
		$this -> db -> where(array('tbl_mobile'=>$data['mobile'],'tbl_isActive'=>1));				
		$query = $this -> db -> get();		
		return $query->result_array();
	}
	
	function sendotp($data,$otp,$type){
		$data = array(
		   'emailId' => $data['email'] ,
		   'otp' => $otp,
		   'otp_type' => $type
		);
		$insertRecord = $this->db->insert(TBL_OTP, $data) ? $this->db->insert_id() : 'fail' ;		
		return $insertRecord;	
	}
	
	function getUserById($id){
		$this -> db -> select('id,tbl_username,tbl_mobile, tbl_email');
		$this -> db -> from(TBL_OTP);
		$this -> db -> where(array('id'=>$id,'tbl_isActive'=>1));				
		$query = $this -> db -> get();
		return $query->result_array();
	}
	
	function updateotp($id,$otp){
		$data = array(
               'otp' => $otp              
            );

		$this->db->where('id', $id);
		$this->db->update(TBL_OTP, $data); 
		return $this->db->get(TBL_OTP)->row()->id;		
	}
	
	function getOtpByEmail($data){
		$this -> db -> select();
		$this -> db -> from(TBL_OTP);
		$this -> db -> where(array('emailId'=>$data['email'],'otp'=>$data['otp'],'otp_type'=>$data['type']));				
		$query = $this -> db -> get();	
		//echo $this->db->last_query(); exit;	
		return $query->result_array();
	}
	
	function deleteotp($id){
		$this->db->delete(TBL_OTP, array('id' => $id)); 
		
		if($this->db->affected_rows()>0)
		   return true;
		 else
		   return false;
	}
	
	
	
	
}
?>