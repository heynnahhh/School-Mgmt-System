
	<script>
      var current_method = '<?php echo $this->uri->segment(2);?>';
      $(document).ready(function () {
        if( current_method == 'home'){

          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to AHS Learning Resource Portal!',
              // (string | mandatory) the text inside the notification
              text: 'This portal is designed to provide you with access to quality learning and teaching resources such asLearning Material, Lesson Plan, Learning Guide,Learning Module and Full course that are aligned with K to 12 curriculum. These can be used as primary bases or as supplement to teaching and learning processes.',
              // (string | optional) the image to display on the left
              image: '<?php echo base_url();?>includes/lr/img/megaphone.png',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: false,
              // (int | optional) the time you want it to be alive for before fading out
              time: 5000,
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
          });
          return false;
        }

				// $('.sel_topic').select2();

				$('.adeduc_type').on('change', function(){
						$.ajax({
						  type: "POST",
						  data: {'educ_type':  $('.adeduc_type').val()},
						  url: '<?=site_url()?>/LR/ajax/get_grade_lvl',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										$('.adgrade_lvl').empty();
										$('.adlrn_subject').empty();
										$('.adgrade_lvl').append('<option>' + '</option>');
						          $.each($json,function(i,data){
												$('.adgrade_lvl').append('<option value="'+i+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('.adgrade_lvl').empty();
										$('.adlrn_subject').empty();

						      }
						  }
						});
				});

				$('.educ_type').on('change', function(){
						$.ajax({
							type: "POST",
							data: {'educ_type':  $('.educ_type').val()},
							url: '<?=site_url()?>/LR/ajax/get_grade_lvl',
							dataType:'json',
							success: function(data){
									if(data){
										$json = data;
										$('.grade_lvl').empty();
										$('.lrn_subject').empty();
										$('.grade_lvl').append('<option>' + '</option>');
											$.each($json,function(i,data){
												$('.grade_lvl').append('<option value="'+i+'">'+data+'</option>');
											});
									}
									else if(data == null){
										$('.grade_lvl').empty();
										$('.lrn_subject').empty();
									}
							}
						});
				});

				$('.adgrade_lvl').on('change', function(){

						$.ajax({
						  type: "POST",
						  data: {'educ_type':  $('.adeduc_type').val()},
						  url: '<?=site_url()?>/LR/ajax/get_subject',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										$('.adlrn_subject').empty();
										$('.adlrn_subject').append('<option>' + '</option>');

						          $.each($json,function(i,data){
												$('.adlrn_subject').append('<option value="'+i+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('.adlrn_subject').empty();

						      }
						  }
						});
				});

				$('.grade_lvl').on('change', function(){

						$.ajax({
						  type: "POST",
						  data: {'educ_type':  $('.educ_type').val()},
						  url: '<?=site_url()?>/LR/ajax/get_subject',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										$('.lrn_subject').empty();
										$('.lrn_subject').append('<option>' + '</option>');

						          $.each($json,function(i,data){
												$('.lrn_subject').append('<option value="'+data+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('.lrn_subject').empty();
						      }
						  }
						});
				});

				$('.adlrn_subject').on('change', function(){
						$.ajax({
						  type: "POST",
						  data: {'subject':  $('.adlrn_subject option:selected').text(), 'educ_type': $('.adeduc_type').val(), 'grade_lvl': $('.adgrade_lvl option:selected').text() },
						  url: '<?=site_url()?>/LR/ajax/get_topic',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										// $('.grade_lvl').removeAttr('disabled','disabled');
										$('.adtopic').empty();
										$('.adtopic').append('<option>' + '</option>');

						          $.each($json,function(i,data){
												$('.adtopic').append('<option value="'+i+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('.adtopic').empty();
						      }
						  }
						});
				});


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
			      //alert("Successfully Registered! You may log in now");
			      // console.log(data);
			      //location.reload();
			      $('#registerForm').trigger("reset");

			       var unique_id = $.gritter.add({
		              // (string | mandatory) the heading of the notification
		              title: 'You are now registerd!',
		              // (string | mandatory) the text inside the notification
		              text: 'You may login now to Araullo High School Learning Resource Portal',
		              // (string | optional) the image to display on the left
		              image: '<?php echo base_url();?>includes/lr/img/notif.png',
		              // (bool | optional) if you want it to fade out on its own or just sit there
		              sticky: false,
		              // (int | optional) the time you want it to be alive for before fading out
		              time: 5000,
		              // (string | optional) the class name you want to apply to that specific message
		              class_name: 'my-sticky-class'
		          });
		          return false;
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
