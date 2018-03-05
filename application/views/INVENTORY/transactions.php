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
                	<label for="receipt_no" class="col-sm-2 control-label">Receipt #</label>
      						<div class="col-sm-8">
      							<input type="text" class="form-control input-sm" name="receipt_no" id="ed_receipt_no" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                	<label for="itr_item_code" class="col-sm-2 control-label">Unit</label>
      						<div class="col-sm-7">
                    <select class="sel_category item_code" name="itr_item_code" id="ed_item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                      <?php foreach ($options as $option) { ?>
                      			<?php $items = array($option->item_code,$option->item_name); ?>
                            <option><?php echo implode(' - ', $items); ?></option>
            		        <?php }; ?>
                    </select>
      						</div>
                	<label for="quantity" class="col-sm-1 control-label">Qty</label>
      						<div class="col-sm-2">
      							<input type="text" class="form-control input-sm" name="quantity" id="ed_quantity" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="unit_cost" class="col-sm-2 control-label">Unit Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="unit_cost" id="ed_unit_cost" disabled="disabled" data-validate="required" data-message-required="Value Required" >
                  </div>
                  <label for="total_cost" class="col-sm-2 control-label">Total Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="total_cost" id="ed_total_cost" disabled="disabled" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Desc</label>
                  <div class="col-sm-8">
                    <textarea class="form-control input-sm" name="description" id="ed_description" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_by" class="col-sm-2 control-label">Receiver</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="received_by" id="ed_received_by" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_fr" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control input-sm" name="received_fr" id="ed_received_fr" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_fr" class="col-sm-2 control-label">Date Received</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control input-sm pull-right date_received" name="date_received" id="ed_date_received">
                    </div>
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
              <h4 class="box-title"> Transact Records</h4>
              <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Transaction</button>
                <!-- <button type="button" class="btn bg-green" id="myBtn3"><i class="fa fa-file-excel-o"></i> Import Data From Excel</button> -->
              </div>
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
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header gray">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"></i> Add Transaction</h4>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
                <div class="form-group">
                	<label for="receipt_no" class="col-sm-2 control-label">Receipt #</label>
      						<div class="col-sm-5">
      							<input type="text" class="form-control input-sm" name="receipt_no" id="receipt_no" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                	<label for="itr_item_code" class="col-sm-2 control-label">Unit</label>
      						<div class="col-sm-7">
                    <select class="sel_category" name="itr_item_code" id="item_code" style="width: 100%;">
                      <option selected="selected">Select Item:</option>
                      <?php foreach ($options as $option) { ?>
                      			<?php $items = array($option->item_code,$option->item_name); ?>
                            <option><?php echo implode(' - ', $items); ?></option>
            		        <?php }; ?>
                    </select>
      						</div>
                	<label for="quantity" class="col-sm-1 control-label">Qty</label>
      						<div class="col-sm-2">
      							<input type="text" class="form-control input-sm" name="quantity" id="quantity" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="unit_cost" class="col-sm-2 control-label">Unit Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="unit_cost" id="unit_cost" disabled="disabled" data-validate="required" data-message-required="Value Required" >
                  </div>
                  <label for="total_cost" class="col-sm-2 control-label">Total Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="total_cost" id="total_cost" disabled="disabled" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-8">
                    <textarea class="form-control input-sm" name="description" id="description" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_by" class="col-sm-2 control-label">Receiver</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control input-sm" name="received_by" id="received_by" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_fr" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control input-sm" name="received_fr" id="received_fr" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="received_fr" class="col-sm-2 control-label">Date Received</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control input-sm pull-right date_received" name="date_received" id="date_received">
                    </div>
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
  </div>
<?php include 'layout_footer.php';?>
