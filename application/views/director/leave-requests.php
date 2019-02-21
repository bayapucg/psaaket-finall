<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Leave Requests
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Leave Management</a></li>
            <li class="active">Leave Requests</li>
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
                                        <th>SI.No</th>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Designation</th>
                                        <th>Leave Type</th>
                                        <th>Leave From</th>
                                        <th>Leave To</th>
                                        <th>Reason</th>
                                        <th>Created Date</th>
                                        <th>Add Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-xs mb-5"><i class="fa fa-check mr-5"></i>Accept</a>
                                            <a href="#" class="btn btn-danger btn-xs mb-5"><i class="fa fa-close mr-5"></i>Reject</a>
                                        </td>
                                    </tr>
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

<?php include('footer.php'); ?>