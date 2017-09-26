<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url();?>includes/dist/img/login/LOGO.png" type="image/jpg" sizes="16x16">
  <title>School Management | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>includes/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>includes/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>includes/dist/css/home.css">
  <link rel="stylesheet" href="<?php echo base_url();?>includes/bootstrap/style.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>includes/plugins/iCheck/square/red.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="container">
    <center>
    <img src="<?php echo base_url();?>includes/dist/img/login/LOGO.png" width="180px" height="200px" style="margin-top:10px; margin-bottom:-10px;">
    <h3><b>&middot; GHawTech &middot;</b><br>ARAULLO HIGH SCHOOL</h3>
    <div class="main-agileinfo">
      <div class="input-info">
        <h3><small>Log on to your account</small></h3>
    <?php
      if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
      }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
      }
    ?>
  </div>
      <div class="form-body form-body-info">
        <?php echo form_open_multipart('SMS/home/login');?>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
          </div>
          <div class="form-group">
            <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
          </div>
          <div class="checkbox icheck">
            <label style="padding-right:140px;">
              <input type="checkbox">&nbsp; Remember Me
            </label>
            <a href="#">Forgot password?</a>
          </div>
          <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="LOGIN"/>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div><center>
    <!-- <div class="logo-container">
      <img src="<?php echo base_url();?>includes/dist/img/login/LOGO.png" width="300px" height="350px">
    </div> -->
  </div>
<!-- <div class="login-box">
  <div class="login-logo">
    <a href="../../../index.php/INVENTORY/home"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <!-- <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../../index.php/INVENTORY/home" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <!-- <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col
      </div> -->
    <!-- </form> -->

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div> -->
  <!-- /.login-box-body -->
<!--s</div> -->
<!-- /.login-box  -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>includes/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>includes/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>includes/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-red',
      radioClass: 'iradio_square-red',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
