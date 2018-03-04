<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>AHS Learning Resource Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>includes/lr/website/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>includes/lr/website/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/website/js/gritter/css/jquery.gritter.css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>includes/plugins/select2/select2.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>includes/lr/website/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>includes/lr/website/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
          <header class="header black-bg">
            <!--logo start-->
            <a href="<?php echo site_url();?>/lr/home" class="logo"><b>Araullo High School Learning Resource Portal</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a href="<?php echo site_url();?>/lr/home">
    							<span>Home</span>
          						</a>
          					</li>
          					<li id="header_inbox_bar" class="dropdown">
          						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
          							<span>Resources</span> <span class="caret"></span>
          						</a>
          						<ul class="dropdown-menu extended inbox">
          							<li>
          								<a href="<?php echo site_url();?>/lr/juniorhs">Junior High School</a>
          							</li>
          							<li>
          								<a href="<?php echo site_url();?>/lr/seniorhs">Senior High School</a>
          							</li>
          						</ul>
          					</li>
          					<li>
          						<div class="input-group col-xs-12 search">
          							<div class="input-group">
          								<div class="input-group-btn">
          								  <button type="button" class="btn btn-theme dropdown-toggle btn-secondary" data-toggle="dropdown">
          									Search by <span class="caret"></span>
          								  </button>
          								  <ul class="dropdown-menu" role="menu">
          									<li><a href="#">Action</a></li>
          									<li><a href="#">Another action</a></li>
          									<li><a href="#">Something else here</a></li>
          									<li><a href="#">Separated link</a></li>
          									</ul>
          								  </div>
          								  <input type="search" class="form-control">
          								</div>
          							</div>
          						</li>
                    </ul>
                          <!--  notification end -->
                  </div>
                  <div class="top-menu">
                  	<ul class="nav pull-right top-menu">
                      <li><a class="logout" href="<?php echo site_url();?>/lr/register">Register</a></li>
                      <li><a class="logout" href="" data-toggle="modal" data-target="#myModal">Login</a></li>
                  	</ul>
                  </div>
                </header>
                <!--header end-->

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          				  <div class="modal-dialog">
          				    <div class="modal-content">
          				      <div class="modal-header">
          				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          				        <h4 class="modal-title" id="myModalLabel">Login</h4>
          				      </div>
          				      <div class="modal-body">
                        <div id="login-page">
          						  <form class="form-login" action="<?php echo site_url('lr/login');?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                          <img src = "<?php echo base_url();?>includes/lr/img/logo.png">
                          <h2 class = 'form-login-heading'>AHS - Learning Resource Portal</h2>
            							<div class="login-wrap">
            								<input type="text" class="form-control" name="username" placeholder="Username" autofocus required>
            								<br>
            								<input type="password" class="form-control" name="password" placeholder="Password" required>
            								<label class="checkbox">
            									<span class="pull-right">
            										<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            									</span>
            								</label>
            								<input type="submit" class="btn btn-theme btn-block" name="loginSubmit" value="Sign in" type="submit">
            								<hr>
            								<div class="registration">
            									Don't have an account yet?<br/>
            									<a class="" href="<?php echo site_url();?>/lr/register">
            										Create an account
            									</a>
            								</div>
            							</div>
          						  </form>
          						</div>
      				      </div>
      				    </div>
      				  </div>
      				</div>
