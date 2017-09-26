<?php include 'templates/header.php';?>

<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url();?>includes/website/images/demo/backgrounds/ers.jpg');">
  <article class="hoc container clear">
    <!-- ################################################################################################ -->
   <h6 class="nospace"
  	style="
  	font-size:35px;
    position:absolute;
    height: 100px;"><div class = "ers">Enrollment and Registration System</div></h6>
    <!-- ################################################################################################ -->
  </article>
</div>

<div class="wrapper row4_ers">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
  	<div class="article_underline"><h6 class="news_heading"><i class="fa fa-user" style="font-size:30px;color:maroon;"></i> Login</h6></div>
    <div class = "one_half   first">
      <div class="callout callout-info">
          <h4>Talk about ERS module</h4>
          <p>ERS stands for Elect-Ronic Shit</p>
      </div>
    </div>
    <div class = "one_half">
	     <p class="nospace btmspace-15">Please fill in your login details below.</p>
	     <p class = "fl_left"> * indicates required fields.</p>
      <div class="form_ers">
        <form method="post" action="#">
          <fieldset>
            <div class = "two_third">
    		        <p style="margin-bottom:10px;">Username* </p><input class="btmspace-15" type="text" value="" placeholder="Enter Username">
    		        <p style="margin-bottom:10px;">Password* </p><input class="btmspace-15" type="text" value="" placeholder="Enter Password">
    			      <button type="submit" value="login">Sign In</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>

<?php include 'templates/footer.php';?>
