<?php include 'templates/header.php';?>
<div class="col-twelve">
	<div class="wrapper row3">
		<main class="hoc hoc_all container clear">
			<div class="group demo">
				<div class="group btmspace-50 demo">

					<div class="two_third first">

						<div class="headline_underline"><h6 class="news_heading">Online Application for Senior High School</h6></div>

              <div class="cd-form">
                <form action="<?php echo site_url('website/Application/submit_form')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  <fieldset>

                      <div class="half-width2 full-width btmspace-10">
												<label>Learner Reference Number (LRN)</label>
												<input type="text" name="lrn" placeholder="14-038-000" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Last Name</label>
												<input type="text" name="last_name" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
												<label>First Name</label>
												<input type="text" name="first_name" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Middle Name</label>
												<input type="text" name="middle_name">
                      </div>

                      <div class="half-width2 full-width btmspace-10">
												<b class="half-right">
                          <label>Sex</label>
													<span class="cd-select">
														<select name="sex" required>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</span>
												</b>
												<b class="half-right">
													<label>Age<small>(As of last birthday)</small></label>
													<input type="text" name="age" required>
												</b>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Birthdate</label>
												<input type="date" name="birth_date" required>
											</div>

                      <div class="half-width2 full-width btmspace-10">
												<label>Birthplace</label>
												<input type="text" name="birth_place" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Mother Tongue</label>
												<input type="text" name="mother_tongue" placeholder="Ex. Tagalog, Swedish" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
												<label>Religion</label>
												<input type="text" name="religion" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Contact #</label>
												<input type="text" name="contact_number" required>
                      </div>

                      <div class="full-width full-width btmspace-10">
                          <label>Address</label>
                          <input type="text" name="street" placeholder="Home #  Street" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
												<b class="half-left">
                          <label>Barangay</label>
                          <input type="text" name="barangay" required>
												</b>
												<b class="half-left">
													<label>City</label>
													<input type="text" name="city" required>
												</b>
                      </div>

                      <div class="half-width full-width btmspace-10">
												<label>Province</label>
												<input type="text" name="province" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
                          <label>Mother's Name</label>
                          <input type="text" name="mother_name" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
                          <label>Father's Name</label>
                          <input type="text" name="father_name" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
                          <label>Parent's Contact Number</label>
                          <input type="text" name="parent_contact" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
                          <label>Guardian Name</label>
                          <input type="text" name="guardian_name" required>
                      </div>

                      <div class="half-width2 full-width btmspace-10">
                          <label>Relationship to the Guardian</label>
                          <input type="text" name="relationship" required>
                      </div>

                      <div class="half-width full-width btmspace-10">
                          <label>Guardian's Contact Number</label>
                          <input type="text" name="guardian_contact" required>
                      </div>

                  </fieldset>

                  <fieldset>
                    <div>
                      <input type="submit" value="Submit">
                    </div>
                  </fieldset>

                </form>
              </div> <!-- .cd-form -->

            </div>

                <div class="one_third">
                    <?php include 'sidebar.php' ;?>
                </div>

                <div class="clear"></div>
          </div>
        </div>
      </main>
    </div>
  </div>


<?php include 'templates/footer.php';?>
