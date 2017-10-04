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
    <div class = "one_half first">
      <div class="callout callout-info">
          <h4>Talk about ERS module</h4>
          <p>ERS stands for Elect-Ronic Shit</p>
      </div>
    </div>
    <div class = "one_half">
	     <p class="nospace btmspace-15">Please fill in your login details below.</p>
	     <p class = "fl_left"> * indicates required fields.</p>
        <div class="cd-form">
            <form action="" class="ers_form">
                <fieldset>

                    <div class="ers-width btmspace-10">
                        <label for="userName">Name*</label>
                        <input type="text" id="userName" name="userName" placeholder="e.g. (123-123-123)">
                    </div>

                    <div class="ers-width btmspace-15">
                        <label for="userPassword">Password*</label>
                        <input type="password" id="userPassword" name="userPassword" placeholder="xxxxxxxxxxxx">
                    </div>

                </fieldset>

                <fieldset>
                    <div>
                        <button type="submit" value="login">Sign In</button>
                    </div>
                </fieldset>

            </form>
        </div>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>

<?php include 'templates/footer.php';?>
