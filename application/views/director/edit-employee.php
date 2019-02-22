<header>

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
              <li class="<?php if(isset($tab) && $tab==''){ echo "active";} ?>"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Edit Employee details</a></li>
              
            </ul>
            <div class="tab-content">
			 <form id="defaultForm" method="post" class="" action="<?php echo base_url('employee/editpost');?>">
			<input type="hidden" id="e_id" name="e_id" value="<?php echo isset($edit_employee['e_id'])?$edit_employee['e_id']:'' ?>">

								
							
							<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="f_name" value="<?php echo isset($edit_employee['f_name'])?$edit_employee['f_name']:'' ?>"  placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="l_name" value="<?php echo isset($edit_employee['l_name'])?$edit_employee['l_name']:'' ?>" placeholder="Enter Last Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" name="mobile" value="<?php echo isset($edit_employee['mobile'])?$edit_employee['mobile']:'' ?>" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="email" value="<?php echo isset($edit_employee['email'])?$edit_employee['email']:'' ?>" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Address</label>
                                            <input type="text" class="form-control" name="contact_address" value="<?php echo isset($edit_employee['contact_address'])?$edit_employee['contact_address']:'' ?>" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input type="text" class="form-control" name="permanent_address" value="<?php echo isset($edit_employee['permanent_address'])?$edit_employee['permanent_address']:'' ?>" placeholder="Enter Address">
                                        </div>
                                    </div>
                                </div>
							
								
					 <div class="row">
					 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input type="text" class="form-control" name="role_name" value="<?php echo isset($edit_employee['role_name'])?$edit_employee['role_name']:'' ?>" placeholder="Enter Designation">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employee id</label>
                                            <input type="text" class="form-control" name="employee_id"  value="<?php echo isset($edit_employee['employee_id'])?$edit_employee['employee_id']:'' ?>" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="designation" value="<?php echo isset($edit_employee['designation'])?$edit_employee['designation']:'' ?>" placeholder="Enter Designation">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employment Type</label>
                                            <select class="form-control" name="employe_type" >
                                                <option value="" selected disabled>Select</option>
                                                <option value="Full-time"<?php if($edit_employee['employe_type']=='Full-time'){ echo "selected"; } ?>>Full-time</option>
                                                <option value="Part-time"<?php if($edit_employee['employe_type']=='Part-time'){ echo "selected"; } ?>>Part-time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary Details</label>
                                            <input type="text" class="form-control" name="salary_details" placeholder="Enter Salary Details" value="<?php echo isset($edit_employee['salary_details'])?$edit_employee['salary_details']:'' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Email Id</label>
                                            <input type="text" class="form-control" name="e_email_work" placeholder="Enter Work Email Id" value="<?php echo isset($edit_employee['e_email_work'])?$edit_employee['e_email_work']:'' ?>">
                                        </div>
                                    </div>
									
									
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Documents</label>
                                            <input type="file" class="form-control" name="document" value="<?php echo isset($edit_employee['document'])?$edit_employee['document']:'' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Working Days / Timings</label>
                                            <input type="text" class="form-control" name="working_days" placeholder="Enter Total Working days/timings" value="<?php echo isset($edit_employee['working_days'])?$edit_employee['working_days']:'' ?>">
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



