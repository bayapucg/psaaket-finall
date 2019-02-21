<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_employee_details($e_id){
	$this->db->select('*')->from('employees');
	$this->db->where('e_id', $e_id);
    return $this->db->get()->row_array();
	}
	
	
	
	
	
	
	
	
		

}