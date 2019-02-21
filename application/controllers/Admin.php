<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
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
		$this->load->model('Admin_model');
	
		}
	
	public function index()
	{	
		
		if(!$this->session->userdata('saket_details'))
		{	 
		
	    $this->load->view('director/login');
	     }else{
			$this->session->set_flashdata('loginerror',"Invalid Email Address or Password!");
			redirect('dashboard');
		}
	}

	public function loginpost(){
			
		$post=$this->input->post();
		//echo'<pre>';print_r($post);exit;
		$logindetails = $this->Admin_model->login_details($post['e_email_work'],md5($post['e_password']));
		//echo'<pre>';print_r($logindetails);exit;
		if(count($logindetails)>0){
			$update_data=array('login_status'=>1);
			$upadte=$this->Admin_model->update_sataus_details_log($logindetails['e_id'],$update_data);
			$checklogin= $this->Admin_model->check_today_login($logindetails['e_id'],date('Y-m-d'));
			//echo'<pre>';print_r($checklogin);
				$login_data=array(
				'e_id'=>$logindetails['e_id'],
				'e_login_time'=>date("Y-m-d H:i:s"),
				'l_date'=>date('Y-m-d'),
				);
			//echo'<pre>';print_r($login_data);exit;
			$this->session->set_userdata('saket_details',$logindetails);

			if(count($checklogin)==0){
					$this->Admin_model->save_login_time_status($login_data);
					redirect('dashboard');
				
			}else{
				redirect('dashboard');
			}
				
		}else{
			$this->session->set_flashdata('error',"Invalid Email Address or Password!");
			redirect('admin');
		}
		
	}
	public function forgot()
	{	
		
		if(!$this->session->userdata('saket_details'))
		{	 
		
	    $this->load->view('director/forgot_password');
	     }else{
			$this->session->set_flashdata('error',"Please login and continue");
			redirect('admin');
		}
	}
	public function forgotpost(){
		$post=$this->input->post();

		$check_email=$this->Admin_model->check_email_exits($post['e_email_work']);
         
			if(count($check_email)>0){
				
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->to($check_email['e_email_work']);
				$this->email->from('admin@psaket.com', 'PSAKET'); 
				$this->email->subject('Forgot Password'); 
				$body = "<b> Your Account login Password is </b> : ".$check_email['e_org_password'];
				$los=$this->email->message($body);
				//echo'<pre>';print_r($los);exit;

				if ($this->email->send())
				{
					$this->session->set_flashdata('success',"Password sent to your registered email address. Please Check your registered email address");
					redirect('admin');
				}else{
					$this->session->set_flashdata('error'," In Localhost mail  didn't sent");
					redirect('admin');
				}
				

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('admin');	
			}
		
}




}