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

                                          <form>
                                            <div class="col-sm-7">
                                              <div class="form-group">
                                                <label>Title of Learning Resource</label>
                                                <input type="text" placeholder="ex. CSS HTML 101" class="form-control">
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Description</label>
                                                  <textarea placeholder="Type Here..." class="form-control"></textarea>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Objective</label>
                                                  <textarea placeholder="Type Here..." class="form-control"></textarea>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Education Type</label>
                                                  <select class="form-control" id="educ_type" name="educ_type" onchange="populate(this.id,'grade_lvl')">
                                                    <option></option>
                                                    <option>Junior High School</option>
                                                    <option>Senior High School</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Grade Level</label>
                                                  <select class="form-control" id="grade_lvl" name="grade_lvl">
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Learning Subject</label>
                                                  <select class="form-control" id="lrn_subject" name="lrn_subject">
                                                    <option></option>
                                                    <option>Araling Panlipunan</option>
                                                    <option>Edukasyon sa Pagpapakatao</option>
                                                    <option>Edukasyong Pantahanan at Pangkabuhayan</option>
                                                    <option>English</option>
                                                    <option>Filipino</option>
                                                    <option>Mathematics</option>
                                                    <option>Science</option>
                                                    <option>Technology and Livelihood Education</option>
                                                  </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                  <label>Topic</label>
                                                  <div class="input-group">
                                                    <select class="form-control" id="topic" name="topic">
                                                    </select>
                                                    <div class="input-group-btn">
                                                      <button type="button" class="btn btn-theme btn-secondary" href="" data-toggle="modal" data-target="#myModal">Add Topic</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Learning Resource Type</label>
                                                  <select class="form-control">
                                                    <option></option>
                                                    <option>Learning Module</option>
                                                    <option>Learning Material</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Intended Users</label>
                                                  <select class="form-control">
                                                    <option></option>
                                                    <option>Students</option>
                                                    <option>Teachers</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6 form-group">
                                                  <label>Copyright</label>
                                                  <select class="form-control">
                                                    <option></option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                  <label>Copyright Owner</label>
                                                   <input type="text" placeholder="ex. CSS 101" class="form-control">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Learning Resource</label>
                                                <input type="file" class="form-control-file">
                                              </div>
                                              <br />
                                            <button type="button" class="btn btn-theme btn-secondary">Upload</button>
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
                            <form action="index.html">
                              <div class="row">
                                <div class="col-sm-6 form-group">
                                  <label>Topic Name</label>
                                   <input type="text" placeholder="Type Here..." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                  <label>Subject</label>
                                  <select class="form-control" >
                                    <option selected disabled>Choose</option>
                                    <option>Araling Panlipunan</option>
                                    <option>Edukasyon sa Pagpapakatao</option>
                                    <option>Edukasyong Pantahanan at Pangkabuhayan</option>
                                    <option>English</option>
                                    <option>Filipino</option>
                                    <option>Mathematics</option>
                                    <option>Science</option>
                                    <option>Technology and Livelihood Education</option>
                                  </select>
                                </div>
                              </div>
                              <button type="button" class="btn btn-theme btn-secondary">Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <label class="page1">Country</label>
                  <div class="tooltips" title="Please select the country that the customer will primarily be served from">
                      <select id="country" name="country" onchange="populate(this.id,'location')" placeholder="Phantasyland">
                          <option></option>
                          <option>Germany</option>
                          <option>Spain</option>
                          <option>Hungary</option>
                          <option>USA</option>
                          <option>Mexico</option>
                          <option>South Africa</option>
                          <option>China</option>
                          <option>Russia</option>
                      </select>
                  </div>
                  <br />
                  <br />
                  <label class="page1">Location</label>
                  <div class="tooltips" title="Please select the city that the customer is primarily to be served from.">
                      <select id="location" name="location" placeholder="Anycity"></select>
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

      <?php include '/../templates/scripts.php';?>
