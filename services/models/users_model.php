<?php
class Users_model extends CI_Model {
	
	function __construct() 
	{
		/* Call the Model constructor */
		parent::__construct();
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
	
	
	
	
}
?>