
<script>
	jQuery(function($) {
	    var gradeLevel = {
	        'Junior High School': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'Senior High School': ['Grade 11', 'Grade 12'],
	    }

	    var $gradeLevel = $('#grade_lvl');
	    $('#educ_type').change(function () {
	        var educType = $(this).val(), grdLvls = gradeLevel[educType] || [];

	        var html = $.map(grdLvls, function(grdLvl){
	            return '<option value="' + grdLvl + '">' + grdLvl + '</option>'
	        }).join('');
	        $gradeLevel.html(html)
	    });

	    var topic = {
	        'Araling Panlipunan': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'Edukasyon sa Pagpapakatao': ['Grade 7', 'Grade 8', 'Grade 9', 'dsadasdas'],
	        'Edukasyong Pantahanan at Pangkabuhayan': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'English': ['Grade 11', 'Grade 12'],
	        'Filipino': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'Mathematics': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'Science': ['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10'],
	        'Technology and Livelihood Education': ['Grade 7', 'asdasdas']
	    }

	    var $topic = $('#topic');
	    $('#lrn_subject').change(function () {
	        var lrnSubject = $(this).val(), topics = topic[lrnSubject] || [];

	        var html = $.map(topics, function(tpc){
	            return '<option value="' + tpc + '">' + tpc + '</option>'
	        }).join('');
	        $topic.html(html)
	    });
	});

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

	var homeUrl = '<?php echo $this->uri->segment(2);?>';
	$(document).ready(function () {
	if( homeUrl == 'home'){

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

</script>