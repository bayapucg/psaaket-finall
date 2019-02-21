<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function check_today_login($e_id,$l_date){
		$this->db->select('*')->from('login_details');
		$this->db->where('e_id', $e_id);	
		$this->db->where('l_date', $l_date);	
        return $this->db->get()->row_array();
	}
	
	public function update_logout_time_status($l_id,$e_id,$date){
		$sql1="UPDATE login_details SET e_logout_time ='".$date."' WHERE l_id = '".$l_id."' AND e_id = '".$e_id."'";
       	return $this->db->query($sql1);
	}
	
	public function update_sataus_details_log($e_id,$data){
	$this->db->where('e_id',$e_id);
    	return $this->db->update("employees",$data);
	}
	
	
	
	
		

}