<?php include 'layout_header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patients Record  
        <small>View students information</small>
      </h1>
      
      <ol class="breadcrumb">
        <li>GHawTech&trade;</a></li>
        <li><a><i class="fa fa-plus-square"></i>MEDICAL</a></li>
        <li><a>Patients Record</a></li>
        <li><a>Students</a></li>
      </ol>
    </section>
    <!-- /.content-wrapper -->

    <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Grade <strong>7</strong></a></li>
              <li><a href="#tab_2" data-toggle="tab">Grade <strong>8</strong></a></li>
              <li><a href="#tab_3" data-toggle="tab">Grade <strong>9</strong></a></li>
              <li><a href="#tab_4" data-toggle="tab">Grade <strong>10</strong></a></li>
              <li><a href="#tab_5" data-toggle="tab">Grade <strong>11</strong></a></li>
              <li><a href="#tab_6" data-toggle="tab">Grade <strong>12</strong></a></li>
            </ul>

            <div class="tab-content" style="padding-top: 15px;">
              <div class="tab-pane active" id="tab_1">

                <div class="box">
                  <div class="box-header" style="padding-top: 35px;">

                    <!-- search -->
                    <div class="box-tools" style="padding-top: 2px;">
                      <div class="input-group input-group-sm" style="width: 200px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th>LRN</th>
                        <th>Name</th>
                        <th>Section</th>
                      </tr>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                      </tr>
                      <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                      </tr>
                      <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                      </tr>
                      <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- tab pane -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box">
            <div class="box-header" >
              <h3 class="box-title"><b>Jon Doe</b></h3>
              &nbsp;<small> Section: 9-Einstein</small> 
              <br>
              <small> Age: 12</small>

              <div class="box-tools" style="padding-top: 10px;">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Date</th>
                  <th>Complaint/Ailment</th>
                  <th>Treatment</th>
                  <th>Remarks</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit amet.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit amet.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit amet.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit amet.</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </section>
  </div>
<?php include 'layout_footer.php';?>
