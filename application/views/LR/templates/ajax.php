
	<script>
      var current_method = '<?php echo $this->uri->segment(2);?>';
			var current_fn = '<?php echo $this->uri->segment(3);?>';
      $(document).ready(function () {

				$('#last_name').keyup(function(event){
					var input = $(this);
					var last_name = input.val();
					if(last_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");
					}
				});

				$('#first_name').keyup(function(event){
					var input = $(this);
					var first_name = input.val();
					if(first_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#middle_name').keyup(function(event){
					var input = $(this);
					var middle_name = input.val();
					if(middle_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#address').keyup(function(event){
					var input = $(this);
					var address = input.val();
					if(address){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#birthdate').on('input', function(){
					var input = $(this);
					var birthdate = input.val();
					if(birthdate){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#gender').on('input', function(){
					var input = $(this);
					var gender = input.val();
					if(gender){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#contact_no').keyup(function(event){
					var input = $(this);
					var contact_no = input.val();
					if(contact_no){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#email').on('input', function(){
					var input = $(this);
					var re = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
					var email = re.test(input.val());
					if(email){input.removeClass("invalid").addClass("valid");
						$('.valid-info').show();
						$('.invalid-info').hide();
					}else{input.removeClass("valid").addClass("invalid");
						$('.invalid-info').show();
						$('.valid-info').hide();
					}
				});

				$('#username').keyup(function(event){
					var input = $(this);
					var username = input.val();
					if(username){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#password').keyup(function(event){
					var input = $(this);
					var password = input.val();
					if(password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#re-password').keyup(function(event){
					var input = $(this);
					var re_password = input.val();
					if(re_password){
						input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#area_of_expertise').on('input', function(){
					var input = $(this);
					var area_of_expertise = input.val();
					if(area_of_expertise){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

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

				if( current_method == 'account'){

					var unique_id = $.gritter.add({
							// (string | mandatory) the heading of the notification
							title: 'Success!',
							// (string | mandatory) the text inside the notification
							text: 'You are now logged in',
							// (string | optional) the image to display on the left
							image: '<?php echo base_url();?>includes/lr/img/megaphone.png',
							// (bool | optional) if you want it to fade out on its own or just sit there
							sticky: false,
							// (int | optional) the time you want it to be alive for before fading out
							time: 3000,
							// (string | optional) the class name you want to apply to that specific message
							class_name: 'my-sticky-class'
					});
					return false;
				}

				if( current_method == 'login'){

					var unique_id = $.gritter.add({
							// (string | mandatory) the heading of the notification
							title: 'Login:',
							// (string | mandatory) the text inside the notification
							text: '<?php
								if(!empty($success_msg)){
									echo '<p>'.$success_msg.'</p>';
								}elseif(!empty($error_msg)){
									echo '<p>'.$error_msg.'</p>';
								}
							?>',
							// (string | optional) the image to display on the left
							image: '<?php echo base_url();?>includes/lr/img/megaphone.png',
							// (bool | optional) if you want it to fade out on its own or just sit there
							sticky: false,
							// (int | optional) the time you want it to be alive for before fading out
							time: 3000,
							// (string | optional) the class name you want to apply to that specific message
							class_name: 'my-sticky-class'
					});
					return false;
				}

				// $('.sel_topic').select2();

// ADD FORM ***********************

				$('#adeduc_type').on('change', function(){
					var educ_type = $('#adeduc_type').val();
					var params = {
						type: "POST",
						data: {'educ_type': educ_type},
						dataType:'json',
						cache: false
					};

					params.url = '<?=site_url()?>/LR/ajax/get_grade_lvl';
					params.success = function(data){
							if(data){
								$json = data;
								$('#adgrade_lvl').empty();
								$('#adlrn_subject').empty();
								$('#adgrade_lvl').append('<option>' + '</option>');
									$.each($json,function(i,data){
										$('#adgrade_lvl').append('<option value="'+data+'">'+data+'</option>');
									});
							}
							else if(data == null){
								$('#adgrade_lvl').empty();
								$('#adlrn_subject').empty();

							}
					};

					$.ajax(params);


					if(educ_type == ''){
						$('.adsubj_type').attr('style','display:none');
						$('#adsubj_type').val(null);
						$('.adstrand').hide();
						$('#adstrand').val(null);
					}

					if(educ_type == 'Senior High School'){
						$('.adsubj_type').removeAttr('style','display:none');
					}
					else if(educ_type == 'Junior High School'){
						$('.adsubj_type').attr('style','display:none');
						$('#adsubj_type').val(null);
						$('.adstrand').hide();
						$('#adstrand').val(null);

						params.url = '<?=site_url()?>/LR/ajax/get_jhs_subjects';
						params.success = function(data){
								if(data){
									$json = data;
									$('#adlrn_subject').empty();
									$('#adlrn_subject').append('<option>' + '</option>');

										$.each($json,function(i,data){
											$('#adlrn_subject').append('<option value="'+i+'">'+data+'</option>');
										});
								}
								else if(data == null){
									$('#adlrn_subject').empty();

								}
						};
						$.ajax(params);
					}
				});

				$('#adgrade_lvl').on('change', function(){
					$('#adlrn_subject').val(null);
					$('#adstrand').val(null);
					$('#adsubj_type').val(null);
					$('#adtopic').val(null);
				});

				$('#adsubj_type').on('change', function(){
					var subj_type =	$('#adsubj_type option:selected').text();

					$('#adlrn_subject').val(null);
					$('#adlrn_subject').empty();
					if(subj_type == 'Specialized Subject'){
						$('.adstrand').show();

					}
					else{
						$('.adstrand').hide();
						$('#adstrand').val(null);

						$.ajax({
							type: "POST",
							url: '<?=site_url()?>/LR/ajax/get_shs_subjects',
							data: {'grade_lvl': $('#adgrade_lvl option:selected').text(), 'subj_type': subj_type, 'get':'no strand'},
							dataType:"json",
							cache: false,
							success: function(data){
									if(data){
										$json = data;
										$('#adlrn_subject').empty();
										$('#adlrn_subject').append('<option>' + '</option>');

											$.each($json,function(i,data){
												$('#adlrn_subject').append('<option value="'+data+'">'+data+'</option>');
											});
									}
									else if(data == null){
										$('#adlrn_subject').empty();

									}
							}

						});
					}

					// $.ajax(ajaxParams);

				});

				$('#adstrand').on('change', function(){
					var subj_type =	$('#adsubj_type option:selected').text();

					$.ajax({
						type: "POST",
						url: '<?=site_url()?>/LR/ajax/get_shs_subjects',
						data: {'grade_lvl': $('#adgrade_lvl option:selected').text(), 'subj_type': subj_type, 'strand': $('#adstrand option:selected').text(), 'get':'strand'},
						dataType:"json",
						cache: false,
						success: function(data){
								if(data){
									$json = data;
									$('#adlrn_subject').empty();
									$('#adlrn_subject').append('<option>' + '</option>');

										$.each($json,function(i,data){
											$('#adlrn_subject').append('<option value="'+data+'">'+data+'</option>');
										});
								}
								else if(data == null){
									$('#adlrn_subject').empty();
								}
						}

					});

				});

				$('#adlrn_subject').on('change', function(){
						$.ajax({
						  type: "POST",
						  data: {'educ_type': $('#adeduc_type').val(), 'grade_lvl': $('#adgrade_lvl option:selected').text(), 'subject_type':  $('#adsubj_type').val(), 'strand':  $('#adstrand').val(), 'subject':  $('#adlrn_subject option:selected').text() },
						  url: '<?=site_url()?>/LR/ajax/get_topics',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										// $('.grade_lvl').removeAttr('disabled','disabled');
										$('#adtopic').empty();
										$('#adtopic').append('<option>' + '</option>');

						          $.each($json,function(i,data){
												$('#adtopic').append('<option value="'+data+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('#adtopic').empty();
						      }
						  }
						});
				});

// MODAL FORM ***********************

				$('#educ_type').on('change', function(){
					var educ_type = $('#educ_type').val();
					var params = {
						type: "POST",
						data: {'educ_type': educ_type},
						dataType:'json',
						cache: false
					};

					params.url = '<?=site_url()?>/LR/ajax/get_grade_lvl';
					params.success = function(data){
							if(data){
								$json = data;
								$('#grade_lvl').empty();
								$('#lrn_subject').empty();
								$('#grade_lvl').append('<option>' + '</option>');
									$.each($json,function(i,data){
										$('#grade_lvl').append('<option value="'+data+'">'+data+'</option>');
									});
							}
							else if(data == null){
								$('#grade_lvl').empty();
								$('#lrn_subject').empty();

							}
					};

					$.ajax(params);


					if(educ_type == ''){
						$('.subj_type').attr('style','display:none');
						$('#subj_type').val(null);
						$('.strand').hide();
						$('#strand').val(null);
					}

					if(educ_type == 'Senior High School'){
						$('.subj_type').removeAttr('style','display:none');
					}
					else if(educ_type == 'Junior High School'){
						$('.subj_type').attr('style','display:none');
						$('#subj_type').val(null);
						$('.strand').hide();
						$('#strand').val(null);

						params.url = '<?=site_url()?>/LR/ajax/get_jhs_subjects';
						params.success = function(data){
								if(data){
									$json = data;
									$('#lrn_subject').empty();
									$('#lrn_subject').append('<option>' + '</option>');

										$.each($json,function(i,data){
											$('#lrn_subject').append('<option value="'+i+'">'+data+'</option>');
										});
								}
								else if(data == null){
									$('#lrn_subject').empty();

								}
						};
						$.ajax(params);
					}
				});

				$('#grade_lvl').on('change', function(){
					$('#lrn_subject').val(null);
					$('#strand').val(null);
					$('#subj_type').val(null);
					$('#topic').val(null);
				});

				$('#subj_type').on('change', function(){
					var subj_type =	$('#subj_type option:selected').text();

					$('#lrn_subject').val(null);
					$('#lrn_subject').empty();
					if(subj_type == 'Specialized Subject'){
						$('.strand').show();

					}
					else{
						$('.strand').hide();
						$('#strand').val(null);

						$.ajax({
							type: "POST",
							url: '<?=site_url()?>/LR/ajax/get_shs_subjects',
							data: {'grade_lvl': $('#grade_lvl option:selected').text(), 'subj_type': subj_type, 'get':'no strand'},
							dataType:"json",
							cache: false,
							success: function(data){
									if(data){
										$json = data;
										$('#lrn_subject').empty();
										$('#lrn_subject').append('<option>' + '</option>');

											$.each($json,function(i,data){
												$('#lrn_subject').append('<option value="'+data+'">'+data+'</option>');
											});
									}
									else if(data == null){
										$('#lrn_subject').empty();
									}
							}
						});
					}
				});

				$('#strand').on('change', function(){
					var subj_type =	$('#subj_type option:selected').text();

					$.ajax({
						type: "POST",
						url: '<?=site_url()?>/LR/ajax/get_shs_subjects',
						data: {'grade_lvl': $('#grade_lvl option:selected').text(), 'subj_type': subj_type, 'strand': $('#strand option:selected').text(), 'get':'strand'},
						dataType:"json",
						cache: false,
						success: function(data){
								if(data){
									$json = data;
									$('#lrn_subject').empty();
									$('#lrn_subject').append('<option>' + '</option>');

										$.each($json,function(i,data){
											$('#lrn_subject').append('<option value="'+data+'">'+data+'</option>');
										});
								}
								else if(data == null){
									$('#lrn_subject').empty();

								}
						}

					});

				});

				$('#lrn_subject').on('change', function(){
						$.ajax({
						  type: "POST",
						  data: {'educ_type': $('#educ_type').val(), 'grade_lvl': $('#grade_lvl option:selected').text(), 'subject_type':  $('#subj_type').val(), 'strand':  $('#strand').val(), 'subject':  $('#lrn_subject option:selected').text() },
						  url: '<?=site_url()?>/LR/ajax/get_topics',
							dataType:'json',
						  success: function(data){
						      if(data){
						        $json = data;
										// $('.grade_lvl').removeAttr('disabled','disabled');
										$('#topic').empty();
										$('#topic').append('<option>' + '</option>');

						          $.each($json,function(i,data){
												$('#topic').append('<option value="'+data+'">'+data+'</option>');
						          });
						      }
						      else if(data == null){
										$('#topic').empty();
						      }
						  }
						});
				});



				$('#myModal').on('hidden.bs.modal', function () {
		      $(this).find('input,textarea,select').val(null);
		      $(this).find('.subj_type, .strand').hide();
		      $(this).find('select#grade_lvl,select#subj_type,select#strand,select#lrn_subject').empty();

		    });

      });

			$(".submit").on('click', function (e) {
			  e.preventDefault();
			  var regInfo = {
			    last_name: $("input#last_name").val(),
			    first_name: $("input#first_name").val(),
			    middle_name: $("input#middle_name").val(),
			    address: $("textarea#address").val(),
			    birthdate: $("input#birthdate").val(),
					gender: $("select#gender").val(),
			    contact_no: $("input#contact_no").val(),
			    email: $("input#email").val(),
			    username: $("input#username").val(),
			    re_password: $("input#re-password").val(),
					area_of_expertise: $("select#area_of_expertise").val()
			  };

				var topicInfo = {
					educ_type: $("select#educ_type").val(),
					grade_lvl: $('#grade_lvl option:selected').text(),
					subject_type: $("select#subj_type").val(),
					strand: $("select#strand").val(),
					subject: $('#lrn_subject option:selected').text(),
					topic_name: $("input#topic").val(),
				};

			  var params = {
			    type: "POST",
			    url: '<?=site_url()?>/LR/ajax/add'
			  };

			  if(current_method == 'register'){
			    params.data = {'reg_info': regInfo, 'add':'register'};
					params.success = function(data) {
			      //alert("Successfully Registered! You may log in now");
			      // console.log(data);
			      // location.reload();
						$('#registerForm')[0].reset();
						$(this).find('input,select').val('');

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
		              time: 2000,
		              // (string | optional) the class name you want to apply to that specific message
		              class_name: 'my-sticky-class'
		          });
		          return false;
			    };
			  }
				else if(current_fn == 'upload'){
					params.data = {'topic': topicInfo, 'add':'topic'};
					params.success = function(data) {

						$("#myModal").modal('hide');

						 var unique_id = $.gritter.add({
									// (string | mandatory) the heading of the notification
									title: 'Success!',
									// (string | mandatory) the text inside the notification
									text: 'New Topic is Successfully Saved!',
									// (string | optional) the image to display on the left
									image: '<?php echo base_url();?>includes/lr/img/notif.png',
									// (bool | optional) if you want it to fade out on its own or just sit there
									sticky: false,
									// (int | optional) the time you want it to be alive for before fading out
									time: 2000,
									// (string | optional) the class name you want to apply to that specific message
									class_name: 'my-sticky-class'
							});

						 $('#add_topic_form')[0].reset();
							return false;
					};
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
