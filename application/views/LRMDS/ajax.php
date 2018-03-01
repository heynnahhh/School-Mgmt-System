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

	});

</script>