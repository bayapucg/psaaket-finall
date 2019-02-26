<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_role_list(){
	$this->db->select('*')->from('roles');
	$this->db->where('status',1);
	$this->db->where('roles.role_id!=',1);
	$this->db->where('roles.role_id!=',4);
	$this->db->where('roles.role_id!=',5);
	$this->db->where('roles.role_id!=',6);
    return $this->db->get()->result_array();
	}
	public function get_role_list_data(){
	$this->db->select('*')->from('roles');
	$this->db->where('status',1);
	$this->db->where('roles.role_id!=',1);
	$this->db->where('roles.role_id!=',2);
	$this->db->where('roles.role_id!=',3);
    return $this->db->get()->result_array();
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
	$this->db->select('employees.*,roles.role')->from('employees');
$this->db->join('roles', 'roles.role_id = employees.role', 'left');
	$this->db->where('employees.status!=',2);
    return $this->db->get()->result_array();
	}		
	
	public function get_employee_lists_data(){
	$this->db->select('employees.*,roles.role')->from('employees');
$this->db->join('roles', 'roles.role_id = employees.role', 'left');
	$this->db->where('employees.status!=',2);
	$this->db->where('employees.role!=',1);
    return $this->db->get()->result_array();
	}		
	
	public function edit_employee_details($e_id){
	$this->db->select('*')->from('employees');		
		$this->db->where('e_id',$e_id);
        return $this->db->get()->row_array();
	}		
	public function update_employee_basic_details($e_id,$data){
	$this->db->where('e_id',$e_id);
    return $this->db->update('employees',$data);	
	}		
	public function delete_employee_details_data($e_id){
	$this->db->where('e_id',$e_id);
    return $this->db->delete('employees');
	}		
		
		

}