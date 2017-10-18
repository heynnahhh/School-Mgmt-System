<?php include 'layout_head.php';?>
<?php include 'layout_header.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pages | Home
    </h1>
    <ol class="breadcrumb">
      <li>MAIN NAVIGATION</li>
      <li><a href="<?php echo site_url();?>/LRMDS/home"><i class="fa fa-book"></i>WEBSITE</a></li>
      <li>Pages</li>
      <li class="active">Home</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!!!!</h4>
                No content yet! <b> Edit button on hover for carousel >> </b>
                <button type="button"class="btn btn-success" data-toggle="modal" data-target="#add_item">Edit <span class="glyphicon glyphicon-edit"></span></button>
      </div>
    </div>

    <!-- Main row -->
    <div class="row">
      <div class="row">
        <h3>Preview</h3>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="<?php echo base_url();?>includes/dist/img/photo1.png" alt="Chania">
                    <div class="carousel-caption">
                      <h3>Chania</h3>
                      <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url();?>includes/dist/img/photo2.png" alt="Chania">
                    <div class="carousel-caption">
                      <h3>Chania</h3>
                      <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url();?>includes/dist/img/photo3.jpg" alt="Flower">
                    <div class="carousel-caption">
                      <h3>Flowers</h3>
                      <p>Beatiful flowers in Kolymbari, Crete.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url();?>includes/dist/img/photo4.jpg" alt="Flower">
                    <div class="carousel-caption">
                      <h3>Flowers</h3>
                      <p>Beatiful flowers in Kolymbari, Crete.</p>
                    </div>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
      </div>


      <!-- Left col -->
      <!-- <div class = "box">
        <form action="<?php echo site_url('website/Upload/upload_news')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <div class="col-md-4">

            <div class="form-group">
                <label class="control-label" for="book_title">Change banner content</label>
                <input type="hidden" id="fn">
                <input type="file"  name="userfile" size="20" required>
            </div>
            <div class="form-group">
                <input type="submit"  value="Submit"  class="form-control" id="submit" />
            </div>

          </div>
        </form>

      </div> -->
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">

      </section>
      <!-- right col -->
      <div class="modal fade" id="add_item" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Create Item Modal Content -->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> <b>Edit banner content<b></h4>
            </div>

            <div class="modal-body">
              <form class="well form-horizontal">
                <fieldset>
                  <!-- Text input-->
                  <form action="<?php echo site_url('website/Upload/upload_news')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="col-md-12">
                      <div class="form-group">
                          <img src="" style="width:830px; height:280px;">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label class="control-label" for="book_title">Choose photo:</label>
                          <input type="hidden" id="fn">
                          <input type="file"  name="userfile" size="20" required>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                        </div>
                        <!-- /.input group -->
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                          <label class="control-label" for="book_title">Caption/Link:</label>
                          <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="submit"  value="Save Changes"  class="form-control" id="submit" />
                      </div>
                    </div>
                  </form>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Modal -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'layout_footer.php';?>
