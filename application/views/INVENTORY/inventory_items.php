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
            <div class="box-header bg-green">
              <h4 class="box-title"><i class="fa fa-plus-circle"></i> Add Item</h4>
              <div class="btn-group pull-right">
                <a type="button" class="btn btn-sm bg-lime-opaque text-black" id="myBtn" href="#add_category">Add Category</a>
              </div>
            </div>
            <div class="box-body">
              <form method="post" enctype="multipart/form-data">
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
                      <select class="sel_category" name="item_category" id="item_category" style="width: 100%;">
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
                </div><hr>
                <button type="submit" class="btn btn-sm btn-success submit">Save</button>
                <button type="button" class="btn btn-sm bg-gray" href="#">Cancel</button>
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
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"></i> Add Category</h4>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
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
  </div>
<?php include 'layout_footer.php';?>
