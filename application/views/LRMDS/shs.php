<?php include 'layout_header.php';?>
<?php include 'layout_sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subjects
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i>Learning Resource</a></li>
        <li><a>Subjects</a></li>
        <li><a>Senior High School</a></li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

  <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12" id="table">
          <div class="box box-solid">
            <div class="box-header">
              <h4 class="box-title"> Senior High School</h4>
              <div class="btn-group pull-right">
                <button type="button" class="btn bg-maroon" id="myBtn"><i class="fa fa-plus-circle"></i> New Subject</button>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table id="shs_tbl" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Subject Name</th>
                      <th>Grade Level</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody></tbody>
              <tfoot>
                  <tr>
                      <th>Subject Name</th>
                      <th>Grade Level</th>
                      <th>Actions</th>
                  </tr>
              </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
<?php include 'layout_footer.php';?>
