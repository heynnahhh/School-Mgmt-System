<div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="<?php echo base_url();?>includes/lr/images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><a href="home">Home</a> | <a href="examples.html">Junior High School</a> | <a href="examples.html">Senior High School</a> | <a href="contact">Contact Us</a></p> 
      <p>Copyright &copy; Araullo High School Learning Resource Portal| <a href="../website/home">Araullo High School Website</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/index.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>