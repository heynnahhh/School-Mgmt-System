<?php include '/../templates/header.php';?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

	     <!--main content start-->
        <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-lg-12 main-chart">
    						<div class="row mt">
    							<div class="col-md-12">
                      <div class="container">
                    	   <div class="col-lg-18 well">
                    	      <div class="row">
                              <div class="pull-right">
                                <img class="register" src = "<?php echo base_url();?>includes/lr/img/logo.png">
                                <h3 class="register-title">AHS - Learning Resource Portal</h3>
                                <p class="register-info">
                                  This portal is designed to provide you with access to quality learning
                                  <br/ >and teaching resources such asLearning Material, Lesson Plan,
                                  <br />Learning Guide,Learning Module and Full course that are aligned with
                                  <br />K to 12 curriculum. These can be used as primary bases or as supplement
                                  <br />to teaching and learning processes.
                                </p>
                              </div>
                              <form method="post" enctype="multipart/form-data" id="registerForm">
                      					<div class="col-sm-6">
                                  <div class="row">
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Surname" class="form-control"  name="last_name" id="last_name" >
                      							</div>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="First Name" class="form-control" name="first_name" id="first_name">
                      							</div>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Middle Name" class="form-control" name="middle_name" id="middle_name">
                      							</div>
                      						</div>
                      						<div class="form-group">
                      							<label>Address</label>
                      							<textarea placeholder="" rows="3" class="form-control" name="address" id="address"></textarea>
                      						</div>
                                  <div class="row">
                      							<div class="col-sm-6 form-group">
                      								<label>Birthdate</label>
                      								<input type="date" class="form-control" name="birthdate" id="birthdate">
                      							</div>
                      							<div class="col-sm-6 form-group">
                      								<label>Gender</label>
                                      <select class="form-control" name="gender" id="gender">
                                        <option selected disabled>Choose</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                      </select>
                      							</div>
                      						</div>
                                  <div class="row">
                                    <div class="col-sm-6 form-group">
                                      <label>Phone Number</label>
                                      <input type="text" class="form-control" name="contact_no" id="contact_no">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                      <label>Email Address</label>
                                      <input type="text" placeholder="ex. araullo.high@gmail.com" class="form-control" name="email" id="email">
                                    </div>
                                  </div>
                        					<div class="form-group">
                        						<label>Username</label>
                        						<input type="text" placeholder="" class="form-control" name="username" id="username">
                        					</div>
                      						<div class="row">
                      							<div class="col-sm-6 form-group">
                      								<label>Password</label>
                      								<input type="password" class="form-control">
                      							</div>
                      							<div class="col-sm-6 form-group">
                      								<label>Re-enter Password</label>
                      								<input type="password" class="form-control" name="password" id="password">
                      							</div>
                      						</div>
                        					<div class="form-group">
                        						<label>Area of Expertise</label>
                        						<select class="form-control" name="area_of_expertise" id="area_of_expertise">
                                        <option selected disabled> </option>
                                        <option>Junior High School</option>
                                        <option>Senior High School</option>
                                    </select>
                        					</div>
                      					<button type="button" class="btn btn-info submit">Register</button>
                      					</div>
                      				</form>
                    				</div>
                    	     </div>
      									</div><!-- /table-responsive -->
      								</div><!--/ White-panel -->
      							</div><! --/col-md-12 -->
      						</div><! -- row -->
              </section>
          </section>
      <!--main content end-->

      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
