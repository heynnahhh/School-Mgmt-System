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
        <li><a><i class="fa fa-dashboard"></i>DASHBOARD</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!!!!</h4>
                  Charts not set yet!
        </div>
      </div>
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>AHS Website</h3>
              <h4>Management</h4>
            </div>
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <a href="<?php echo site_url();?>/APPLICATION/application" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Inventory</h3>
              <h4> Management</h4>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="<?php echo site_url();?>/INVENTORY/home" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>LR</h3>
              <h4> Management</h4>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?php echo site_url();?>/LIBRARY/home" class="small-box-footer">Redirect <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- DONUT CHART -->
      <div class="row">
        <div class="col-md-6">
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
      </div>

      <!-- Custom tabs (Charts with tabs)-->
      <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a href="#monthlyChart" data-toggle="tab">Monthly</a></li>
          <li><a href="#annualChart" data-toggle="tab">Annual</a></li>
          <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
        </ul>
        <div class="tab-content no-padding"  id="monthlyChart">
          <!-- Morris chart - Sales -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>

                <div class="progress-group">
                  <span class="progress-text">Add Products to Cart</span>
                  <span class="progress-number"><b>160</b>/200</span>

                  <div class="progress sm">
                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Complete Purchase</span>
                  <span class="progress-number"><b>310</b>/400</span>

                  <div class="progress sm">
                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="progress-number"><b>480</b>/800</span>

                  <div class="progress sm">
                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Send Inquiries</span>
                  <span class="progress-number"><b>250</b>/500</span>

                  <div class="progress sm">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div> -->
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">$35,210.43</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">$10,390.90</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">$24,813.53</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-xs-6">
                <div class="description-block">
                  <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-footer -->
        </div>
      </div>
      <!-- /.nav-tabs-custom -->

    </section>
  </div>
<?php include 'layout_footer.php';?>
