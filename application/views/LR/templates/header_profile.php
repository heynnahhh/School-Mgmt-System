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
    <link href="<?php echo base_url();?>includes/lr/profile/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>includes/lr/profile/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/profile/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/profile/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>includes/lr/profile/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>includes/lr/profile/css/style-responsive.css" rel="stylesheet">

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
            <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="<?php echo site_url();?>/lr/profile" class="logo"><b>Araullo High School Learning Resource Portal</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                  <li class="dropdown">
                      <a href="<?php echo site_url();?>/lr/profile">
                      <span>Home</span>
                      </a>
                  </li>
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span>Resources</span> <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <li>
                              <a href="<?php echo site_url();?>/lr/profile/juniorhs">Junior High School</a>
                          </li>
                          <li>
                              <a href="<?php echo site_url();?>/lr/profile/seniorhs">Senior High School</a>
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
                  <li><a class="logout" href="<?php echo site_url();?>/lr/home">Logout</a></li>
              	</ul>
              </div>
          </header>
      <!--header end-->
