<?php include 'templates/header.php';?>

 <section id="content-wrap" class="blog-single">
   	<div class="row_news_page">
   		<div class="col-twelve">

   			<article class="format-standard">

   				<div class="content-media">
						<div class="post-thumb">
							<img src="<?php echo base_url();?>includes/website/images/thumbs/single-01.jpg">
						</div>
					</div>

					<div class="primary-content">

						<h6 class="more_news_heading">Hey, This Is A Standard Format Post.</h6>

						<ul class="entry-meta date">
							September 06, 2016
						</ul>

							<?php
									// Open the text file
									//replace with full path from db
									$f = fopen("includes/website/asd.txt", "r");

										while(!feof($f)) {

											echo fgets($f) . "<br />";

										}

									// Close the text file
									fclose($f);
							?>

						<p class="lead">Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint.</p>

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>


						<h2>Large Heading</h2>

						<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
						<blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>


					</div>
				</div>
			</div>
		</div>
	</div>
  </section>

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
							<p><a class="btn" href="#">Read More &raquo;</a></p>
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
							<p><a class="btn" href="#">Read More &raquo;</a></p>
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
							<p><a class="btn" href="#">Read More &raquo;</a></p>
						  </div>
						</article>
					  </li>
					</ul>
					<!-- ################################################################################################ -->
				  </section>
				</div>

<?php include 'templates/footer.php';?>
