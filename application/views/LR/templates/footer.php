			</div>
		</div>
	</div>
<!-- //body -->
</body>

<!-- footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<p>Taft cor. United Nations Avenue, Ermita
						Manila, Philippines
					<a href="mailto:araullo.highschool06@gmail.com">araullo.highschool06@gmail.com</a>
					<p>Phone : 524-65765</p>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="home">Home</a></li>
						<li><a href="jhs">Junior High School</a></li>
						<li><a href="shs">Senior High School</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="register">Register</a></li>
						<li><a href="login">Login</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<img src="<?php echo base_url();?>includes/lr/images/logo1.png" alt=" " class="img-responsve logo-img" />
				<p>&copy 2018 Araullo High School Learning Resource Portal</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- <script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/easing.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/slide.js"></script>
<script src="<?php echo base_url();?>includes/lr/js/jquery-1.11.1.min.js"></script>
<!--FlexSlider-->
<script defer src="<?php echo base_url();?>includes/dist/js/jquery.flexslider-min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url();?>includes/bootstrap/js/bootstrap.js"></script>
<!-- for-gallery-rotation -->
<script src="<?php echo base_url();?>includes/lr/js/modernizr.custom.97074.js"></script>
<!-- pop-up-script -->
<script src="<?php echo base_url();?>includes/lr/js/jquery.chocolat.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>includes/lr/js/jquery.hoverdir.js"></script>

<script>

	jQuery(document).ready(function($) {

		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();

		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});

		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});


		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});

		/*
		var defaults = {
			containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear'
		};
		*/
		//
		// $().UItoTop({
		// 	easingType: 'easeOutQuart'
		// });

	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});


	$(window).load(function(){
		$('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
			$('body').removeClass('loading');
		}
		});
	});

	$(function() {
		$('.gallery a').Chocolat();
	});

	$(function() {
		$(' #da-thumbs > li ').each( function() {
			$(this).hoverdir();
		} );
	});

</script>

<script type="application/x-javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar(){
		window.scrollTo(0,1);
	}
</script>

</html>
