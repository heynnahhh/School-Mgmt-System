<html lang="">

<head>
<title>Araullo High School</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo base_url();?>includes/website/css/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<body id="top">
<div class="wrapper row0" onLoad = "renderTime();">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
		<li><div id = "clockDisplay"></div></li>
        <li><i class="fa fa-phone"></i> 524-65765</li>
        <li><i class="fa fa-envelope-o"></i> araullo.highschool06@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
	    <li><a href="<?php echo site_url();?>/website/home">Home</a></li>
      <li><a href="<?php echo site_url();?>/website/home/login">ERS</a></li>
		  <li><a href="#">AHS-LRMDS</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
     <h1><a href="<?php echo site_url();?>/website/home"><img src = "<?php echo base_url();?>includes/website/images/demo/logo.png" style= "height:175px; width:170px;"><div id='title'>Araullo High School</div></a></h1>
    </div>
      <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="has-children">
          <a class="drop" href="#">About</a>
          <ul class="sub-menu">
            <li><a href="<?php echo site_url();?>/website/home/history">History</a></li>
			      <li><a href="<?php echo site_url();?>/website/home/ahs_hymn">Araullo High School Hymn</a></li>
            <li><a href="<?php echo site_url();?>/website/home/mvgo">Mission, Vision, Core Values & Mandate</a></li>
            <li><a href="<?php echo site_url();?>/website/home/org_chart">Organizational Chart</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Admission</a>
          <ul>
            <li><a href="<?php echo site_url();?>/website/home/admission">Admission Procedures</a></li>
            <li><a href="<?php echo site_url();?>/website/home/application">Online Application for SHS</a></li>
            <li><a href="<?php echo site_url();?>/website/home/courses">Courses Offered (SHS)</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Students</a>
              <ul>
                <li><a href="<?php echo site_url();?>/website/home/login">Enrollment and Registration System (ERS)</a></li>
                <li><a href="<?php echo site_url();?>/website/home/calendar">Academic Calendar</a></li>
                <li><a href="<?php echo site_url();?>/website/home/procedures">Enrollment Procedures</a></li>
              </ul>
        </li>
        <li><a href="../lr/home">AHS-LR Portal</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
