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
        <li><i class="fa fa-phone"></i> +63 915 933 5058</li>
        <li><i class="fa fa-envelope-o"></i> araullo@araullo@email.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
	    <li><a href="home">Home</a></li>
      <li><a href="ers">ERS</a></li>
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
     <h1><a href="home"><img src = "<?php echo base_url();?>includes/website/images/demo/logo.png" style= "height:175px; width:170px;"><div id='title'>Araullo High School</div></a></h1>
    </div>
      <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="has-children">
          <a class="drop" href="#">About</a>
          <ul class="sub-menu">
            <li><a href="history">History</a></li>
			      <li><a href="ahs_hymn">Araullo High School Hymn</a></li>
            <li><a href="mvgo">Mission, Vision, Core Values & Mandate</a></li>
            <li><a href="org_chart">Organizational Chart</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Admission</a>
          <ul>
            <li><a href="#">Admission Procedures</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Courses Offered (SHS)</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Students</a>
              <ul>
                <li><a href="ers">ERS</a></li>
                <li><a href="<?php echo site_url();?>/website/Calendar">Academic Calendar</a></li>
                <li><a href="#">Enrollment Procedures</a></li>
              </ul>
        </li>
        <li><a href="#">AHS-LRMDS</a></li>
        <li><a href="contacts">Contact Us</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
