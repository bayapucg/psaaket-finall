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

<body class="hold-transition login-page" style="background:url('<?php echo base_url(); ?>assets/director/img/bg2.jpg');background-repeat: no-repeat; background-size: cover; height:100%; overflow:hidden;">
    <div class="login-box">
        <div class="login-logo">
            <b style="color: white;">Login</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form name="loginForm" id="loginForm" action="<?php echo base_url('admin/loginpost'); ?>" method="post">
                <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
				<div class="form-group has-feedback">
                    <input type="email" class="form-control" id="e_email_work" name="e_email_work"  value="<?php echo $this->input->cookie('e_email_work');?>" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="e_password" name="e_password" value="<?php echo $this->input->cookie('e_password');?>" placeholder="Password">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row pull-right">
                    <div class="col-md-12">
                        <a href="<?php echo base_url('admin/forgot');?>">I forgot my password</a>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <br>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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

            $('#loginForm').bootstrapValidator({
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
                    },
                    e_password: {
                       validators: {
                            notEmpty: {
                                message: 'Password is required'
                            },
                            regexp: {
                            regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message:'Password wont allow <> [] = % '
                            }
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>