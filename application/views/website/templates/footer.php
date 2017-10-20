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
        <li><a class="faicon-google-plus" href="https://plus.google.com/u/1/111865928133362355721"><i class="fa fa-google"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Popular Links</h6>
        <p><a href="#" class="link-footer" style="text-decoration: underline;"> Admission Procedure</a></p>
        <p><a href="Calendar" class="link-footer" style="text-decoration: underline;"> Academic Calendar</a></p>
        <p><a href="login" class="link-footer" style="text-decoration: underline;"> Enrollment & Registration System</a></p>
        <p><a href="#" class="link-footer" style="text-decoration: underline;"> Application for Junior High School</a></p>
        <p><a href="Application" class="link-footer" style="text-decoration: underline;"> Application for Senior High School</a></p>
    </div>
    <div class="one_third">
      <h6 class="heading">External Links</h6>
        <p><a href="http://www.deped.gov.ph/" class="link-footer" style="text-decoration: underline;"> Department Of Education</a></p>
        <p><a href="https://lrmds.deped.gov.ph/" class="link-footer" style="text-decoration: underline;"> LRMDS</a></p>
        <p><a href="http://manila.gov.ph/" class="link-footer" style="text-decoration: underline;"> Manila City Hall</a></p>
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
<script src="<?php echo base_url();?>includes/website/js/common.js"></script>
<script src="<?php echo base_url();?>includes/website/js/draggable.js"></script>
<script src="<?php echo base_url();?>includes/website/js/bounded.js"></script>
<script src="<?php echo base_url();?>includes/website/js/org-chart.js"></script>
<script src="<?php echo base_url();?>includes/website/js/d3.v3.min.js"></script>


<script>
    $(function () {
	var imgUrl = "<?php echo base_url('includes/website/images/thumbs/featured/');?>";
    var appSubmit = "<?php echo base_url('index.php/website/Application/submit_form');?>";

        $('.cd-submit').prop('disabled', true);

        $( '#last_name' ).on('keyup', checkStatus);
        $( '#first_name' ).on('keyup', checkStatus);
        $( '#middle_name' ).on('keyup', checkStatus);
        $( '#sex' ).on('keyup', checkStatus);
        $( '#age' ).on('keyup', checkStatus);
        $( '#birth_date' ).on('keyup', checkStatus);
        $( '#birth_place' ).on('keyup', checkStatus);
        $( '#mother_tongue' ).on('keyup', checkStatus);
        $( '#religion' ).on('keyup', checkStatus);
        $( '#contact_number' ).on('keyup', checkStatus);
        $( '#email' ).on('keyup', checkStatus);
        $( '#mother_name' ).on('keyup', checkStatus);
        $( '#father_name' ).on('keyup', checkStatus);
        $( '#parent_contact' ).on('keyup', checkStatus);
        $( '#guardian_name' ).on('keyup', checkStatus);
        $( '#relationship' ).on('keyup', checkStatus);
        $( '#guardian_contact' ).on('keyup', checkStatus);

        function checkStatus() {
            var status = (

                $.trim($( '#last_name' ).val()) === '' ||
                $.trim($( '#first_name' ).val()) === '' ||
                $.trim($( '#middle_name' ).val()) === '' ||
                $.trim($( '#sex' ).val()) === '' ||
                $.trim($( '#age' ).val()) === '' ||
                $.trim($( '#birth_date' ).val()) === '' ||
                $.trim($( '#birth_place' ).val()) === '' ||
                $.trim($( '#mother_tongue' ).val()) === '' ||
                $.trim($( '#religion' ).val()) === '' ||
                $.trim($( '#mother_name' ).val()) === '' ||
                $.trim($( '#email' ).val()) === '' ||
                $.trim($( '#contact_number' ).val()) === '' ||
                $.trim($( '#father_name' ).val()) === '' ||
                $.trim($( '#parent_contact' ).val()) === '' ||
                $.trim($( '#guardian_name' ).val()) === '' ||
                $.trim($( '#relationship' ).val()) === '' ||
                $.trim($( '#guardian_contact' ).val()) === '');
            $('.cd-submit').prop('disabled', status);
        }

        $('#email').blur(function() {
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            if (testEmail.test(this.value))
            {
                $(".email_validation").remove();
            }

            else
            {
                $(".email_validation").text(" (Invalid Email Format)");
            }
        });



        $('.cd-submit').on('click', function () {

        var url = "<?php echo base_url('index.php/website/application#success');?>";

        window.location = url;

        var data = {
            lrn: $( "#lrn" ).val(),
            first_name: $( "#first_name" ).val(),
            last_name: $( "#last_name" ).val(),
            middle_name: $( "#middle_name" ).val(),
            sex: $( "#sex" ).val(),
            age: $( "#age" ).val(),
            birth_date: $( "#birth_date" ).val(),
            birth_place: $( "#birth_place" ).val(),
            mother_tongue: $( "#mother_tongue" ).val(),
            religion: $( "#religion" ).val(),
            contact_number: $( "#contact_number" ).val(),
            barangay: $( "#barangay" ).val(),
            street: $( "#street" ).val(),
            city: $( "#city" ).val(),
            province: $( "#province" ).val(),
            mother_name: $( "#mother_name" ).val(),
            father_name: $( "#father_name" ).val(),
            parent_contact: $( "#parent_contact" ).val(),
            guardian_name: $( "#guardian_name" ).val(),
            relationship: $( "#relationship" ).val(),
            guardian_contact: $( "#guardian_contact" ).val()
        };

        $.ajax({
                url: appSubmit,
                data: data,
                type: 'POST',
                success: function (result) {
                }
            })

        });

    });
</script>
