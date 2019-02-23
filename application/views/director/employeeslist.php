

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employees List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Employee Details</a></li>
            <li class="active">Employees List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Role</th>
                                        <th>Employee ID</th>
                                        <th>Work Email Id</th>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Mobile Number</th>
                                        <th>Designation</th>
                                        <th>Employment Type</th>
                                        <th>Salary</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($employee_list as $list){?>
                                    <tr>
                                       
                                        <td><?php echo isset($list['role'])?$list['role']:''?></td>
                                        <td><?php echo isset($list['employee_id'])?$list['employee_id']:''?></td>
                                        <td><?php echo isset($list['email'])?$list['email']:''?></td>
                                        <td><?php echo isset($list['f_name'])?$list['f_name']:''?></td>
                                        <td><?php echo isset($list['e_email_work'])?$list['e_email_work']:''?></td>
                                        <td><?php echo isset($list['mobile'])?$list['mobile']:''?></td>
                                        <td><?php echo isset($list['designation'])?$list['designation']:''?></td>
                                        <td><?php echo isset($list['employe_type'])?$list['employe_type']:''?></td>
                                        <td><?php echo isset($list['salary_details'])?$list['salary_details']:''?></td>
                                        <td><?php echo isset($list['permanent_address'])?$list['permanent_address']:''?></td>
                                        <td>
                                            <a href="<?php echo base_url('employee/editemployee/'.base64_encode($list['e_id'])); ?>" class="btn btn-primary btn-xs mb-5"><i class="fa fa-edit mr-5"></i>Edit</a>
                                            <a href="<?php echo base_url('employee/employeedelete/'.base64_encode($list['e_id'])); ?>" class="btn btn-danger btn-xs mb-5"><i class="fa fa-trash mr-5"></i>Delete</a>
                                        </td>
                                    </tr>
								<?php }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

