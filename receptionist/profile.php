<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            My Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Profile</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <strong class="box-title">Personal Info</strong>
                        <div class="pull-right">
                            <a href="edit-profile.php" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i> Edit Profile
                            </a>
                            <a href="change-password.php" class="btn btn-sm btn-warning">
                                <i class="fa fa-wrench"></i> Change Password
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img class="profile-user-img img-responsive img-circle" src="img/user2-160x160.jpg" alt="User profile picture">
                                <h3 class="profile-username">Receptionist</h3>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Email Id</td>
                                            <td>johnleo@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>qwerty@123</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>98xxxxxx56</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>