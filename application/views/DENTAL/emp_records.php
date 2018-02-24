<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><i class="fa fa-plus-square"></i>
        Patients Record
    </h1>
    <hr>
    <ol class="breadcrumb">
      <li>MAIN NAVIGATION</li>
      <li><a><i class="fa fa-plus-square"></i></a>DENTAL</li>
      <li><a>Patients Record</a></li>
      <li><a>Teacher/Staff</a></li>
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
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddEmployee">
                <i class="fa fa-plus-square"></i> Add Employee</a>
              </div>

              <div class="form-group">
                <label>Choose Department:</label>
                <div class="box-body">
                  <select class="form-control" style="width: 100%;">
                    <option>Non-Teaching</option>
                    <option>Science</option>
                    <option>MAPEH</option>
                    <option>Values Education</option>
                    <option>Mathematics</option>
                    <option>English</option>
                    <option>Social Studies</option>
                    <option>Filipino</option>
                    <option>TLE-Vocational</option>
                    <option>TLE-Home Economics</option>
                    <option>Library Science</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <table id="emp_list" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Surname:</th>
                      <th>Name:</th>
                      <th>M.I:</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Terrobias</td>
                      <td>Marc Dominic</td>
                      <td>I</td>
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
    </div>
    <!-- row -->
  </div>

  <!-- MODALS -->
    <div class="modal fade" id="AddEmployee" role="dialog" >
      <div class="modal-dialog modal-md" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title"><i class="fa fa-plus-square"></i> Add Employee</h3>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-4">
                          <input type="text" class="form-control" placeholder="Surname">
                        </div>
                        <div class="col-xs-4">
                          <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-xs-4">
                          <input type="text" class="form-control" placeholder="M.I">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>DEPARTMENT:</label>
                          <select class="form-control">
                            <option>Non-Teaching</option>
                            <option>Science</option>
                            <option>MAPEH</option>
                            <option>Values Education</option>
                            <option>Mathematics</option>
                            <option>English</option>
                            <option>Social Studies</option>
                            <option>Filipino</option>
                            <option>TLE-Vocational</option>
                            <option>TLE-Home Economics</option>
                            <option>Library Science</option>
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <label>AGE:</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>BIRTHDAY:</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="emp_birthdate">
                          </div>
                          <!-- /.input group -->
                        </div>
                        <div class="col-xs-6">
                          <label>CONTACT NUMBER:</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">

                        <div class="col-xs-6">
                          <label>IN CASE OF EMERGENCY:</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">

                        <div class="col-xs-6">
                          <label>NAME:</label>
                          <input type="text" class="form-control">
                        </div>

                        <div class="col-xs-6">
                          <label>RELATIONSHIP:</label>
                          <select class="form-control">
                            <option>Father</option>
                            <option>Mother</option>
                            <option>Sibling</option>
                            <option>Guardian</option>
                            <option>Husband</option>
                            <option>Wife</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">

                        <div class="col-xs-6">
                          <label>ADDRESS:</label>
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary pull-left"  data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="EmployeeConsultation" role="dialog" >
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
                            <input type="text" class="form-control pull-right" id="emp_date_consult">
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
  <!-- /MODALS -->  `
</div>
<?php include 'layout_footer.php';?>