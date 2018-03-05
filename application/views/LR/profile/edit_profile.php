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

                                          <form action="<?php echo site_url();?>/LR/ajax/edit_users_profile" method="POST" enctype="multipart/form-data" id="editForm">
                                            <div class="col-sm-7">
                                              <div class="row">
                                                <div class="col-sm-4 form-group">
                                                  <label>Surname</label>
                                                  <input type="text" class="form-control" value="<?php echo $user_info[0]->last_name?>" name="last_name" id='last_name'>
                                                  <input type="hidden" readonly class="form-control" value="<?php echo $user_info[0]->lus_id?>" name="lus_id">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                  <label>First Name</label>
                                                  <input type="text" class="form-control" value="<?php echo $user_info[0]->first_name?>" name="first_name" id="first_name">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                  <label>Middle Name</label>
                                                  <input type="text" class="form-control" value="<?php echo $user_info[0]->last_name?>" name="middle_name" id="middle_name">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Address</label>
                                                <textarea placeholder="" rows="3" class="form-control" id="address" name="address"><?php echo $user_info[0]->address?></textarea>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Birthdate</label>
                                                  <input type="date" class="form-control" value="<?php echo $user_info[0]->birthdate?>" name="birthdate" id="birthdate">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Gender</label>
                                                  <select class="form-control" name="gender" id="gender">
                                                    <?php if($user_info[0]->gender == 'Male') { ?>
                                                      <option selected value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                                    <?php }; ?>
                                                  <?php if($user_info[0]->gender == 'Female') { ?>
                                                      <option value="Male">Male</option>
                                                      <option selected value="Female">Female</option>
                                                    <?php }; ?>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Phone Number</label>
                                                  <input type="text" class="form-control" value="<?php echo $user_info[0]->contact_no?>" name="contact_no" id="contact_no">
                                                </div>
                                                <!-- <div class="col-sm-6 form-group">
                                                  <label>Email Address</label>
                                                  <input type="text" class="form-control" value="<?php echo $user['email']?>" name="email" id="email">
                                                </div> -->
                                              </div>
                                              <!-- <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" placeholder="" class="form-control" name="username" id="username" value= "<?php echo $user['username']?>">
                                              </div> -->
                                              <div class="form-group">
                                                <label>Area of Expertise</label>
                                                <select class="form-control" name="area_of_expertise" id="area_of_expertise">
                                                  <?php if($user_info[0]->area_of_expertise == 'Junior High School') { ?>
                                                    <option selected value="Junior High School">Junior High School</option>
                                                    <option value="Senior High School">Senior High School</option>
                                                  <?php }; ?>
                                                  <?php if($user_info[0]->area_of_expertise == 'Senior High School') { ?>
                                                    <option value="Junior High School">Junior High School</option>
                                                    <option selected value="Senior High School">Senior High School</option>
                                                  <?php }; ?>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label>Profile Picture</label>
                                                <input type="file" class="form-control-file" name="upload_pic">
                                              </div>
                                              <br />
                                            <button type="submit" class="btn btn-info" id="edit_profile">Save</button>
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
