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
      					 <h3><i class="fa fa-angle-right"></i> Senior High School Resources</h3>
      						<hr></i>
      						<div class="row mt">
      							<div class="col-md-12">
      								<div class="white-panel pn">
      									<div class="panel-heading">
      										<div class="pull-left"><h3></i><h3> Grade 12 <i class="fa fa-angle-right"></i> Subjects</h3></div>
      										<br>
      									</div>
      									<div class="custom-check goleft mt">
                          <table id="todo" class="table table-hover custom-check">
                           <tbody>
                           <tr>
                             <td>
                                <a href="<?php echo site_url();?>/lr/profile/seniorhs/Grade%2012/core_subjects">Core Subjects</a>
                                 <div class="pull-right hidden-phone">
                                   <span class="badge bg-important">35</span>
                                 </div>
                             </td>
                           </tr>
                           <tr>
                             <td>
                                <a href="<?php echo site_url();?>/lr/profile/seniorhs/Grade%2012/applied_subjects">Applied Subjects</a>
                                 <div class="pull-right hidden-phone">
                                   <span class="badge bg-important">35</span>
                                 </div>
                             </td>
                           </tr>
                           <tr>
                             <td>
                                <a href="<?php echo site_url();?>/lr/profile/seniorhs/Grade%2012/specialized_subjects">Specialized Subjects by Strands</a>
                                 <div class="pull-right hidden-phone">
                                   <span class="badge bg-important">35</span>
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
