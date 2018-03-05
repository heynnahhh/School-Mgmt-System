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
        <li><i class="fa fa-dashboard"></i> Learning Resource</a></li>
        <li><a>Topics</a></li>
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
                  <label for="receipt_no" class="col-sm-3 control-label">Topic ID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" readonly name="receipt_no" id="ed_receipt_no" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="receipt_no" class="col-sm-3 control-label">Topic Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="receipt_no" id="ed_receipt_no" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="itr_item_code" class="col-sm-3 control-label">Education Type</label>
                  <div class="col-sm-8">
                    <select class="form-control item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="itr_item_code" class="col-sm-3 control-label">Grade Level</label>
                  <div class="col-sm-8">
                    <select class="form-control item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="itr_item_code" class="col-sm-3 control-label">Subject Type</label>
                  <div class="col-sm-8">
                    <select class="form-control item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="itr_item_code" class="col-sm-3 control-label">Strand</label>
                  <div class="col-sm-8">
                    <select class="form-control item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="itr_item_code" class="col-sm-3 control-label">Subject</label>
                  <div class="col-sm-8">
                    <select class="form-control item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
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
