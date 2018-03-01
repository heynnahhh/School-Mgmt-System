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
	  	tableParams.columnDefs = [{"width": "600px", "targets": 0},{"width": "200px", "targets": 1}];
	    $('#shs_tbl').DataTable(tableParams);

	  }

	});

</script>