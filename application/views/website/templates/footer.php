<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Taft Corner U.N. Avenue Ermita, Manila
          </address>
        </li>
        <li><i class="fa fa-phone"></i> 524-65765</li>
        <li><i class="fa fa-envelope-o"></i> araullo.highschool06@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://facebook.com/Araullo-High-School-277251475165/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Popular Links</h6>
      <ul class="nospace linklist">
      	<li><a href="#" class="link-footer" style="text-decoration: underline;"> Admission Procedure</a></li>
      	<li><a href="#" class="link-footer" style="text-decoration: underline;"> Academic Calendar</a></li>
      	<li><a href="#" class="link-footer" style="text-decoration: underline;"> Enrollment & Registration System</a></li>
      	<li><a href="#" class="link-footer" style="text-decoration: underline;"> Application for Junior High School</a></li>
      	<li><a href="#" class="link-footer" style="text-decoration: underline;"> Application for Senior High School</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">External Links</h6>
      <ul class="nospace linklist">
        <li><a href = "#">&#x25CF; +00 (123) 456 7890</a></li>
        <li><a href = "#">&#x25CF; +00 (123) 456 7890</a></li>
    		<li><a href = "#">&#x25CF; +00 (123) 456 7890</a></li>
    		<li><a href = "#">&#x25CF; +00 (123) 456 7890</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Araullo High School</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</body>

<script src="<?php echo base_url();?>includes/website/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>includes/website/js/jquery.backtotop.js"></script>
<script src="<?php echo base_url();?>includes/website/js/jquery.mobilemenu.js"></script>
<script src="<?php echo base_url();?>includes/website/js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();?>includes/website/js/dateTime.js"></script>
<script src="<?php echo base_url();?>includes/website/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>includes/website/js/org-chart.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>


<script>

var imgUrl = "<?php echo base_url('includes/website/images/thumbs/featured/');?>"

$(function() {
    $("#tree").orgChart({
      container: $("#main"),
      interactive: true,
      fade: false,
      speed: 'slow'
    });

    $( "#draggable" ).draggable();
});
</script>

