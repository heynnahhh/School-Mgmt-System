			</div>
		</div>
	</div>
<!-- //body -->
</body>

<!-- footer -->
	<div class="footer">
		<div class="container">
			<h3>Sign up for our newsletter</h3>
			<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus
				tristique bibendum. Donec rutrum sed sem quis venenatis.</p>
			<div class="footer-contact">
				<form>
					<input type="text" placeholder="Enter your email to update" required=" ">
					<input type="submit" value="">
				</form>
			</div>
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<p>HALOVIETNAM LTD
						66, Dang Van ngu, Dong Da
						Hanoi, USA.
					<a href="mailto:info@example.com">contact@example.com</a>
					<p>Phone : +844 35149182</p>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="mail.html">Contact</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="events.html">News & Events</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="index.html">Home</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/10.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/12.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/11.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/10.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/8.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="<?php echo base_url();?>includes/lr/images/9.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<p>&copy 2016 Kids School. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
				<ul>
					<li><a href="#" class="twitter"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Twitter"></span></a></li>
					<li><a href="#" class="p"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Pinterest"></span></a></li>
					<li><a href="#" class="facebook" id="facebook"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Facebook"></span></a></li>
					<li><a href="#" class="dribble"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Dribbble"></span></a></li>
					<li><a href="#" class="rss"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On RSS"></span></a></li>
					<div class="clearfix"> </div>
				</ul>
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
