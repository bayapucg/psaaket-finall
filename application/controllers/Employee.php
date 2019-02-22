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
             $data['employee_list']=$this->Employee_model->get_employee_lists();
			 //echo '<pre>';print_r($data);exit;
			 
				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/employees-list',$data);
				$this->load->view('director/footer',$data);
		        
	    }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
}	
	
	public function add()
	{
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			//echo '<pre>';print_r($data);exit;	
				$data['role_list']= $this->Employee_model->get_role_list();
				//echo '<pre>';print_r($data);exit;
				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/add-employee',$data);
				$this->load->view('director/footer',$data);
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	

	
public function addpost(){
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
	       if(isset($_FILES['document']['name']) && $_FILES['document']['name']!=''){
							$temp = explode(".", $_FILES["document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['document']['tmp_name'], "assets/employeedocument/" . $documents);
						}else{
							$documents='';
						}
			
			$save_data=array(
				'f_name'=>isset($post['f_name'])?$post['f_name']:'',
				'l_name'=>isset($post['l_name'])?$post['l_name']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'contact_address'=>isset($post['contact_address'])?$post['contact_address']:'',
			    'permanent_address'=>isset($post['permanent_address'])?$post['permanent_address']:'',
			    'designation'=>isset($post['designation'])?$post['designation']:'',
			    'role'=>isset($post['role'])?$post['role']:'',
			    'employee_id'=>isset($post['employee_id'])?$post['employee_id']:'',
			    'salary_details'=>isset($post['salary_details'])?$post['salary_details']:'',
			    'e_email_work'=>isset($post['e_email_work'])?$post['e_email_work']:'',
			    'e_org_password'=>isset($post['e_org_password'])?$post['e_org_password']:'',
			    'e_password'=>isset($post['e_password'])?$post['e_password']:'',
			    'document'=>isset($documents)?$documents:'',
			    'working_days'=>isset($post['working_days'])?$post['working_days']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['e_id'])?$userdetails['e_id']:''	
				);
				//echo'<pre>';print_r($save_data);exit;
			$save= $this->Employee_model->save_employee_basic_details($save_data);
					//echo'<pre>';print_r($save);exit;
				if(count($save)>0){
				$this->session->set_flashdata('success',"employee   details sucessfully added");
				redirect('employee/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('employee/add');
			}
	
	     }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
}		
	
public function edit()
	{
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
				$data['edit_employee']=$this->Employee_model->edit_employee_details(base64_decode($this->uri->segment(3)));	
						//	echo '<pre>';print_r($data);exit;	
                     $data['role_list']= $this->Employee_model->get_role_list();
				$this->load->view('director/header',$data);
				$this->load->view('director/sidebar',$data);
				$this->load->view('director/edit-employee',$data);
				$this->load->view('director/footer',$data);
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}

public function editpost(){
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$data['userdetails'] = $this->Employee_model->get_employee_details($userdetails['e_id']);
			
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$edit_employee=$this->Employee_model->edit_employee_details($post['e_id']);	
	       if(isset($_FILES['document']['name']) && $_FILES['document']['name']!=''){
							$temp = explode(".", $_FILES["document"]["name"]);
							$documents = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['document']['tmp_name'], "assets/employeedocument/" . $documents);
						}else{
							$documents=$edit_employee['document'];
						}
			
			$save_data=array(
				'f_name'=>isset($post['f_name'])?$post['f_name']:'',
				'l_name'=>isset($post['l_name'])?$post['l_name']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'contact_address'=>isset($post['contact_address'])?$post['contact_address']:'',
			    'permanent_address'=>isset($post['permanent_address'])?$post['permanent_address']:'',
			    'designation'=>isset($post['designation'])?$post['designation']:'',
			    'role'=>isset($post['role'])?$post['role']:'',
			    'employee_id'=>isset($post['employee_id'])?$post['employee_id']:'',
			    'salary_details'=>isset($post['salary_details'])?$post['salary_details']:'',
			    'e_email_work'=>isset($post['e_email_work'])?$post['e_email_work']:'',
			    'e_org_password'=>isset($post['e_org_password'])?$post['e_org_password']:'',
			    'e_password'=>isset($post['e_password'])?$post['e_password']:'',
			    'document'=>isset($documents)?$documents:'',
			    'working_days'=>isset($post['working_days'])?$post['working_days']:'',
				'status'=>1,
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>isset($userdetails['e_id'])?$userdetails['e_id']:''	
				);
				//echo'<pre>';print_r($save_data);exit;
			$update= $this->Employee_model->update_employee_basic_details($post['e_id'],$save_data);
					//echo'<pre>';print_r($update);exit;
				if(count($update)>0){
				$this->session->set_flashdata('success',"employee   details sucessfully updated");
				redirect('employee/lists');
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('employee/lists');
			}
	
	     }else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
}		
	
public function delete()
	{
		if($this->session->userdata('saket_details'))
		{
			$userdetails=$this->session->userdata('saket_details');	
			$e_id=base64_decode ($this->uri->segment(3));
						 $delete_details =$this->Employee_model->delete_employee_details_data($e_id);
						 //echo'<pre>';print_r($delete_details);exit;  	
						 if(count($delete_details)>0){
							$this->session->set_flashdata('success',"employee details successfully delete");		 
							redirect('employee/lists');			  					  
	                        }else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");

			            redirect('employee/lists');
				         } 		

				
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}




	
	
	
	
		
}
	
	

