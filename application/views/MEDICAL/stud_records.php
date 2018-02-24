<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><i class="fa fa-plus-square"></i>
        Patient Records
    </h1>
    <hr>
    <ol class="breadcrumb">
      <li>MAIN NAVIGATION</li>
      <li><a><i class="fa fa-plus-square"></i></a>MEDICAL</li>
      <li><a>Patients Record</a></li>
      <li><a>Students</a></li>
    </ol>
  </section>
  <!-- /.content-wrapper -->
  <div class="row">
    <div class="col-md-12">

      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <div class="col-md-4">
              <div class="form-group">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddStudent">
                <i class="fa fa-plus-square"></i> Add Student</a>
              </div>

              <div class="form-group">
                <label>Choose Year:</label>
                <div class="box-body">
                  <select class="form-control" style="width: 100%;">
                    <option>Grade 7</option>
                    <option>Grade 8</option>
                    <option>Grade 9</option>
                    <option>Grade 10</option>
                    <option>Grade 11</option>
                    <option>Grade 12</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Choose Section:</label>
                <div class="box-body">
                  <select class="form-control" style="width: 100%;">
                    <option>Grade 7</option>
                    <option>Grade 8</option>
                    <option>Grade 9</option>
                    <option>Grade 10</option>
                    <option>Grade 11</option>
                    <option>Grade 12</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <table id="stud_list" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Surname:</th>
                      <th>Name:</th>
                      <th>M.I:</th>
                      <th>M.I:</th>
                      <th>M.I:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr onclick="view_records()">
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- col -->

      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <div class="form-group">
                <label> RECORDS:</label>&nbsp;&nbsp;
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#StudentConsultation">
                <i class="fa fa-plus-square"></i> Add Consultation</a>
            </div>
            <hr>
            <table id="stud_records" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Date:</th>
                  <th>Complaint / Ailment:</th>
                  <th>Treatment / Medicine:</th>
                  <th>Remarks:</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12/18/17</td>
                  <td>Heart burn</td>
                  <td>Biogesic</td>
                  <td>N.A</td>
                </tr>
                <tr>
                  <td>1/18/2018</td>
                  <td>Fungi</td>
                  <td>Lotion</td>
                  <td>N.A</td>
                </tr>
                <tr>
                  <td>1/18/2018</td>
                  <td>Fungi</td>
                  <td>Lotion</td>
                  <td>N.A</td>
                </tr>
                <tr>
                  <td>1/18/2018</td>
                  <td>Fungi</td>
                  <td>Lotion</td>
                  <td>N.A</td>
                </tr>
                <tr>
                  <td>1/18/2018</td>
                  <td>Fungi</td>
                  <td>Lotion</td>
                  <td>N.A</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>

  <!-- MODALS -->
    <div class="modal fade" id="AddStudent" role="dialog" >
      <div class="modal-dialog modal-lg" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title"><i class="fa fa-plus-square"></i> Student Profile</h3>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-4">
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Surname">
                          </div>
                          <div class="col-xs-4">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name">
                          </div>
                          <div class="col-xs-4">
                            <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <label>YEAR:</label>
                            <select class="form-control" id="grade_lvl" name="grade_lvl">
                              <option selected="selected">Select Grade Level:</option>>
                              <option>Grade 7</option>
                              <option>Grade 8</option>
                              <option>Grade 9</option>
                              <option>Grade 10</option>
                              <option>Grade 11</option>
                              <option>Grade 12</option>
                            </select>
                          </div>
                          <div class="col-xs-6">
                            <label>SECTION:</label>
                            <select class="form-control" id="section" name="section">

                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-3">
                            <label>AGE:</label>
                            <input type="text" class="form-control" name="age" id="age">
                          </div>
                          <div class="col-xs-5">
                            <label>BIRTHDAY:</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="birthdate" id="birthdate">
                            </div>
                            <!-- /.input group -->
                          </div>
                          <div class="col-xs-4">
                            <label>CONTACT NUMBER:</label>
                            <input type="text" class="form-control" name="contact_no" id="contact_no">
                          </div>
                        </div>
                      </div>
                    </div><hr>
                    <h4>Guardian Info</h4><br>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <label>MOTHER'S NAME:</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name">
                          </div>

                        <div class="col-xs-6">
                          <label>CONTACT NUMBER:</label>
                            <input type="text" class="form-control" name="mother_contact" id="mother_contact">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <label>FATHER'S NAME:</label>
                            <input type="text" class="form-control" name="father_name" id="father_name">
                          </div>

                        <div class="col-xs-6">
                          <label>CONTACT NUMBER:</label>
                            <input type="text" class="form-control" name="father_contact" id="father_contact">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>GUARDIAN: (Optional)</label>
                          <input type="text" class="form-control">
                        </div>

                        <div class="col-xs-6">
                          <label>CONTACT NUMBER:</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right submit">Save Changes</button>
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="StudentConsultation" role="dialog" >
      <div class="modal-dialog modal-md" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title"><i class="fa fa-plus-square"></i> Consultation</h3>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-1">
                          <label style="margin-top: 40%">DATE:</label>
                        </div>
                        <div class="col-xs-11">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="stud_date_consult">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>COMPLAINT / AILMENTS:</label>
                          <textarea class="form-control" rows="3" style="width: 212%;"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>TREATMENT / MEDICINE:</label>
                          <textarea class="form-control" rows="3" style="width: 212%;"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>REMARKS:</label>
                          <textarea class="form-control" rows="3" style="width: 212%;"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /MODALS -->
</div>
<?php include 'layout_footer.php';?>