<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Payroll / Payslip
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Payslip / Payroll</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <form id="uploadForm" name="uploadForm" action="" method="">
                        <div class="box-body">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Month</label>
                                    <select class="form-control" name="">
                                        <option value="" selected disabled>Select</option>  
                                        <option value="">January</option>  
                                        <option value="">February</option>  
                                        <option value="">March</option>  
                                        <option value="">April</option>  
                                        <option value="">May</option>  
                                        <option value="">June</option>  
                                        <option value="">July</option>  
                                        <option value="">August</option>  
                                        <option value="">September</option>  
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-download mr-5"></i>Download</button>
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
        $('#uploadForm').bootstrapValidator({

            fields: {

                document: {
                    validators: {
                        notEmpty: {
                            message: 'Document is required'
                        }
                    }
                },
                relatedto: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                }
            }
        })

    });
</script>