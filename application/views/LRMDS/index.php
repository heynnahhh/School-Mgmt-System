<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Learning Resource
        <small>(Dashboard)</small>
      </h1>
      <ol class="breadcrumb">
        <li>GHawTech&trade;</li>
        <li><a href="<?php echo site_url();?>/LRMDS/home"><i class="fa fa-book"></i>Learning Resource</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>TOTAL BOOKS</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="<?php echo site_url();?>/LIBRARY/home/books_list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</sup></h3>
              <p>BORROWED BOOKS</p>
            </div>
            <div class="icon">
              <i class="ion ion-log-out"></i>
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="<?php echo site_url();?>/LIBRARY/home/borrowed_books" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>
              <p>RETURNED BOOKS</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
              <i class="ion ion-log-in"></i>
            </div>
            <a href="<?php echo site_url();?>/LIBRARY/home/returned_books" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

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
