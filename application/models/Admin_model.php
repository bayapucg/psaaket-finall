<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public function login_details($e_email_work,$e_password){
		$sql = "SELECT e_id,role_id,e_email_work FROM employees WHERE (e_email_work ='".$e_email_work."' AND e_password='".$e_password."'  AND status='1') OR (e_email_work ='".$e_email_work."' AND e_password='".$e_password."' AND status='1')";
		return $this->db->query($sql)->row_array();	
	}
	public function update_sataus_details_log($e_id,$data){
	$this->db->where('e_id',$e_id);
    	return $this->db->update("employees",$data);
	}
	public function check_today_login($e_id,$l_date){
		$this->db->select('*')->from('login_details');
		$this->db->where('e_id', $e_id);	
		$this->db->where('l_date', $l_date);	
        return $this->db->get()->row_array();
	}
	
public function save_login_time_status($data){
		$this->db->insert('login_details', $data);
		return $insert_id = $this->db->insert_id();
	}

public  function check_email_exits($email){
		$this->db->select('employees.e_org_password,employees.e_id,employees.e_email_work')->from('employees');		
		$this->db->where('e_email_work', $email);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();
	}

	

}