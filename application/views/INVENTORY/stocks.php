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
        <li class="active">Stocks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!!!!</h4>
                  No content yet!
        </div>
      </div>


      <!-- Main row -->
      <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h2 class="box-title">Stocks</h2> &nbsp;
                <button class='centerMe' type="button" data-toggle="modal" data-target="#add_item">
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
                    <th>QUANTITY LEFT</th>
                    <th>AS OF</th>
                    <th>ACTIONS</th>
                  </tr>
                  </thead>
                    <tbody>
                      <?php foreach($stocks as $data){?>
                      <tr>
                        <td><?php echo $data->ist_product_code;?></td>
                        <td><?php echo $data->product_name;?></td>
                        <td><?php echo $data->product_qty_left;?></td>
                        <td><?php echo $data->as_of_date;?></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#<?php echo $data->ist_id;?>" value="<?php echo $data->ist_id;?>"><i class="fa fa-eye"></i> View full details</button>
                        </td>
                      </tr>

                        <!-- <div class="modal fade" id="<?php echo $book->book_id;?>" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Book Info</h4>
                              </div>
                              <div class="modal-body"><center />
                                <div class="book-info">
                                  <img src="<?php echo base_url();?>/uploads/books/<?php echo $book->imageName;?>" width="200px" height="250px">
                                    <p><b>ISBN: </b><?php echo $book->book_isbn;?></p>
                                    <p><b>Name: </b><?php echo $book->book_title;?></p>
                                    <p><b>Email: </b><?php echo $book->book_authors;?></p>
                                    <p><b>Category: </b><?php echo $book->book_categories;?></p>
                                    <p><b>Date Added: </b><?php echo $book->book_dateadded;?></p>
                                    <p><b>Quantity: </b><?php echo $book->book_totalquantity;?></p>
                                    <p><b>Publisher: </b><?php echo $book->book_publisher;?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                    <?php }?>
                    </tbody>
                  <tfoot>
                  <tr>
                    <th>PRODUCT CODE</th>
                    <th>PRODUCT NAME</th>
                    <th>QUANTITY LEFT</th>
                    <th>AS OF</th>
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
    <!-- Create Item Modal -->
    <div class="modal fade" id="add_item" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Create Item Modal Content -->
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="cd-form">
              <form action="<?php echo site_url('INVENTORY/home/add_stocks');?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                <fieldset>
                  <legend>Add Entry</legend>
                  <div class="col-md-3">
                    <label>Product Code</label>
                    <span class="cd-select">
                      <select name="ist_product_code" required="">
                        <option>-- please select --</option>
                        <?php foreach ($products as $option): ?>
                          <option><?php echo $option->product_code;?></option>
                        <?php endforeach; ?>
                      </select>
                    </span>
                  </div>
                </fieldset>

                <fieldset>
                  <div class="col-md-5">
                    <label for="userEmail">Product Name</label>
                    <input type="text" name="product_name" placeholder="should be disabled and auto-change after code selected">
                  </div>
                </fieldset>

                <fieldset>
                  <div class="col-md-3">
                    <label for="userEmail">Quantity</label>
                    <input type="text" maxlength="10" name="product_qty" placeholder="should be input number">
                  </div>
                </fieldset>

                <fieldset>
                  <div>
                    <input type="submit" name="submit">
                  </div>
                </fieldset>
              </form>
            </div> <!-- .cd-form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'layout_footer.php';?>
