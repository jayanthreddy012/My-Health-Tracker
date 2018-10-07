<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This method is used to generate a random number for password generation.
 */
if(!function_exists('generateRandNumber')){
	
	function generateRandNumber($length=0){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return strtolower($randomString);
	}
}

if(!function_exists('get_data')){
	function get_data($table,$where=FALSE,$select=FALSE,$limit=FALSE)
	{
		$ci =& get_instance();
		if($where)
			$ci->db->where($where);
		if($select)
			$ci->db->select($select);
		if($limit)
			$ci->db->limit($limit);
	
		return $ci->db->get($table);
	}
}


if(!function_exists('send_email_helper')){
	function send_email_helper($mailObj)
	{
		$CI =& get_instance();		
		$config = Array(
               'protocol' => 'smtp',
               'smtp_host' => 'ssl://mail.ganithamguru.com',
               'smtp_port' => 465,
               'smtp_user' => 'noreply@ganithamguru.com',
               'smtp_pass' => 'India*123',
               'mailtype'  => 'html',
               'charset'   => 'iso-8859-1'
           );
		 
		// echo "<pre>";print_r($mailObj); exit;
		$CI =& get_instance();
		$CI->load->library('email', $config);
		$CI->email->set_newline("\r\n");
		//$CI->email->clear(TRUE);
		$CI->email->from('apps.twinkle@gmail.com','Admin');
		$CI->email->to($mailObj['send_to']);
		//$CI->email->bcc('podakkals@hotmail.com'); 	
		$CI->email->subject($mailObj['subject']);		
		$CI->email->message($mailObj['message']);
		$mailStatus = $CI->email->send();		
		return $mailStatus;
	}
}
if(!function_exists('time_ago')){
	function time_ago($date_time)
	{
		$date2= date_create(date('Y-m-d H:i:s'));
		$date1= date_create($date_time);
		$diff=date_diff($date1,$date2);
		$left='0 sec ago';
		if($date1 < $date2)
		{
			if($diff->s != 0)
				$left = $diff->s.' sec ago';
			if($diff->i != 0)
				$left = $diff->i.' mins ago';
			if($diff->h != 0)
				$left = $diff->h.' hours ago';
			if($diff->d != 0)
				$left = $diff->d.' days ago';
			if($diff->m != 0)
				$left = $diff->m.' months ago';
			if($diff->y != 0)
				$left = $diff->y.' years ago';
		}
	
		return $left;
	}
}

if(!function_exists('generateBreadcrumb')){
	function generateBreadcrumb(){
		$ci = &get_instance();
		$i=1;
		$uri = $ci->uri->segment($i);
		$link = '
  <div class="pageheader">
      <h2><i class="fa fa-edit"></i>'.$ci->uri->segment($i).'</h2>
      <div class="breadcrumb-wrapper">

  <ol class="breadcrumb">';

		while($uri != ''){
			$prep_link = '';
			for($j=1; $j<=$i;$j++){
				$prep_link .= $ci->uri->segment($j).'/';
			}

			if($ci->uri->segment($i+1) == ''){
				$link.='<li class="active"><a href="'.site_url($prep_link).'">';
				$link.=$ci->uri->segment($i).'</a></li> ';
			}else{
				$link.='<li><a href="'.site_url($prep_link).'">';
				$link.=$ci->uri->segment($i).'</a><span class="divider"></span></li> ';
			}

			$i++;
			$uri = $ci->uri->segment($i);
		}
		$link .= '</ol></div></div>';
		return $link;
	}
}

if (! function_exists ( 'neatPrintAndDie' )) {
	function neatPrintAndDie($variable) {
		echo "<pre>";
		print_r ( $variable );
		echo "</pre>";
		die ();
	}
}
	
if(!function_exists('loadViewHelper')){
	function loadViewHelper($filepath,$data){			
		$CI =& get_instance();		
		$CI->load->view('layouts/header',$data);
		$CI->load->view('layouts/school_menu');	
		$CI->load->view($filepath,$data);
		$CI->load->view('layouts/footer');	
	}
	
}
