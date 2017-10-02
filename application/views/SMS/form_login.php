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
      <div class="header">Sign In</div>
      <div class="info">
        <h3><small>Log on to your account</small></h3>
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
            <input id='username' autocomplete="off" class='email' onfocus="handle2()" class='inc2' type="email" name="email" placeholder='Username' data-error="That email address is invalid" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
            <input id='password' class='pass' onfocus="handle1()" class='inc1' type="password" name="password" placeholder='Password' required="" value="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
            <input type="submit" class="button" name="loginSubmit" value="Sign in">
          <svg class="svg_form" width="390" height="549" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <rect id='rect' class='rect1'   x="45px"  y="300px"   rx="27" ry="27" width="300px" height="50px" style="stroke: #fff; stroke-width: 1px; fill: rgba(0,0,0,0);" />
         </svg>
       </form>
     </div>
    </div>
    <svg class="svg_bg" id="demo" viewBox="0 0 1600 600" preserveAspectRatio="xMidYMid slice">
      <defs>
        <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="0" color-interpolation="sRGB">
          <stop id="stop1a" offset="0%" stop-color="#3F51B5"></stop>
          <stop id="stop1b" offset="100%" stop-color="#E91E63"></stop>
        </linearGradient>
        <linearGradient id="grad2" x1="0" y1="0" x2="1" y2="0" color-interpolation="sRGB">
          <stop id="stop2a" offset="0%" stop-color="#b71c1c"></stop>
          <stop id="stop2b" offset="100%" stop-color="#00a78f"></stop>
        </linearGradient>
      </defs>
      <rect id="rect1" x="0" y="0" width="1600" height="600" stroke="none" fill="url(#grad1)"></rect>
      <rect id="rect2" x="0" y="0" width="1600" height="600" stroke="none" fill="url(#grad2)"></rect>

    </svg>
  </body>

<script src='<?php echo base_url();?>includes/dist/js/TweenMax.min.js'></script>
<script src='<?php echo base_url();?>includes/dist/js/Stats.min.js'></script>
<script  src="<?php echo base_url();?>includes/dist/js/index.js"></script>

</html>
