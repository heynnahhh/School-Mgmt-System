<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><i class="fa fa-plus-square"></i>
        Patient Records (Medical)
    </h1>
    <hr>
    <ol class="breadcrumb">
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
                <i class="fa fa-plus-square"> Add Student</i></a>
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
                <table id="recordsBox" class="table table-bordered table-striped">
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

      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <label>RECORDS:</label>
            <br>
            <table id="recordsBox" class="table table-bordered table-striped">
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

  <div class="modal fade" id="AddStudent" role="dialog" >
    <div class="modal-dialog modal-md" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><i class="fa fa-plus-square"></i> Add Student</h3>
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
                      <div class="col-xs-3">
                        <label>AGE:</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col-xs-5">
                        <label>BIRTHDAY:</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="col-xs-4">
                        <label>TELEPHONE:</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <label>MOTHER'S NAME:</label>
                        <input type="text" class="form-control">
                      </div>

                      <div class="col-xs-6">
                        <label>OCCUPATION:</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-6">
                        <label>FATHER'S NAME:</label>
                        <input type="text" class="form-control">
                      </div>

                      <div class="col-xs-6">
                        <label>OCCUPATION:</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary pull right" data-dismiss="modal">Save Changes</button>
          </div>
      </div>
    </div>
  </div>
</div>
<?php include 'layout_footer.php';?>