<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
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
		$this->load->model('Dashboard_model');
		$this->load->model('Employee_model');
	
		}
	
	
	public function index(){
		if($this->session->userdata('saket_details'))
		{
				$userdetails=$this->session->userdata('saket_details');	
		$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			//echo '<pre>';print_r($data);exit;	
				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/index',$data);
				$this->load->view('director/footer',$data);
		        
	     }else{
		redirect('dashboard');
		
	}
}	
	public function logout(){
		if($this->session->userdata('saket_details'))
		{
			$saket_details=$this->session->userdata('saket_details');
			$checklogin= $this->Dashboard_model->check_today_login($saket_details['e_id'],date('Y-m-d'));
			$this->Dashboard_model->update_logout_time_status($checklogin['l_id'],$checklogin['e_id'],date('Y-m-d H:i:s'));
			//echo'<pre>';print_r($login);exit;
			$update_data=array('login_status'=>0);
			$upadte=$this->Dashboard_model->update_sataus_details_log($saket_details['e_id'],$update_data);
              //echo'<pre>';print_r($log);exit;
				
			$this->session->unset_userdata($saket_details);
			$this->session->unset_userdata('saket_details');
			$this->session->sess_destroy('saket_details');
			$this->session->unset_userdata('saket_details');
			redirect('admin');
		}else{
		 $this->session->set_flashdata('loginerror','Please login to continue');
		 redirect('admin');
		} 
	}
	
	
	
	
	
	
	
	
	
	
}
