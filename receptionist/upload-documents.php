<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Upload Documents
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Documents & Policies</a></li>
            <li class="active">Upload Documents</li>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Document</label>
                                    <input type="file" class="form-control" name="document" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Related to</label>
                                    <input type="text" class="form-control" name="relatedto" placeholder="Document Related Name">
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