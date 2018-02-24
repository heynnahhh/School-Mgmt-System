
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>includes/lr/website/js/jquery.js"></script>
    <script src="<?php echo base_url();?>includes/lr/website/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();?>includes/lr/website/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>includes/lr/website/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>includes/lr/website/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>includes/lr/website/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>includes/lr/website/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>includes/lr/website/js/common-scripts.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>includes/lr/website/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>includes/lr/website/js/gritter-conf.js"></script>

	<script type="text/javascript">
      var homeUrl = '<?php echo $this->uri->segment(2);?>';
      $(document).ready(function () {
        if( homeUrl == 'home'){

          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to AHS Learning Resource Portal!',
              // (string | mandatory) the text inside the notification
              text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
              // (string | optional) the image to display on the left
              image: '<?php echo base_url();?>includes/lr/website/img/ui-sam.jpg',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: true,
              // (int | optional) the time you want it to be alive for before fading out
              time: '',
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
          });
          return false;
        }
      });
	</script>

	<script type="application/javascript">
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		}
    </script>


  </body>
</html>
