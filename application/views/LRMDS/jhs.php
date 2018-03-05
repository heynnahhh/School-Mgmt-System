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
        <li><a><i class="fa fa-dashboard"></i> Learning Resource</a></li>
        <li><a>Subjects</a></li>
        <li><a>Junior High School</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-5 edit_form" id="form" style="display:none;">
          <div class="box box-primary">
            <div class="box-header bg-blue">
              <h4 class="box-title"><i class="fa fa-edit"></i> Edit</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="form-group">
                  <label for="jhs_subject" class="col-sm-2 control-label">Subject Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="jhs_subject" id="ed_jhs_subject" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    <input type="text" class="form-control input-sm" readonly style="display:none;" name="jhs_subject_id" id="ed_jhs_subject_id">
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
              <h4 class="box-title"> Junior High School</h4>
               <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Subject</button>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="jhs_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Subject Name</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody></tbody>
              <tfoot>
                  <tr>
                      <th>Subject Name</th>
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
                  <label for="jhs_subject" class="col-sm-2 control-label"> Subject Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control input-sm" name="jhs_subject" id="jhs_subject" data-validate="required" data-message-required="Value Required" value="" autofocus="">
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
