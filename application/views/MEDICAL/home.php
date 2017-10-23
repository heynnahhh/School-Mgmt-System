<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li>GHawTech&trade;</a></li>
        <li><a><i class="fa fa-plus-square"></i>MEDICAL</a></li>
        <li><a>Dashboard</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>1,500</h3>
              <p> Student</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>200</h3>
              <p> Teacher</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="#" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>100</h3>
              <p> Visitor</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
            <a href="#" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>700</h3>
              <p> Medical Supplies</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="<?php echo site_url();?>/LIBRARY/home" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Patients Consulted for this Year </h3>

              <div class="box-tools pull-right">

                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>

                <button type="button" class="btn btn-box-tool" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
              <div class="chart">
                <canvas id="barChart1" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->

      </div>
    </section>
  </div>
<?php include 'layout_footer.php';?>
