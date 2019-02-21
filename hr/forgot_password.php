<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pracha MCI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrapValidator.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background:url('img/bg3.jpg');background-size:cover;height:100%; overflow:hidden;">
    <div class="login-box">
        <div class="login-logo">
            <b style="color: white;">Forgot Your Password?</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p>Don't worry. Resetting your password is easy, just tell us the email address you registered.</p>
            <br>
            <form name="forgotPasswordForm" id="forgotPasswordForm" action="index.php" method="">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {

            $('#forgotPasswordForm').bootstrapValidator({
                fields: {
                    email_id: {
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