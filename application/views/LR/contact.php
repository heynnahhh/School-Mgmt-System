<?php include 'templates/header.php';?>

    <div id="site_content">
	
     <?php include 'sidebar.php'; ?>
	 
      <div class="content">
        <h1>Contact Us</h1>
        <p>Say hello, using this contact form.</p>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            <p style="padding-top: 10px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Send" /></p>
          </div>
        </form>
      </div>
    </div>
	
  <?php include 'templates/footer.php';?>