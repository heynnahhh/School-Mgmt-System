<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="<?php echo base_url();?>includes/dist/img/login/LOGO.png" type="image/jpg" sizes="16x16">
  <title>School Management | Log in</title>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>includes/dist/css/style.css">

</head>
<body>
    <div class="container">
      <div class="container-left">
        <div class="header">
          <img src="<?php echo base_url();?>includes/dist/img/login/ght-logo.png" style="margin-left:-65px;">
          <h6 class="body-title">&middot; School Management System&middot;</h6>
        </div>
        <div class="info">
            <p><?php
              if(!empty($success_msg)){
                echo '<p class="statusMsg">'.$success_msg.'</p>';
              }elseif(!empty($error_msg)){
                echo '<p class="statusMsg">'.$error_msg.'</p>';
              }
            ?></p>
        </div>
        <div class="form">
          <form action="<?php echo site_url('SMS/home/login');?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <input id='username' autocomplete="off" class='email' onfocus="handle2()" class='inc2' type="email" name="email" placeholder='Email' data-error="That email address is invalid" required="" value="">
              <?php echo form_error('email','<span class="info">','</span>'); ?>
              <input id='password' class='pass' onfocus="handle1()" class='inc1' type="password" name="password" placeholder='Password' required="" value="">
              <?php echo form_error('password','<span class="info">','</span>'); ?>
              <input type="submit" class="button" name="loginSubmit" value="Sign in">
            <svg class="svg_form" width="340" height="520" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                 <rect id='rect' class='rect1'   x="10px"  y="310px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #000; stroke-width: 1px; fill: rgba(0,0,0,0);" />
            </svg>
          </form>
        </div>
      </div>
      <div class="container-right">
        <div class="container-body">
          <!-- <div class="body-head">
            <h3 class="body-title">Welcome to</h3>
            <img src="<?php echo base_url();?>includes/dist/img/login/ght-logo-white.png">
          </div> -->
        </div>
      </div>
    </div>

  </body>

<script src='<?php echo base_url();?>includes/dist/js/TweenMax.min.js'></script>
<script src='<?php echo base_url();?>includes/dist/js/Stats.min.js'></script>
<script  src="<?php echo base_url();?>includes/dist/js/index.js"></script>

</html>
