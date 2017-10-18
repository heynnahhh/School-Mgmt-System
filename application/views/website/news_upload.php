<?php include 'layout_head.php';?>
<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
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
                  No content yet! <b> Sample upload for headline news</b>
        </div>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <div class = "row">
            <form action="<?php echo site_url('website/Upload/upload_news')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label" for="book_title">Choose file to upload</label>
                    <input type="hidden" id="fn">
                    <input type="file"  name="userfile" size="20" required>
                </div>
                <div class="form-group">
                    <input type="submit"  value="Submit"  class="form-control" id="submit" />
                </div>
              </div>
            </form>

          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'layout_footer.php';?>
