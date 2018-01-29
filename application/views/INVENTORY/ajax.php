<script>

  $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>" + "index.php/ajax_controller/user_data_submit",
    dataType: 'json',
    data: {name: user_name, pwd: password}

  });

</script>
