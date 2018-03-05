<?php include '/../templates/header_profile.php';?>

<?php include '/../templates/profile_nav.php';?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

	     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
        					 <h3><i class="fa fa-angle-right"></i> Junior High School Resources</h3>
        						<hr></i>
        						<div class="row mt">
        							<div class="col-md-12">
        								<div class="white-panel pn">
        									<div class="panel-heading">
        										<div class="pull-left"><h3></i> Junior High School Levels</h3></div>
        										<br>
        									</div>
        									<div class="custom-check goleft mt">
        										 <table id="todo" class="table table-hover custom-check">
        										  <tbody>
                                <?php foreach ($jhs as $junior) {?>
        											<tr>
        												<td>
                                    <?php echo '<a href="';?>
                                      <?php echo base_url('index.php/lr/profile/juniorhs/');?><?php echo $junior->grade_lvl;?>
                                    <?php echo '">';?>
                                      <?php echo $junior->grade_lvl;?>
                                    <?php echo '</a>';?>
                                    <?php echo '<div class="pull-right hidden-phone">';?>
                                      <?php echo '<span class="badge bg-important">35</span>';?>
                                    <?php echo '</div>';?>
                                <?php }?>
        													</div>
        												</td>
        											</tr>
        										  </tbody>
        									  </table>
        									</div><!-- /table-responsive -->
        								</div><!--/ White-panel -->
        							</div><! --/col-md-12 -->
        						</div><! -- row -->
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->

      <?php include '/../templates/latest_addition.php';?>

              </div><! --/row -->
          </section>
      </section>
      <!--main content end-->

      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
