<script>
var current_method = '<?php echo $this->uri->segment(3);?>';
	$(document).ready(function(){
	  var tableParams = {
	        "paging": true,
	        "autoWidth": false,
	        "tableTools": {
	           "aButtons": [ "copy", "print", {
	                 "sExtends": "collection",
	                   "sButtonText": "Save",
	                    "aButtons": [ "csv", "xls", "pdf" ]
	                  }
	                ]
	              }

	  };

	  if(current_method == 'strands'){
	  	tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/view_strand';
	    $('#strand_tbl').DataTable(tableParams);

	  }

	  else if(current_method == 'topics'){
	  	tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/view_topic';
	  	tableParams.columnDefs = [{"width": "600px", "targets": 0},{"width": "200px", "targets": 1}];
	    $('#topic_tbl').DataTable(tableParams);

	  }

	   else if(current_method == 'jhs'){
	  	tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/view_jhs';
	  	tableParams.columnDefs = [{"width": "600px", "targets": 0},{"width": "200px", "targets": 1}];
	    $('#jhs_tbl').DataTable(tableParams);

	  }

	   else if(current_method == 'shs'){
	  	tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/view_shs';
	  	tableParams.columnDefs = [{"width": "450px", "targets": 0},{"width": "150px", "targets": 1},{"width": "120px", "targets": 2},{"width": "200px", "targets": 3}];
	    $('#shs_tbl').DataTable(tableParams);

    }

     else if(current_method == 'users_account'){
      //tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/users_account';
      tableParams.columnDefs = [{"width": "200px", "targets": 0},{"width": "280px", "targets": 1},{"width": "180px", "targets": 2},{"width": "180px", "targets": 3},{"width": "100px", "targets": 4}];
      $('#users_account_tbl').DataTable(tableParams);

	  }


	$(document).on('click', '#myBtn', function(){
      $("#myModal").modal();
    });




    $('#topic_tbl tbody').on( 'click', '.edit', function () {
      // var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          // $.ajax({
          //   type: "POST",
          //   data: {'item_code': data[0]},
          //   url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
          //   dataType: 'json',
          //   success: function(data){
          //       if(data){
          //         var info = data.data[0];

          //         $('#ed_item_code').val(info.item_code);
          //         $('#ed_item_category').val(info.item_category);
          //         $('#ed_item_desc').val(info.item_desc);
          //         $('#ed_item_name').val(info.item_name);
          //         $('#ed_unit_cost').val(info.unit_cost);
          //       }
          //   }
          // });

    } );

    $('#jhs_tbl tbody').on( 'click', '.edit', function () {
      // var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          // $.ajax({
          //   type: "POST",
          //   data: {'item_code': data[0]},
          //   url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
          //   dataType: 'json',
          //   success: function(data){
          //       if(data){
          //         var info = data.data[0];

          //         $('#ed_item_code').val(info.item_code);
          //         $('#ed_item_category').val(info.item_category);
          //         $('#ed_item_desc').val(info.item_desc);
          //         $('#ed_item_name').val(info.item_name);
          //         $('#ed_unit_cost').val(info.unit_cost);
          //       }
          //   }
          // });

    } );

    $('#shs_tbl tbody').on( 'click', '.edit', function () {
      // var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          // $.ajax({
          //   type: "POST",
          //   data: {'item_code': data[0]},
          //   url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
          //   dataType: 'json',
          //   success: function(data){
          //       if(data){
          //         var info = data.data[0];

          //         $('#ed_item_code').val(info.item_code);
          //         $('#ed_item_category').val(info.item_category);
          //         $('#ed_item_desc').val(info.item_desc);
          //         $('#ed_item_name').val(info.item_name);
          //         $('#ed_unit_cost').val(info.unit_cost);
          //       }
          //   }
          // });

    } );


    $('#strand_tbl tbody').on( 'click', '.edit', function () {
      // var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          // $.ajax({
          //   type: "POST",
          //   data: {'item_code': data[0]},
          //   url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
          //   dataType: 'json',
          //   success: function(data){
          //       if(data){
          //         var info = data.data[0];

          //         $('#ed_item_code').val(info.item_code);
          //         $('#ed_item_category').val(info.item_category);
          //         $('#ed_item_desc').val(info.item_desc);
          //         $('#ed_item_name').val(info.item_name);
          //         $('#ed_unit_cost').val(info.unit_cost);
          //       }
          //   }
          // });

    } );

	});

	function cancel(){
	  $('#table').removeClass('col-xs-7');
	  $('#table').addClass('col-xs-12');
	  $('#form').hide();
	}

</script>