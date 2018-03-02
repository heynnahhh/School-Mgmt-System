<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Topics
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li>Learning Resource</a></li>
        <li><a><i class="fa fa-dashboard"></i>Topics</a></li>
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
                  <label for="receipt_no" class="col-sm-2 control-label">Topic Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="receipt_no" id="ed_receipt_no" data-validate="required" data-message-required="Value Required" value="" autofocus="">
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
            <div class="box-body table-responsive">
              <table id="topic_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Topic Name</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody></tbody>
              <tfoot>
                  <tr>
                      <th>Topic Name</th>
                      <th>Actions</th>
                  </tr>
              </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
<?php include 'layout_footer.php';?>
