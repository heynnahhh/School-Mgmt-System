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
      						<div class="row mt">
      							<div class="col-md-12">
      								<div class="white-panel pn">
      									<div class="panel-heading">
      									</div>
      									<div class="custom-check goleft mt">
      									  <table class="table table-hover">
                        <h3>Change Password</h3>
                        <hr>
                        <div class="row">
                          <div class="col-lg-12 main-chart">
                            <div class="row mt">
                              <div class="col-md-12">
                                  <div class="container">
                                     <div class="col-lg-12">
                                        <div class="row">

                                          <form action="<?php echo site_url();?>/LR/ajax/edit_password" method="POST" enctype="multipart/form-data">
                                            <?php
                                              if(!empty($success_msg)){
                                                echo '<p>'.$success_msg.'</p>';
                                              }elseif(!empty($error_msg)){
                                                echo '<p>'.$error_msg.'</p>';
                                              }
                                            ?>
                                            <div class="col-sm-7">
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Username</label>
                                                  <input type="text" placeholder="Username" class="form-control" readonly value="<?php echo $user['username'];?>">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Email Address</label>
                                                  <input type="text" placeholder="email@email.com" class="form-control" readonly value="<?php echo $user['email'];?>">
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>New Password</label>
                                                  <input type="hidden" class="form-control" name="lusa_id" value="<?php echo $user['lusa_id'];?>">
                                                  <input type="password" class="form-control" name = "change_password">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Repeat New Password</label>
                                                  <input type="password" class="form-control" name="change_re_password">
                                                </div>
                                              </div>
                                            <button type="password" class="btn btn-info">Change Password</button>
                                            </div>
                                          </form>

                                        </div>
                                       </div>
                                    </div><!-- /table-responsive -->
                                  </div><!--/ White-panel -->
                                </div><! --/col-md-12 -->
                              </div><! -- row -->
                            </table>
        									  <br/>
        									</div><!-- /table-responsive -->
        								</div><!--/ White-panel -->
        							</div><! --/col-md-12 -->
        						</div><! -- row -->
                  </div>

      <?php include '/../templates/latest_addition.php';?>

              </div><! --/row -->
          </section>
      </section>
      <!--main content end-->

      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
