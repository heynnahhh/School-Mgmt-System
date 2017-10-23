<?php include 'templates/header.php';?>
<div class="col-twelve">
	<div class="wrapper row3">
		<main class="hoc hoc_all container clear">
			<div class="group demo">
				<div class="group btmspace-50 demo">

					<div class="two_third first">
						<div class="headline_underline"><h6 class="news_heading">Online Application for Senior High School</h6></div>
              <br>
              <div class="callout callout-info">
                <p>Please fill up the form below.</p>
              </div>
            <div class="cd-form">
                <form action="<?php echo base_url();?>index.php/website/application#success" id="cd-submit_form">
                    <fieldset>
                        <div class="half-width2 full-width btmspace-10">
                            <label>Last Name</label>
                            <input type="text" id="last_name" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>First Name</label>
                            <input type="text" id="first_name" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Middle Name</label>
                            <input type="text" id="middle_name" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <b class="half-right">
                                <label>Sex</label>
                                 <span class="cd-select">
                                    <select id="sex" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                 </span>
                            </b>

                            <b class="half-right">
                                <label>Age<small>(As of last birthday)</small></label>
                                <input type="number" id="age" required>
                            </b>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Birth Place</label>
                            <input type="text" id="birth_place" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Birthdate</label>
                            <input type="date" id="birth_date" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Religion</label>
                            <input type="text" id="religion" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Mother Tongue</label>
                            <input type="text" id="mother_tongue" placeholder="Ex. Tagalog, Swedish" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Email Address</label>
                            <input type="email" id="email" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Contact #</label>
                            <input type="number" id="contact_number" required>
                        </div>

                        <div class="full-width full-width btmspace-10">
                            <label>Address</label>
                            <input type="text" id="street" placeholder="Home #  Street" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <b class="half-left">
                                <label>Barangay</label>
                                <input type="text" id="barangay" required>
                            </b>

                            <b class="half-left">
                                <label>City</label>
                                <input type="text" id="city" required>
                            </b>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Province</label>
                            <input type="text" id="province" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Mother's Name</label>
                            <input type="text" id="mother_name" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Father's Name</label>
                            <input type="text" id="father_name" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Parent's Contact Number</label>
                            <input type="number" id="parent_contact" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Guardian Name</label>
                            <input type="text" id="guardian_name" required>
                        </div>

                        <div class="half-width2 full-width btmspace-10">
                            <label>Relationship to the Guardian</label>
                            <input type="text" id="relationship" required>
                        </div>

                        <div class="half-width full-width btmspace-10">
                            <label>Guardian's Contact Number</label>
                            <input type="number" id="guardian_contact" required>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div>
                            <button class="cd-submit">Submit</button>
                        </div>
                    </fieldset>
                </form>

            </div> <!-- .cd-form -->

                <div id="success" class="overlay">
                    <div class="popup">
                        <a class="close" href="<?php echo base_url();?>index.php/website/application">&times;</a>
                        <p class = "modal-content">Success</p>
                    </div>
                </div>

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
