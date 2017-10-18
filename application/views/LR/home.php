<?php include 'templates/header.php';?>

    <div id="site_content">
	
         <?php include 'sidebar.php'; ?>
		   
	<div class="content">
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="<?php echo base_url();?>includes/lr/images/slides/1.jpg" style="width:100%;">
				<div class="carousel-caption">
					<h1 class="carousel-caption-header">Slide 1</h1>
					<p class="carousel-caption-text hidden-sm hidden-xs">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
					</p>
				</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="<?php echo base_url();?>includes/lr/images/slides/2.jpg" style="width:100%;">
			  <div class="carousel-caption">
					<h1 class="carousel-caption-header">Slide 2</h1>
					<p class="carousel-caption-text hidden-sm hidden-xs">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
					</p>
			  </div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="<?php echo base_url();?>includes/lr/images/slides/3.jpg" style="width:100%;">
				<div class="carousel-caption">
					<h1 class="carousel-caption-header">Slide 3</h1>
					<p class="carousel-caption-text hidden-sm hidden-xs">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
					</p>
				</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 
			</div>  
		</div>
		
		<div class="content">  
			<div class="container"><div class="title">Trivia</div></div>
				<div class="trivia_container">
					<h1>Did You Know!!!</h1>
					<p>That the first letter of English Alphabet is letter A</p>
			</div>
		</div>
		
		<div class="content">  
			<div class="container"><div class="title">On This Day</div></div>
				<div class="trivia_container">
					<h3>October 2017</h3>
					<p>DASD WWQE ASD ASD WQ D</p>
			</div>
		</div>
    </div>
	
	
	
	
<?php include 'templates/footer.php';?>
