<?php include 'layout_head.php';?>
<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Academic Calendar
      </h1>
      <ol class="breadcrumb">
        <li>MAIN NAVIGATION</li>
        <li><a href="<?php echo site_url();?>/LRMDS/home"><i class="fa fa-book"></i>WEBSITE</a></li>
        <li>Manage Content</li>
        <li>Pages</li>
        <li class="active">Academic Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header bg-light-blue-active" style="color: white;">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
           </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- Main row -->

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="col-md-12">

                <div class="form-group">
                  <div class="row">

                    <div class="col-xs-6">
                      <label>DATE:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="cal_date">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="col-xs-6">
                      <div class="bootstrap-timepicker">
                        <label>TIME:</label>

                        <div class="input-group">
                          <input type="text" id="cal_time" class="form-control timepicker" style="color: black;">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.bootstrap-timepicker -->
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12">
                      <label>EVENT/ACTIVITY:</label>
                      <textarea class="form-control" rows="6" style="width: 100%;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-left"  data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'layout_footer.php';?>
