<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pracha MCI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/bootstrapValidator.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/director/css/AdminLTE.min.css">
     <link href="<?php echo base_url(); ?>assets/director/css/custom.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background:url('<?php echo base_url(); ?>assets/director/img/bg3.jpg');background-size:cover;height:100%; overflow:hidden;">
    <div class="login-box">
        <div class="login-logo">
            <b style="color: white;">Forgot Your Password?</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p>Don't worry. Resetting your password is easy, just tell us the email address you registered.</p>
            <br>
            <form name="forgotPasswordForm" id="forgotPasswordForm" action="<?php echo base_url('admin/forgotpost');?>" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="e_email_work" name="e_email_work" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/director/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrapValidator.min.js"></script>
     <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#forgotPasswordForm').bootstrapValidator({
                fields: {
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
                    }
                }
            });
        });
    </script>

</body>

</html>