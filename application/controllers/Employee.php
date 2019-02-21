<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
		$this->load->model('Employee_model');
	
		}
	
	
	public function lists(){
		if($this->session->userdata('saket_details'))
		{
		$userdetails=$this->session->userdata('saket_details');	
		$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			//echo '<pre>';print_r($data);exit;	

				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/employees-list',$data);
				$this->load->view('director/footer',$data);
		        
	     }else{
		redirect('dashboard');
		
	}
}	
	
public function add(){
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			//echo '<pre>';print_r($data);exit;		
			
			
			
				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/add-employee',$data);
				$this->load->view('director/footer',$data);
		        
	     }else{
		redirect('dashboard');
		
	}
}		
	
public function addpost(){
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
					
			$post=$this->input->post();
			echo '<pre>';print_r($post);exit;
			
			
				
		        
	     }else{
		redirect('dashboard');
		
	}
}		
		
	
	
	
	
	
	
	
}
