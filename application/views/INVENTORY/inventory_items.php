<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-shopping-cart"></i>
        Inventory Items
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-database"></i></a>INVENTORY</li>
        <li><a>Inventory Items</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-5">
          <div class="box box-success">
            <div class="box-header bg-lime-opaque">
              <div class="box-title text-green"><i class="fa fa-plus-circle"></i> Add Item</div>
              <div class="btn-group pull-right">
                <button type="button" class="btn btn-sm bg-olive" id="myBtn">Add Category</button>
              </div>
            </div>
            <div class="box-body">
              <form>
                <div class="row">
                  <div class="form-group">
                  	<label for="field-1" class="col-sm-2 control-label">ItemCode</label>
        						<div class="col-sm-6">
        							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
        						</div>
        					</div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                  	<label for="field-1" class="col-sm-2 control-label">Category</label>
        						<div class="col-sm-8">
                      <select class="sel_category" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                  	<label for="field-1" class="col-sm-2 control-label" style="padding-right:5px;">ItemName</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
        						</div>
        					</div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-2 control-label">UnitCost</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                    </div>
                  </div>
                </div><hr>
                <button type="button" class="btn btn-sm bg-gray">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-7" id="table">
          <div class="box box-solid">
            <!-- <div class="box-header">
              <h4 class="box-title">Inventory Items</h4>
            </div> -->
            <div class="box-body table-responsive">
              <table id="items_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Item Code</th>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Manage</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Item Code</th>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Status</th>
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
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"> Add Item</i></h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="form-group">
                	<label for="field-1" class="col-sm-2 control-label">Item Code</label>
      						<div class="col-sm-5">
      							<input type="text" class="form-control input-sm" name="item_code" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                	<label for="field-2" class="col-sm-2 control-label">Category</label>
      						<div class="col-sm-7">
                    <select class="sel_category" name="item_category" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn bg-grey" id="myBtn">Add Category</button>
      						</div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                	<label for="field-3" class="col-sm-2 control-label" style="padding-right:5px;">Item Name</label>
      						<div class="col-sm-8">
      							<input type="text" class="form-control input-sm" name="item_name" data-validate="required" data-message-required="Value Required" value="" autofocus="">
      						</div>
      					</div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-4" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control input-sm" name="item_desc" data-validate="required" data-message-required="Value Required" value="" autofocus=""></textarea>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Unit Cost</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="unit_cost" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-success">Save</button>
            <button type="button" class="btn btn-sm bg-gray" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
<?php include 'layout_footer.php';?>
