<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-plus-square"></i>
        Patient Records (Medical)
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-plus-square"></i></a>MEDICAL</li>
        <li><a>Patients Record</a></li>
        <li><a>Students</a></li>
      </ol>
    </section>
    <!-- /.content-wrapper -->
        <div class="row">
          <div class="col-md-12">
            <div class="col-sm-6">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Grade 7</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Grade 8</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Grade 9</a></li>
                  <li><a href="#tab_4" data-toggle="tab">Grade 10</a></li>
                  <li><a href="#tab_5" data-toggle="tab">Grade 11</a></li>
                  <li><a href="#tab_6" data-toggle="tab">Grade 12</a></li>
                  <li><a href="#"><i class="fa fa-cog"></i></a>
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <table id="table1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Name:</th>
                          <th>Section:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Hannah Patricia Liao</td>
                          <td>6-Acacia</td>
                        </tr>
                        <tr>
                          <td>Marc Inzon</td>
                          <td>6-Acacia</tr>
                        <tr>
                          <td>Hakeem Polistico</td>
                          <td>6-Narra</td>
                        </tr>
                        <tr>
                          <td>Jasver Anlouise Salva</td>
                          <td>6-Acacia</td>
                        </tr>
                        <tr>
                          <td>Shiela May Morales</td>
                          <td>6-Balete</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-6">
              <div class="box">
                <div class="box-body">
                  <table id="table2" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>Date:</th>
                        <th>Complaint/Ailments:</th>
                        <th>Treatment</th>
                        <th>Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>12/18/17</td>
                        <td>Heart burn</td>
                        <td>Biogesic</td>
                        <td>N.A</td>
                      </tr>
                      <tr>
                        <td>1/18/2018</td>
                        <td>Fungi</td>
                        <td>Lotion</td>
                        <td>N.A</td>
                      </tr>
                      <tr>
                        <td>1/18/2018</td>
                        <td>Fungi</td>
                        <td>Lotion</td>
                        <td>N.A</td>
                      </tr>
                      <tr>
                        <td>1/18/2018</td>
                        <td>Fungi</td>
                        <td>Lotion</td>
                        <td>N.A</td>
                      </tr>
                      <tr>
                        <td>1/18/2018</td>
                        <td>Fungi</td>
                        <td>Lotion</td>
                        <td>N.A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          <!-- row -->
      </div>
  </div>
<?php include 'layout_footer.php';?>