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
        <div class="col-xs-5" id="form" style="display: none;">
          <div class="box box-primary">
            <div class="box-header bg-blue">
              <h4 class="box-title"><i class="fa fa-plus-circle"></i> Edit</h4>
            </div>
            <div class="box-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group">
                    <label for="item_code" class="col-sm-2 control-label">Item Code</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control input-sm" name="item_code" id="ed_item_code" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_category" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                      <select class="sel_category item_code" name="item_category" id="ed_item_category" style="width: 100%;">
                        <?php foreach ($categories as $category){?>
                          <option><?php echo $category->category?></option>
                        <?php };?>
                      </select>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_name" class="col-sm-2 control-label" style="padding-right:5px;">Item Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control input-sm" name="item_name" id="ed_item_name" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_desc" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control input-sm" name="item_desc" id="ed_item_desc" data-validate="required" data-message-required="Value Required"></textarea>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="unit_cost" class="col-sm-2 control-label">UnitCost</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control input-sm" name="unit_cost" id="ed_unit_cost" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div><hr>
                <button type="submit" class="btn btn-sm bg-blue update">Update</button>
                <button type="button" class="btn btn-sm bg-gray" onclick="cancel()">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12" id="table">
          <div class="box box-solid">
            <div class="box-header">
              <h4 class="box-title"> Inventory Items</h4>
              <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Item</button>
                <!-- <button type="button" class="btn bg-green" id="myBtn3"><i class="fa fa-file-excel-o"></i> Import Data From Excel</button> -->
              </div>
            </div>
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
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"></i> Add Item</h4>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                  <div class="form-group">
                    <label for="item_code" class="col-sm-2 control-label">ItemCode</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control input-sm" name="item_code" id="item_code" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_category" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                      <select class="sel_category item_code" name="item_category" id="item_category" style="width: 100%;">
                        <?php foreach ($categories as $category){?>
                          <option><?php echo $category->category?></option>
                        <?php };?>
                      </select>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_name" class="col-sm-2 control-label" style="padding-right:5px;">ItemName</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control input-sm" name="item_name" id="item_name" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="item_desc" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control input-sm" name="item_desc" id="item_desc" data-validate="required" data-message-required="Value Required"></textarea>
                    </div>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="form-group">
                    <label for="unit_cost" class="col-sm-2 control-label">UnitCost</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control input-sm" name="unit_cost" id="unit_cost" data-validate="required" data-message-required="Value Required">
                    </div>
                  </div>
                </div>
                <div class="row" style="display: none;">
                  <div class="form-group">
                  	<label for="category" class="col-sm-2 control-label">Category</label>
        						<div class="col-sm-5">
        							<input type="text" class="form-control input-sm" name="category" id="category" data-validate="required" data-message-required="Value Required">
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
