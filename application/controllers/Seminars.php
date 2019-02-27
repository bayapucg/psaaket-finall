<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminars extends CI_Controller {
	
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
	
		}
	
	
	public function registration(){
		if(!$this->session->userdata('saket_details'))
		{
				
				$this->load->view('admin/header');
				$this->load->view('admin/seminar-registration');
				$this->load->view('admin/footer');
		        
	     }else{
				redirect('home');
			}
	}
	
	public function registerpost(){
		$post=$this->input->post();
		$add=array('');
		echo '<pre>';print_r($post);exit;
		
	}
	public  function userslist(){
		$this->load->view('admin/header');
		$this->load->view('admin/seminar-registration-user_list');
		$this->load->view('admin/footer');
	}
}	
	

