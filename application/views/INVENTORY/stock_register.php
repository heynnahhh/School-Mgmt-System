<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-check-square-o"></i>
        Stock Register
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-database"></i></a>INVENTORY</li>
        <li><a>Stock Register</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
    <!-- All stocks -->
      <div class="row" id="all_stock">
        <div class="col-xs-4" id="form" style="display:none;">
          <div class="box box-success">
            <div class="box-header">
              <h4 class="box-title"><i class="fa fa-edit"> Edit</i></h4>
            </div>
            <div class="box-body">
              <form>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-3 control-label" style="padding-right:5px;">Item Name</label>
                  <div class="col-sm-8">
                    <input type="search" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-3 control-label">Category</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" data-placeholder="Select" style="width: 100%;">
                      <?php foreach ($options as $option){?>
                        <option><?php echo $option->department?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-3 control-label">Quantity</label>
                  <div class="col-sm-4">
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
              <h4 class="box-title">Inventory</h4>
              <div class="btn-group" style="margin-left:20px;">
                <button type="button" class="btn bg-blue">Filter by Department</button>
                <button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="showDepartments()">Inventory</a><li>
                  <li><a href="#" onclick="showDepartments()">Senior High</a><li>
                  <li><a href="#" onclick="showDepartments()">Math</a><li>
                  <li><a href="#" onclick="showDepartments()">English</a><li>
                  <li><a href="#" onclick="showDepartments()">MAPEH</a><li>
                  <li><a href="#" onclick="showDepartments()">TLE-HE</a><li>
                  <li><a href="#" onclick="showDepartments()">Non-Teachings</a><li>
                  <li><a href="#" onclick="showDepartments()">Science</a><li>
                  <li><a href="#" onclick="showDepartments()">Social Studies</a><li>
                  <li><a href="#" onclick="showDepartments()">Filipino</a><li>
                  <li><a href="#" onclick="showDepartments()">Values Ed</a><li>
                  <li><a href="#" onclick="showDepartments()">TLE-Voc</a><li>
                  <li><a href="#" onclick="showDepartments()">Library</a><li>
                  <li><a href="#" onclick="showDepartments()">Medical</a><li>
                  <li><a href="#" onclick="showDepartments()">Dental</a><li>
                </ul>
              </div>
            </div>
            <div class="box-body">
              <table id="stock_tbl" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Stock No.</th>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Available Quantity</th>
                      <th>Manage</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Stock No.</th>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Available Quantity</th>
                      <th>Manage</th>
                  </tr>
              </tfoot>
              <tbody>
              </tbody>
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
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"></i> Distribute</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label" style="padding-right:5px;">Item Name</label>
                  <div class="col-sm-7">
                    <input type="search" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Department</label>
                  <div class="col-sm-7">
                    <select class="form-control select2" data-placeholder="Select" style="width: 100%;">
                      <?php foreach ($options as $option){?>
                        <option><?php echo $option->department?></option>
                      <?php };?>
                    </select>
                  </div>
                </div>
                <button class="btn btn-sm bg-blue add_clone"><i class="fa fa-plus-circle"></i></button>
                <button class="btn btn-sm bg-red del_clone"><i class="fa fa-minus-circle"></i></button>
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-3">
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
