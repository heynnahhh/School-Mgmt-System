<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subjects
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i>Learning Resource</a></li>
        <li><a>Subjects</a></li>
        <li><a>Senior High School</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid full_details" style="display:none;">
            <div class="box-header">
              <h4 class="box-title"> Full Details:</h4>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body table-responsive">
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-3 left"></div>
                  <div class="col-xs-3 middle"></div>
                  <div class="col-xs-3 right"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-5 edit_form" id="form" style="display:none;">
          <div class="box box-primary">
            <div class="box-header bg-blue">
              <h4 class="box-title"><i class="fa fa-edit"></i> Edit</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="form-group">
                  <label for="shs_subject" class="col-sm-2 control-label">Subject Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input-sm" name="shs_subject" id="ed_shs_subject" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="receipt_no" class="col-sm-2 control-label">Subject Type</label>
                  <div class="col-sm-8">
                    <select class="form-control input-sm" name="subject_type" id="ed_subject_type" style="width: 100%;">
                      <option>Core Subject</option>
                      <option>Applied Subject</option>
                      <option>Specialized Subject</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="receipt_no" class="col-sm-2 control-label">Strand</label>
                  <div class="col-sm-8">
                    <select class="form-control input-sm " name="strand" id="ed_strand" style="width: 100%;">
                      <option>STEM</option>
                      <option>HUMSS</option>
                      <option>GAS</option>
                      <option>Automotive Servicing</option>
                      <option>ABM</option>
                      <option>Home Economics</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="grade_lvl" class="col-sm-2 control-label">Grade Level</label>
                  <div class="col-sm-8">
                    <select class="form-control input-sm " name="grade_lvl" id="ed_grade_lvl" style="width: 100%;">
                      <option>Grade 11</option>
                      <option>Grade 12</option>
                    </select>
                  </div>
                </div>
              </div><hr>
                <button type="button" class="btn btn-sm bg-blue update" onclick="">Update</button>
                <button type="button" class="btn btn-sm bg-gray" onclick="cancel()">Cancel</button>
            </div>
          </form>
          </div>
        </div>
        <div class="col-xs-12" id="table">
          <div class="box box-solid">
            <div class="box-header">
              <h4 class="box-title"> Senior High School</h4>
              <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Subject</button>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="shs_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Subject Name</th>
                      <th>Subject Type</th>
                      <th>Strand</th>
                      <th>Grade Level</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody></tbody>
              <tfoot>
                  <tr>
                      <th>Subject Name</th>
                      <th>Subject Type</th>
                      <th>Strand</th>
                      <th>Grade Level</th>
                      <th>Actions</th>
                  </tr>
              </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header gray">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"></i> Add Subject</h4>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="form-group">
                  <label for="subject" class="col-sm-3 control-label"> Subject Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="subject" id="adsubject" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                  <div class="form-group">
                    <label for="grade_lvl" class="col-sm-3 control-label">Grade Level</label>
                    <div class="col-sm-8">
                      <select class="form-control input-sm" name="grade_lvl" id="adgrade_lvl" style="width: 100%;">
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                      </select>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="subject_type" class="col-sm-3 control-label">Subject Type</label>
                    <div class="col-sm-8">
                      <select class="form-control input-sm" name="subject_type" id="adsubject_type" style="width: 100%;">
                        <option value="Core Subject">Core Subject</option>
                        <option value="Applied Subject">Applied Subject</option>
                        <option value="Specialized Subject">Specialized Subject</option>
                      </select>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group strand-class">
                    <label for="strand" class="col-sm-3 control-label">Strand</label>
                    <div class="col-sm-8">
                      <select class="form-control input-sm" name="strand" id="adstrand" style="width: 100%;">
                        <option></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-success submit">Save</button>
                <button type="button" class="btn btn-sm bg-gray" data-dismiss="modal">Cancel</button>
              </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="delModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <h4>Are you sure you want to delete?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger yes" id="yes">Yes</button>
            <button type="button" class="btn btn-sm bg-gray" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </section>
  </div>
<?php include 'layout_footer.php';?>
