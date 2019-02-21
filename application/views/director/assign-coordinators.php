<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Assign Students to Co-ordinators
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Assign Coordinators</a></li>
            <li class="active">Assign Students to Co-ordinators</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <form id="assignForm" name="assignForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" class="form-control" name="sname" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Registration Id</label>
                                    <input type="text" class="form-control" name="rid" placeholder="Enter ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>MCIID</label>
                                    <input type="text" class="form-control" name="mciid" placeholder="Enter MCCID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Assign to</label>
                                    <select class="form-control" name="assignto" id="">
                                        <option value="" selected disabled>Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#assignForm').bootstrapValidator({

            fields: {

                sname: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                rid: {
                    validators: {
                        notEmpty: {
                            message: 'Registration ID is required'
                        }
                    }
                },
                mciid: {
                    validators: {
                        notEmpty: {
                            message: 'MCIID is required'
                        }
                    }
                },
                assignto: {
                    validators: {
                        notEmpty: {
                            message: 'Field is required'
                        }
                    }
                }
            }
        })

    });
</script>