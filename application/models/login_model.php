<?php
class Login_model extends CI_Model {
  
  private $table = 'admin';
  
	function __construct() 
	{
		/* Call the Model constructor */
		parent::__construct();
	}

	function query_format(){
		$query = $this->db->query("SELECT * FROM $this->table");
		return $query->result_array();
	}	
	function login($email, $password)
	{
		
	   $this -> db -> select('id,userName,email, password,status');
	   $this -> db -> from("admin");
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', MD5($password));
	   $this -> db -> limit(1);
		
	   $query = $this -> db -> get();
	  
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	}
	
}
?>