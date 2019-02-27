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
		$this->load->model('Seminar_Model');
		$check=$this->Seminar_Model->check_user_exits($post['uphone']);
		if(count($check)>0){
			$this->session->set_flashdata('error','Mobile Number already exists. Please use another Mobile Number');
			redirect('seminars/registration');
		}
		$add=array(
		'u_name'=>isset($post['uname'])?$post['uname']:'',
		'u_email'=>isset($post['uemail'])?$post['uemail']:'',
		'u_mobile'=>isset($post['uphone'])?$post['uphone']:'',
		'created_at'=>date('Y-m-d H:i:s'),
		'date'=>date('Y-m-d'),
		);
		
		$saver=$this->Seminar_Model->save_register_users($add);
		if(count($saver)>0){
			$this->session->set_flashdata('success',"You have successfully registered.");
			redirect('seminars/registration');
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('seminars/registration');
		}
		//echo '<pre>';print_r($post);exit;
		
	}
	public  function userslist(){
		$this->load->view('admin/header');
		$this->load->model('Seminar_Model');
		$data['user_list']=$this->Seminar_Model->get_seminors_registered_users_list();
		$this->load->view('admin/seminar-registration-user_list',$data);
		$this->load->view('admin/footer');
	}
}	
	

