<?php include '/../templates/header.php';?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">
      					  <!-- banner -->
        					<div class="slideshow-container">
        						<div class="mySlides fade-slide">
        						  <div class="numbertext">1 / 3</div>
        						  <img src="<?php echo base_url();?>includes/lr/img/product.jpg" style="width:100%; height: 500px;">
        							<div class="text">
        								<h1 class="carousel-caption-header">Slide 1</h1>
        								<p class="carousel-caption-text hidden-sm hidden-xs">
        									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
        								</p>
        							</div>
        						</div>

        						<div class="mySlides fade-slide">
        						  <div class="numbertext">2 / 3</div>
        						  <img src="<?php echo base_url();?>includes/lr/img/product.jpg" style="width:100%; height: 500px;">
        						  <div class="text">
        								<h1 class="carousel-caption-header">Slide 2</h1>
        								<p class="carousel-caption-text hidden-sm hidden-xs">
        									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
        								</p>
        						  </div>
        						</div>

        						<div class="mySlides fade-slide">
        						  <div class="numbertext">3 / 3</div>
        						  <img src="<?php echo base_url();?>includes/lr/img/product.jpg" style="width:100%; height: 500px;">
        							<div class="text">
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
        						<div style="text-align:right">
        						  <span class="dot" onclick="currentSlide(1)"></span>
        						  <span class="dot" onclick="currentSlide(2)"></span>
        						  <span class="dot" onclick="currentSlide(3)"></span>
        						</div>
        					<div class="clearfix"> </div>
      				<!-- //banner -->
                </div><!-- /col-lg-9 END SECTION MIDDLE -->

      <?php include '/../templates/latest_addition.php';?>

              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
