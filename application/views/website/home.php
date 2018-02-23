<?php include 'templates/header.php';?>

<div id="featured-post-slider" class="flexslider">
  <ul class="slides">
    <li>
			<div class="featured-post-slide">
				<div class="post-background" style="background-image:url('<?php echo base_url();?>includes/website/images/thumbs/featured/featured-1.jpg');"></div>
				<div class="overlay"></div>
				<div class="post-content">
					<ul class="entry-meta">
						<li>September 06, 2016</li>
						<li><a href="#" >Naruto Uzumaki</a></li>
					</ul>
					<h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never Goes Out of Style</a></h1>
				</div>
			</div>
    </li> <!-- /slide -->

		<li>
      <div class="featured-post-slide">
        <div class="post-background" style="background-image:url('<?php echo base_url();?>includes/website/images/thumbs/featured/featured-2.jpg');"></div>
				<div class="overlay"></div>
			 	<div class="post-content">
          <ul class="entry-meta">
            <li>August 29, 2016</li>
            <li><a href="#">Sasuke Uchiha</a></li>
          </ul>
          <h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
        </div>
      </div>
    </li> <!-- /slide -->

		<li>
      <div class="featured-post-slide">
        <div class="post-background" style="background-image:url('<?php echo base_url();?>includes/website/images/thumbs/featured/featured-3.jpg');"></div>
        <div class="overlay"></div>
        <div class="post-content">
          <ul class="entry-meta">
            <li>August 27, 2016</li>
            <li><a href="#" class="author">Naruto Uzumaki</a></li>
          </ul>

          <h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
        </div>
      </div>
    </li> <!-- end slide -->
  </ul> <!-- end slides -->
</div> <!-- end featured-post-slider -->

<div class="wrapper row3_news">
  <main class="hoc_all hoc container clear">
    <div class="group demo">
      <div class="group btmspace-50 demo">

        <div class="two_third first">
          <div class="headline_container">
            <div class="headline_underline"><h6 class="news_heading"><i class="fa fa-newspaper-o" style="font-size:30px;color:maroon;"></i> Headline</h6></div>
            <h6 style="margin-top:30px;"><i>NEWS TITLEEEEEEEEEEEEE</i>
              <div class="date fl_right">Wednesday, September 13,2017</div>
            </h6>
            <div class = "news_container">
              <?php
                // Open the text file
                //replace with full path from db
                $f = fopen("includes/website/asd.txt", "r");

                echo fgets($f) . "<br />";

                // Close the text file
                fclose($f);
              ?>
            </div>

            <div id="footer_button" style="margin-top:-40px;" class="fl_right"><a class="btn" href="<?php echo site_url();?>/website/home/news">See full details &raquo;</a></div>
          </div>
          <div class ="more_news">
            <div class="headline_underline"><h6 class="more_news_heading "><i class="fa fa-newspaper-o" style="font-size:30px;color:maroon;"></i> More News</h6></div>
            <div class="wrapper row3">
              <section class="hoc container_more_news clear">
                <!-- ################################################################################################ -->
                  <ul class="nospace group">
                    <li class="one_third first">
                      <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?php echo base_url();?>includes/website/images/demo/320x220.png" alt=""></a>
                        <div class="excerpttxt">
                          <ul>
                            <li><i class="fa fa-calendar-o"></i> 06/01/45</li>
                          </ul>
                          <h6 class="heading font-x1">News Title</h6>
                          <p><a class="btn" href="<?php echo site_url();?>/website/home/news">Read More &raquo;</a></p>
											  </div>
                      </article>
                    </li>
                    <li class="one_third">
                      <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?php echo base_url();?>includes/website/images/demo/320x220.png" alt=""></a>
                        <div class="excerpttxt">
                          <ul>
                            <li><i class="fa fa-calendar-o"></i> 05/01/45</li>
                          </ul>
                          <h6 class="heading font-x1">News Title</h6>
                          <p><a class="btn" href="<?php echo site_url();?>/website/home/news">Read More &raquo;</a></p>
											  </div>
                      </article>
                    </li>
                    <li class="one_third">
                      <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="<?php echo base_url();?>includes/website/images/demo/320x220.png" alt=""></a>
                        <div class="excerpttxt">
                          <ul>
                            <li><i class="fa fa-calendar-o"></i> 04/01/45</li>
                          </ul>
                          <h6 class="heading font-x1">News Title</h6>
                          <p><a class="btn" href="<?php echo site_url();?>/website/home/news">Read More &raquo;</a></p>
											  </div>
                      </article>
                    </li>
                  </ul>
                  <!-- ################################################################################################ -->
                </section>
              </div>
            </div>
          </div>

          <div class="one_third">
            <div class="right_sidebar">
              <h6 class="sidebar_title"><i class="fa fa-calendar-check-o"></i> Upcoming Events</h6>
              <div class = "sidebar_container">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
						<thead>
						  <tr>
							<th>DATE</th>
							<th>ACTIVITIES</th>
						  </tr>
						</thead>
						  <tr>
							<td>September 20</td>
							<td>sadasdas</td>
						  </tr>

						  <tr>
							<td>Anna</td>
							<td>Pitt</td>
						  </tr>

						  <tr>
							<td>Anna</td>
							<td>Pitt</td>
						  </tr>
                      <!-- ################################################################################################ -->
                    </tbody>
								  </table>
								 </div>
               </div>
               <p class="view-calendar">
                 <a href="<?php echo site_url();?>/website/home/Calendar" class="link-text">View Full Calendar &raquo;</a>
               </p>
             </div>

             <div class = "right_sidebar">
               <h6 class="sidebar_title"><i class="fa fa-external-link"></i> Links</h6>
               <div class="sidebar_container">
                 <div class="table-responsive">
                   <table class="table">
                     <tbody>

                       <tr>
                         <td><a href="<?php echo site_url();?>/website/home/admission" class="link-text">Admission Procedures</a></td>
                       </tr>

                       <tr>
                         <td><a href="<?php echo site_url();?>/website/home/login" class="link-text">Enrollment and Registration System (ERS)</a></td>
                       </tr>
                       
                       <tr>
                         <td><a href="<?php echo site_url();?>/website/home/application" class="link-text">Application for Senior High School</a></td>
                       </tr>

                       <tr>
                         <td><a href="<?php echo site_url();?>/website/home/courses" class="link-text">Course Offered for Senior High School</a></td>
                       </tr>

                       <!-- ################################################################################################ -->
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <div class="clear"></div>

     </div>
   </main>
</div>


<?php include 'templates/footer.php';?>
