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
      <div class="row">
        <div class="col-xs-12">
          <p>
            <button type="button" class="btn bg-purple" id="myBtn2"><i class="fa fa-refresh"> Departamental Distributions</i></button>
          </p>
        </div>
        <br><br>
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-body">
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Available Quantity</th>
                      <th>Manage</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Item Name</th>
                      <th>Category</th>
                      <th>Available Quantity</th>
                      <th>Manage</th>
                  </tr>
              </tfoot>
              <tbody>
                  <tr>
                      <td>Zorita Serrano</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>
                        <button type="button" class="btn bg-green" id="myBtn">Distribute</button>
                        <button type="button" class="btn bg-blue" id="myBtn"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn bg-red" id="myBtn"><i class="fa fa-trash-o"></i></button>
                      </td>
                  </tr>
              </tbody>
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
            <h4 class="modal-title tle-white"><i class="fa fa-plus-circle"> Distribute</i></h4>
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
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
                <button class="btn btn-sm bg-blue" id="add_clone"><i class="fa fa-plus-circle"></i></button>
                <button class="btn btn-sm bg-red" id="del_clone"><i class="fa fa-minus-circle"></i></button>
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
