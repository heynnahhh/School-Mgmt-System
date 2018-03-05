<!-- Main Footer -->
<footer class="main-footer">
  <strong>GHawTech&trade; &middot;</strong> School Management System
</footer>

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>includes/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>includes/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>includes/dist/js/app.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>includes/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- dateTime -->
<script src="<?php echo base_url();?>includes/website/js/dateTime.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>includes/plugins/select2/select2.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>includes/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>includes/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url();?>includes/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- PACE -->
<script src="<?php echo base_url();?>includes/plugins/pace/pace.min.js"></script>

<script>
  $(function () {
    $('#emp_records').DataTable()
    $('#stud_records').DataTable()
    $('#emp_list').DataTable()
    $('#stud_list').DataTable()
  })

  $('#stud_date_consult').datepicker({
      autoclose: true
    })
  $('#emp_date_consult').datepicker({
      autoclose: true
    })
  $('#stud_birthdate').datepicker({
      autoclose: true
    })
  $('#emp_birthdate').datepicker({
      autoclose: true
    })

  $('#birthdate').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      })
</script>

<?php include 'ajax.php';?>

</body>
</html>
