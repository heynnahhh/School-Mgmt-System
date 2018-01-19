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
        <div class="col-xs-12">
          <p>
            <button type="button" class="btn bg-purple" onclick="showDepartments()"><i class="fa fa-refresh"> Departamental Distributions</i></button>
          </p>
        </div>
        <br><br>
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
                        <button type="button" class="btn bg-blue" id="edit" onclick="edit()"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn bg-red" id="del"><i class="fa fa-trash-o"></i></button>
                      </td>
                  </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    <!-- Departments Stock -->
      <div class="row" id="departments_stock" style="display:none;">
        <div class="col-xs-12">
          <p>
            <button type="button" class="btn btn-info" onclick="showAll()"><i class="fa fa-arrow-circle-left"> Back</i></button>
          </p>
        </div>
        <br><br>
        <div class="col-xs-4">
          <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-blue" style="width:150px;" onclick="showDepartments()">Senior High</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-maroon" style="width:150px;" onclick="showDepartments()">Math</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-yellow" style="width:150px;" onclick="showDepartments()">English</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-purple" style="width:150px;" onclick="showDepartments()">MAPEH</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg btn-github" style="width:150px;" onclick="showDepartments()">TLE-HE</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg btn-twitter" style="width:150px;" onclick="showDepartments()">Non-Teachings</button>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-red" style="width:150px;" onclick="showDepartments()">Science</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-green" style="width:150px;" onclick="showDepartments()">Social Studies</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-orange" style="width:150px;" onclick="showDepartments()">Filipino</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-olive" style="width:150px;" onclick="showDepartments()">Values Ed</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg bg-navy" style="width:150px;" onclick="showDepartments()">TLE-Voc</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-lg btn-foursquare" style="width:150px;" onclick="showDepartments()">Library</button>
              </div>
          </div>
        </div>
        <div class="col-xs-8">
          <div class="box box-solid" id="table2">
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                        <button type="button" class="btn bg-green" id="add" onclick="add()"><i class="fa fa-plus-circle"></i></button>
                        <button type="button" class="btn bg-blue" id="edit" onclick="edit2()"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn bg-red" id="del"><i class="fa fa-trash-o"></i></button>
                      </td>
                  </tr>
              </tbody>
              </table>
            </div>
          </div>
          <div class="box box-success" id="form2" style="display:none;">
            <div class="box-header">
              <h4 class="box-title">Add Stock</h4>
            </div>
            <div class="box-body">
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
                  <label for="field-1" class="col-sm-2 control-label">Category</label>
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
              </div><hr>
              <div class="row">
                <div class="form-group">
                  <label for="field-1" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control input-sm" name="itr_id" data-validate="required" data-message-required="Value Required" value="" autofocus="">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="button" class="btn btn-sm bg-gray" onclick="cancel2()">Cancel</button>
              </div>
            </form>
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
