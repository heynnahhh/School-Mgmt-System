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
                        <h3>Upload Learning Resource</h3>
                        <hr>
                        <div class="row">
                          <div class="col-lg-12 main-chart">
                            <div class="row mt">
                              <div class="col-md-12">
                                  <div class="container">
                                     <div class="col-lg-12">
                                        <div class="row">

                                          <form method="post" enctype="multipart/form-data" id="topicForm">
                                            <div class="col-sm-7">
                                              <div class="form-group">
                                                <label>Title of Learning Resource</label>
                                                <input type="text" placeholder="ex. CSS HTML 101" class="form-control" name="lr_title" id="adlr_title">
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Description</label>
                                                  <textarea placeholder="Type Here..." class="form-control" rows="3" name="description" id="addescription"></textarea>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Objective</label>
                                                  <textarea placeholder="Type Here..." class="form-control" rows="3" name="objective" id="adobjective"></textarea>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Education Type</label>
                                                  <select class="form-control adeduc_type" id="adeduc_type" name="educ_type">
                                                    <option></option>
                                                    <option>Junior High School</option>
                                                    <option>Senior High School</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Grade Level</label>
                                                  <select class="form-control adgrade_lvl" id="adgrade_lvl" name="grade_lvl">
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group adsubj_type" style="display:none;">
                                                  <label>Subject Type</label>
                                                  <select class="form-control adsubj_type" id="adsubj_type" name="subj_type">
                                                    <option></option>
                                                    <option>Core Subject</option>
                                                    <option>Applied Subject</option>
                                                    <option>Specialized Subject</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group adstrand" style="display:none;">
                                                  <label>Strand</label>
                                                  <select class="form-control adstrand" id="adstrand" name="strand">
                                                    <option></option>
                                                    <option>STEM</option>
                                                    <option>HUMSS</option>
                                                    <option>GAS</option>
                                                    <option>Automotive</option>
                                                    <option>ABM</option>
                                                    <option>HE</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Learning Subject</label>
                                                  <select class="form-control adlrn_subject" id="adlrn_subject" name="lrn_subject">
                                                  </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                  <label>Topic</label>
                                                  <div class="input-group">
                                                    <select class="form-control sel_topic adtopic" id="adtopic" name="topic_name">
                                                    </select>
                                                    <div class="input-group-btn">
                                                      <button type="button" class="btn btn-theme btn-secondary" data-toggle="modal" data-target="#myModal">Add Topic</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Learning Resource Type</label>
                                                  <select class="form-control" id="adlr_type" name="lr_type">
                                                    <option></option>
                                                    <option>Learning Module</option>
                                                    <option>Learning Material</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Intended Users</label>
                                                  <select class="form-control" id="adintended_user" name="intended_user">
                                                    <option></option>
                                                    <option>Students</option>
                                                    <option>Teachers</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Copyright</label>
                                                  <select class="form-control" id="adcopyright" name="copyright">
                                                    <option></option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Copyright Owner</label>
                                                   <input type="text" placeholder="ex. CSS 101" class="form-control" id="adcopyright_owner" name="copyright_owner">
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Language</label>
                                                  <input type="text"  class="form-control" name="language" id="adlanguage">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Learning Resource</label><br>
                                                  <label class="btn btn-default btn-file btn-danger">
                                                    <i class="fa fa-upload"></i> Choose file <input type="file" name="upload_lrn" id="upload_lrn">
                                                  </label>
                                                </div>
                                              </div>
                                              <button type="submit" class="btn btn-theme btn-secondary" id="upload-lrnfile">Upload</button>
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

                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Add Topic</h4>
                        </div>
                        <div class="modal-body">
                           <div id="login-page">
                            <form method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-sm-6 form-group">
                                  <label>Education Type</label>
                                  <select class="form-control educ_type" id="educ_type" name="educ_type">
                                    <option></option>
                                    <option>Junior High School</option>
                                    <option>Senior High School</option>
                                  </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                  <label>Grade Level</label>
                                  <select class="form-control grade_lvl" id="grade_lvl" name="grade_lvl">
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-6 form-group subj_type" style="display:none;">
                                  <label>Subject Type</label>
                                  <select class="form-control subj_type" id="subj_type" name="subj_type">
                                    <option></option>
                                    <option>Core Subject</option>
                                    <option>Applied Subject</option>
                                    <option>Specialized Subject</option>
                                  </select>
                                </div>
                                <div class="col-sm-6 form-group strand" style="display:none;">
                                  <label>Strand</label>
                                  <select class="form-control strand" id="strand" name="strand">
                                    <option></option>
                                    <option>STEM</option>
                                    <option>HUMSS</option>
                                    <option>GAS</option>
                                    <option>Automotive</option>
                                    <option>ABM</option>
                                    <option>HE</option>
                                  </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                  <label>Learning Subject</label>
                                  <select class="form-control lrn_subject" id="lrn_subject" name="lrn_subject">
                                  </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                  <label>Topic Name</label>
                                   <input type="text" class="form-control sel_topic" placeholder="Type Here..." name="topic" id="topic">
                                </div>
                              </div>
                              <button type="submit" class="btn btn-theme btn-secondary submit">Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->
                  <div class="col-lg-3 ds">
                    <!--JUNIOR HIGH SECTION-->
					         	<h3>Junior High School Latest Addition</h3>

                      <!-- First Action -->
                      <div class="desc">

                      	<div class="details">
                      		<p><muted>Grade 7 - Module type</muted><br/>
                      		   <a href="#">James Brown</a><br/> subscribed to your newslettedsadasdasdsr.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">

                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      		</p>
                      	</div>
                      </div>

                       <!-- SENIOR HIGH SECTION -->
						        <h3>Senior High School Latest Addition</h3>
                                            <!-- First Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      		</p>
                      	</div>
                      </div>

                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>
      <!--main content end-->

      <?php include '/../templates/footer.php';?>

      <?php include '/../templates/ajax.php';?>
