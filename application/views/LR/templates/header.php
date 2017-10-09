<!DOCTYPE HTML>
<html>

<head>
  <title>Araullo High School Learning Resource Portal</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/css/elusive-icons.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/lr/css/elusive-icons.min.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
         <a href="home"><img src = "<?php echo base_url();?>includes/lr/images/logo1.png" class="logo_image"><h1>Araullo High School<span class="logo_colour"> Learning Resource Portal</span></a></h1>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="home">Home</a></li>
            <li><a href="#">Junior High School</a>
              <ul>
                <li><a href="#">Drop Down One</a></li>
                <li><a href="#">Drop Down Three</a></li>
                <li><a href="#">Drop Down Four</a></li>
                <li><a href="#">Drop Down Five</a></li>
              </ul>
            </li>
            <li><a href="#">Senior High School</a>
              <ul>
                <li><a href="#">Drop Down One</a></li>
                <li><a href="#">Drop Down Two</a></li>
                <li><a href="#">Drop Down Three</a></li>
                <li><a href="#">Drop Down Four</a></li>
                <li><a href="#">Drop Down Five</a></li>
              </ul>
            </li>
            <li><a href="contact">Contact Us</a></li>
			<li>
				<form class="form-wrapper cf">
				<input type="text" placeholder="Search here..." required>
				<button type="submit">Search</button>
				</form>
			</li>
          </ul>
        </div>
      </nav> 
    </header>