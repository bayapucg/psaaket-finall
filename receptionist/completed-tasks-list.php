<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Completed Tasks List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Worksheet</a></li>
            <li class="active">Completed Tasks List</li>
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
                                        <th>Work Subject</th>
                                        <th>Work Description</th>
                                        <th>Deadline</th>
                                        <th>Completed on</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td><label class="badge badge-success">Completed</label></td>
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