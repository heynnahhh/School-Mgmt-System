<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-exchange"></i>
        Transactions
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-database"></i></a>INVENTORY</li>
        <li><a>Transactions</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-4" id="form" style="display:none;">
          <div class="box box-primary">
            <div class="box-header">
              <h4 class="box-title"><i class="fa fa-edit"> Edit</i></h4>
            </div>
            <div class="box-body">
              <form>
                <div class="row">
                  <div class="form-group">
                  	<label for="field-1" class="col-sm-2 control-label">Receipt #</label>
        						<div class="col-sm-5">
        							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
        						</div>
                    <label for="field-1" class="col-sm-1 control-label">Qty</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
        					</div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                  	<label for="field-1" class="col-sm-2 control-label">Unit</label>
        						<div class="col-sm-9">
        							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
        						</div>
        					</div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">Unit Cost</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
                    <label for="field-1" class="col-sm-2 control-label">Total Cost</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">Desc</label>
                    <div class="col-sm-9">
                      <textarea class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">Receiver</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">Supplier</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
                  </div>
                </div><hr>
                <button type="button" class="btn btn-sm bg-gray" onclick="cancel()">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12" id="table">
          <div class="box box-solid">
            <div class="box-header">
              <h4 class="box-title"> Transact Records</h4>
              <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Transaction</button>
                <button type="button" class="btn bg-green" id="myBtn3"><i class="fa fa-file-excel-o"></i> Import Data From Excel</button>              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="transacts_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Receipt #</th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Total Cost</th>
                      <th>Date Received</th>
                      <th>Manage</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Receipt #</th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Total Cost</th>
                      <th>Date Received</th>
                      <th>Manage</th>
                  </tr>
              </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header gray">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"> Add Transaction</i></h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="form-group">
                	<label for="field-1" class="col-sm-2 control-label">Receipt #</label>
      						<div class="col-sm-5">
      							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                	<label for="field-1" class="col-sm-2 control-label">Unit</label>
      						<div class="col-sm-7">
      							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
                	<label for="field-1" class="col-sm-1 control-label">Qty</label>
      						<div class="col-sm-2">
      							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Unit Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                  <label for="field-1" class="col-sm-2 control-label">Total Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-8">
                    <textarea class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Receiver</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-success">Save changes</button>
            <button type="button" class="btn btn-sm bg-gray" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
<?php include 'layout_footer.php';?>
