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
                        <h3>Edit Profile</h3>
                        <hr>
                        <div class="row">
                          <div class="col-lg-12 main-chart">
                            <div class="row mt">
                              <div class="col-md-12">
                                  <div class="container">
                                     <div class="col-lg-12">
                                        <div class="row">

                                          <form>
                                            <div class="col-sm-7">
                                              <div class="row">
                                                <div class="col-sm-4 form-group">
                                                  <label>Surname</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                  <label>First Name</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                  <label>Middle Name</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Address</label>
                                                <textarea placeholder="" rows="3" class="form-control"></textarea>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Birthdate</label>
                                                  <input type="date" class="form-control">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Gender</label>
                                                  <select class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Phone Number</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Email Address</label>
                                                  <input type="text" class="form-control">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" placeholder="" class="form-control">
                                              </div>
                                              <div class="form-group">
                                                <label>Area of Expertise</label>
                                                <select class="form-control">
                                                    <option>Junior High School</option>
                                                    <option>Senior High School</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label>Profile Picture</label>
                                                <input type="file" class="form-control-file">
                                              </div>
                                              <br />
                                            <button type="button" class="btn btn-info">Save</button>
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
