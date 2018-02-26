
	<script>
      var current_method = '<?php echo $this->uri->segment(2);?>';
      $(document).ready(function () {
        if( current_method == 'home'){

          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to AHS Learning Resource Portal!',
              // (string | mandatory) the text inside the notification
              text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
              // (string | optional) the image to display on the left
              image: '<?php echo base_url();?>includes/lr/img/ui-sam.jpg',
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

			$(".submit").on('click', function (e) {
			  e.preventDefault();
			  var reg_info = {
			    last_name: $("input#last_name").val(),
			    first_name: $("input#first_name").val(),
			    middle_name: $("input#middle_name").val(),
			    address: $("textarea#address").val(),
			    birthdate: $("input#birthdate").val(),
					gender: $("select#gender").val(),
			    contact_no: $("input#contact_no").val(),
			    email: $("input#email").val(),
			    username: $("input#username").val(),
			    password: $("input#password").val(),
					area_of_expertise: $("select#area_of_expertise").val()

			  };

			  var params = {
			    type: "POST",
			    url: '<?=site_url()?>/LR/ajax/add',
			    success: function(data) {
			      alert("Successfully Registered! You may log in now");
			      // console.log(data);
			      location.reload();
			    }
			  };

			  if(current_method == 'register'){
			    params.data = {'reg_info': reg_info, 'add':'register'};
			  }

			  $.ajax(params);

			});



/***** UI *****/

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
