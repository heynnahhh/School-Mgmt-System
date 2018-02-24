<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-mail-forward"></i>
        Compose Email
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-database"></i></a>INVENTORY</li>
        <li><a>Compose Email</a></li>
      </ol>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="col-lg-12">

        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <input class="form-control" placeholder="To:">
          </div>

          <div class="form-group">
            <input class="form-control" placeholder="Subject:">
          </div>

          <div class="form-group">
            <textarea id="compose-textarea" class="form-control" style="height: 230px"></textarea>
          </div>

          <div class="form-group">
            <div class="btn btn-default btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <input type="file" name="attachment">
            </div>
            <p>Max. 32MB</p>
          </div>

          <div class="form-group">
            <div class="pull-right">
              <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
            </div>
            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php include 'layout_footer.php';?>
