<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Employees List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Employee List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SI.No</th>
                                    <th>Employee MCIID</th>
                                    <th>Designation</th>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Date Of joining</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MCI1230</td>
                                    <td>Developer</td>
                                    <td>John Deo</td>
                                    <td>8500xxxxx2</td>
                                    <td>2012/08/03</td>
                                    <td>
                                        <a href="view-employee-info.php" class="btn btn-info btn-xs"><i class="fa fa-eye mr-5"></i>view</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MCI1830</td>
                                    <td>Developer</td>
                                    <td>John Boscho</td>
                                    <td>8500xxxxx2</td>
                                    <td>2012/08/03</td>
                                    <td>
                                        <a href="view-employee-info.php" class="btn btn-info btn-xs"><i class="fa fa-eye mr-5"></i>view</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MCI1830</td>
                                    <td>Developer</td>
                                    <td>John Boscho</td>
                                    <td>8500xxxxx2</td>
                                    <td>2012/08/03</td>
                                    <td>
                                        <a href="view-employee-info.php" class="btn btn-info btn-xs"><i class="fa fa-eye mr-5"></i>view</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MCI1830</td>
                                    <td>Developer</td>
                                    <td>John Boscho</td>
                                    <td>8500xxxxx2</td>
                                    <td>2012/08/03</td>
                                    <td>
                                        <a href="view-employee-info.php" class="btn btn-info btn-xs"><i class="fa fa-eye mr-5"></i>view</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MCI1830</td>
                                    <td>Developer</td>
                                    <td>John Boscho</td>
                                    <td>8500xxxxx2</td>
                                    <td>2012/08/03</td>
                                    <td>
                                        <a href="view-employee-info.php" class="btn btn-info btn-xs"><i class="fa fa-eye mr-5"></i>view</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-5"></i>Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>