<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Student Registration
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Student Register</a></li>
            <li class="active">New Registration</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Custom Tabs -->
                        <form id="example-basic">
                            <h3>Basic Details</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Address</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Parent & Guardian Details</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Guardian Details">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Documents Upload</label>
                                            <input type="file" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Student Course Details</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>MBBS Score</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Your Score">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>PSAAKET MCI OEE Score</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Your MCI Score">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Suggested Level</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Here..">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Batch</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Batch No">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Student Accommodation Details</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Required Accommodation</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Partnered PG</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                                <option value="">Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Floor No</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Floor No">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room No</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Room No">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Fee Details</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Opted Level</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Level">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course Fee</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Course Fee">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration Fee</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Registration Fee">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Accommodation Fee</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Accommodation Fee">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Batch Discount</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Discount">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GST</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter GST">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Total Amount</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Total Amount">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payable Amount</label>
                                            <input type="text" class="form-control" name="" placeholder="Enter Payable Amount">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payment Mode</label>
                                            <select class="form-control" name="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Pay through online</option>
                                                <option value="">Cash</option>
                                                <option value="">DD / Deposit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Verify & Confirm</h3>
                            <section class="register-list-table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Student Name</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Mobile Number</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Email ID</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Contact Address</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Permanent Address</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Guardian Details</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>MBBS Score</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>PSAAKET MCI Score</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Suggested Level</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Batch No</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Accommodation</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>PG</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Floor No</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Room No</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Opted Level</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Course Fee</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Registration Fee</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Accommodation Fee</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Discount</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>GST</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Amount</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Payable Amount</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Payment Mode</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total Amount</label>
                                            <input type="text" class="form-control" name="" value="3500" readonly>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        <!-- nav-tabs-custom -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script>
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
</script>