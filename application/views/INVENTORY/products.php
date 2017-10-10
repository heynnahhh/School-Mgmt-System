<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Stocks
      </h1>
      <ol class="breadcrumb">
        <li>GHawTech&trade;</li>
        <li><a href="<?php echo site_url();?>/INVENTORY/home"><i class="fa fa-database"></i>INVENTORY</a></li>
        <li>Manage Records</li>
        <li class="active">Product List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
          <div class="col-xs-12">
            <div class="box box-maroon">
              <div class="box-header">
                <h2 class="box-title">Product List</h2> &nbsp;
                <button class='centerMe' type="button" data-toggle="modal" data-target="#product_info">
                <div class='icon'>
                  <i class='fa fa-plus'></i>
                </div>
                <div class='text'>
                  <span>Add Item</span>
                </div>
              </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>PRODUCT CODE</th>
                    <th>PRODUCT NAME</th>
                    <th>DESCRIPTION</th>
                    <th>STATUS</th>
                    <th>AMOUNT</th>
                    <th>ACTIONS</th>
                  </tr>
                  </thead>
                    <tbody>
                      <?php foreach($products as $data){?>
                      <tr>
                        <td><?php echo $data->product_code;?></td>
                        <td><?php echo $data->product_name;?></td>
                        <td><?php echo $data->product_desc;?></td>
                        <td>
                          <?php if($data->product_status == 'Active'):?>
                            <span class="label label-success"><?php echo $data->product_status;?></span></td>
                          <?php else:?>
                            <span class="label label-danger"><?php echo $data->product_status;?></span></td>
                          <?php endif;?>
                        <td><?php echo $data->product_amount;?></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#product_info" value="<?php echo $data->ipr_id;?>"><i class="fa fa-eye"></i> View full details</button>
                        </td>
                      </tr>
                      <!-- Create Item Modal -->
                      <div class="modal fade" id="product_info" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <!-- Create Item Modal Content -->
                          <div class="modal-content">

                            <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                              <div class="cd-form">
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                                <!-- change action to edit controller -->
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                                <form action="<?php echo site_url('INVENTORY/home/add_product');?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                  <fieldset>
                                    <legend>Product Info</legend>

                                    <div class="col-md-3">
                                      <label for="userName">Product Code</label>
                                      <input type="text" id="input_info" name="product_code" placeholder="#12345">
                                    </div>
                                    <div class="col-md-5">
                                      <label for="userEmail">Item Name</label>
                                      <input type="text" id="input_info" name="product_name" placeholder="">
                                    </div>
<!--                                     <div class="col-md-3" id="view_edit">
                                      <label for="userName">Product Status</label>
                                      <?php if($data->products_status == 'Active'):?>
                                        <span id="view" class="label label-success">$data->products_status</span>
                                      <?php elseif($data->products_status == 'Inactive'):?>
                                        <span id="view" class="label label-danger">$data->products_status</span>
                                      <?php endif;?>
                                      <span class="cd-select" id="edit">
                                        <select name="product_status" required="">
                                          <option>-- please select --</option>
                                          <option>Active</option>
                                          <option>Inactive</option>
                                        </select>
                                      </span>
                                    </div> -->
                                  </fieldset>
                                  <fieldset>
                                    <div class="col-md-8">
                                      <label for="userEmail">Product Description</label>
                                      <textarea class="textarea" id="input_info" name="product_desc" placeholder=""></textarea>
                                    </div>

                                  </fieldset>
                                  <fieldset>
                                    <div class="col-md-3">
                                      <label for="userEmail">Amount</label>
                                      <input type="text" maxlength="10" id="input_info" name="product_amount" placeholder="">
                                    </div>
                                    <div class="col-md-3">
                                     <!--  <label for="userEmail">Category</label>
                                      <span class="cd-select" id="add_edit"> -->
                                      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                                      <!--       create category table      -->
                                      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<!--                                         <select name="product_category" required="">
                                        <?php foreach($var as $var):?>
                                          <option><?php echo $var->var;?></option>
                                        <?php endforeach;?>
                                        </select>
                                      </span>
                                      </div> -->

                                  </fieldset>

                                  <fieldset>
                                    <div>
                                      <button type="button" id="view_edit" class="btn btn-sm btn-success" value="<?php echo $data->ipr_id;?>"><i class="fa fa-edit"></i> Edit details</button>
                                      <input type="submit" name="submit" id="add_edit" value="Save">
                                    </div>
                                  </fieldset>
                                </form>
                              </div> <!-- .cd-form -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Modal -->
                    <?php }?>
                    </tbody>
                  <tfoot>
                  <tr>
                    <th>PRODUCT CODE</th>
                    <th>PRODUCT NAME</th>
                    <th>DESCRIPTION</th>
                    <th>STATUS</th>
                    <th>AMOUNT</th>
                    <th>ACTIONS</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

      <!-- /.box -->
          </div>
    <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

<?php include 'layout_footer.php';?>
