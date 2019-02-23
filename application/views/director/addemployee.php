<header>
 <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/bootstrapValidator.min.css">
</header>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Employee
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Employee Details</a></li>
            <li class="active">Add Employee</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
           
        <div class="row">
			<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="<?php if(isset($tab) && $tab==''){ echo "active";} ?>"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Employee details</a></li>
              
            </ul>
            <div class="tab-content">
			 <form id="defaultForm" method="post" class="" action="<?php echo base_url('employee/empoyeepost');?>">
			
								
							
							<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="f_name" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="l_name" placeholder="Enter Last Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Address</label>
                                            <input type="text" class="form-control" name="contact_address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input type="text" class="form-control" name="permanent_address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                </div>
							
								
					 <div class="row">
					 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role</label>
									<div class="">
                                  <select id="role" name="role"  class="form-control" >
								<option value="">Select</option>
								<?php foreach ($role_list as $list){ ?>
								<option value="<?php echo $list['role_id']; ?>"><?php echo $list['role']; ?></option>
								<?php }?>
								</select> 
                                        </div>
										 </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employee id</label>
                                            <input type="text" class="form-control" name="employee_id" placeholder="Enter Employee id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employment Type</label>
                                            <select class="form-control" name="employe_type">
                                                <option value="" selected disabled>Select</option>
                                                <option value="Full-time" >Full-time</option>
                                                <option value="Part-time" >Part-time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary Details</label>
                                            <input type="text" class="form-control" name="salary_details" placeholder="Enter Salary Details">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Email Id</label>
                                            <input type="text" class="form-control" name="e_email_work" placeholder="Enter Work Email Id">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="e_password" placeholder="Enter Password">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="e_org_password" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>
									
									
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Documents</label>
                                            <input type="file" class="form-control" name="document">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Working Days / Timings</label>
                                            <input type="text" class="form-control" name="working_days" placeholder="Enter Total Working days/timings">
                                        </div>
                                    </div>
									
                                </div>
							
					 
								  <button type="submit"  class="btn btn-primary " id="validateBtn" name="validateBtn" value="check">Submit</button> 
								</form>
             
              <!-- /.tab-pane -->
              
              </div>
            
            
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      
		
        
    </section>

   </div>
   <script src="<?php echo base_url(); ?>assets/director/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrapValidator.min.js"></script>
<script type="text/javascript">
   
 $(document).ready(function() {
   
    $('#defaultForm').bootstrapValidator({
//      
        fields: {
			
			f_name:{
			   validators: {
					notEmpty: {
						message: 'Frist Name is required'
					}
				}
            },
			l_name:{
			   validators: {
					notEmpty: {
						message: 'Last  Name is required'
					}
				}
            },
			role:{
			   validators: {
					notEmpty: {
						message: 'Role is required'
					}
				}
            },
			employe_type:{
			   validators: {
					notEmpty: {
						message: 'Employee Type is required'
					}
				}
            },
			salary_details:{
			   validators: {
					notEmpty: {
						message: 'Salary Details is required'
					}
				}
            },
			working_days:{
			   validators: {
					notEmpty: {
						message: 'working Days is required'
					}
				}
            },
			employee_id:{
			   validators: {
					notEmpty: {
						message: 'Employee id is required'
					}
				}
            },
			designation:{
			   validators: {
					notEmpty: {
						message: 'Designation id is required'
					}
				}
            },
			
					
			email: {
                       validators: {
                            notEmpty: {
                                message: 'Email is required'
                            },
                            regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                            }
                        }
                    },
					e_password: {
                validators: {
					notEmpty: {
						message: ' Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            },
		   e_org_password:{
		            validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'e_password',
						message: 'password and Confirm Password do not match'
					}
					}
				},
					
					
			e_email_work: {
                       validators: {
                            notEmpty: {
                                message: 'Email is required'
                            },
                            regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                            }
                        }
                    },
			mobile:{
			  validators: {
					notEmpty: {
						message:'Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
				}
            },
			contact_address:{
			   validators: {
					notEmpty: {
						message: 'Address is required'
					},regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
				}
            },
			permanent_address:{
			   validators: {
					notEmpty: {
						message: 'Address is required'
					},regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
				}
            },
			document: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(docx|doc|pdf|xlsx|xls)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            }
			
        }
    });

});
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>



