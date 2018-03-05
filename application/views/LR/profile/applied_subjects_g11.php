<?php include '/../templates/header_profile.php';?>

<?php include '/../templates/profile_nav.php';?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
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
                            <div class="pull-left"><h3></i><h3> Grade 11 <i class="fa fa-angle-right"></i> Applied Subjects</h3></div>
                            <br>
                          </div>
                          <?php foreach ($shs_as_subj_g11 as $shs_as_g11) {?>
                            <?php echo '<div class="custom-check goleft mt">';?>
                            <?php echo '<div class="tab-accordion">';?>
                            <?php echo '<input class="tab" id="tab-one" type="radio" name="tabs2">';?>
                            <?php echo '<label class = "label-accordion" for="tab-one">';?>
                              <?php echo $shs_as_g11->subject;?>
                            <?php echo '<div class="pull-right hidden-phone">';?>
                            <?php echo '<span class="badge bg-important">35</span>';?>
                            <?php echo '</div>';?>
                            <?php echo '</label>';?>
                            <?php echo '<div class="tab-content-accordion">';?>
                            <?php echo '<div class="col-lg-4 col-md-2 col-sm-4">';?>
                            <?php echo '<div class="subject-panel pn">';?>
                            <?php echo '<div class="pull-right hidden-phone subject-badge">';?>
                            <?php echo '<span class="badge bg-important">35</span>';?>
                            <?php echo '</div>';?>
                            <?php echo '<p>Dashgum is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>';?>
                            <?php echo '</div>';?>
                            <?php echo '</div>';?>
                            <?php echo '</div>';?>
                            <?php echo '</div>';?>
                            <?php echo '</div>';?>

                          <?php }?>

                          </div><!-- /table-responsive -->
                        </div><!--/ White-panel -->
                      </div><! --/col-md-12 -->
                    </div><! -- row -->

       <?php include '/../templates/latest_addition.php';?>

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


              </div><! --/row -->
          </section>
      </section>
      <!--main content end-->

      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
