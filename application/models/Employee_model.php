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
	public function employee_details($emp_id){
		$this->db->select('*')->from('employees_data');		
		$this->db->where('emp_id',$emp_id);
        return $this->db->get()->row_array();
	}
	
	public function save_employee_basic_details($data){
		$this->db->insert('employees', $data);
		return $insert_id = $this->db->insert_id();
	}	
	public function get_employee_lists(){
	$this->db->select('*')->from('employees');
	$this->db->where('employees.status!=',2);
    return $this->db->get()->result_array();
	}		
	public function edit_employee_details($e_id){
	$this->db->select('*')->from('employees');		
		$this->db->where('e_id',$e_id);
        return $this->db->get()->row_array();
	}		
		
		
		
		

}