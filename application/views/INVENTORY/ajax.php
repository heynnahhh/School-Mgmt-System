<script>
$(document).ready(function() {

    $('.sel_category').select2();

    $('#items_tbl').DataTable(
      {
        "ajax": '<?=site_url()?>/INVENTORY/ajax/view_products',
      	"paging": true,
      	"autoWidth": false,
        "columnDefs":[
          {"width": "300px", "targets": 1},
          {"width": "100px", "targets": 2}
        ],
        "tableTools": {
           "aButtons": [ "copy", "print", {
                 "sExtends": "collection",
                   "sButtonText": "Save",
                    "aButtons": [ "csv", "xls", "pdf" ]
                  }
                ]
              }
		  } );

    $('#transacts_tbl').DataTable(
      {
        "ajax": '<?=site_url()?>/INVENTORY/ajax/view_transacts',
      	"paging": true,
      	"autoWidth": false,
        "columnDefs":[
          {"width": "150px", "targets": 0},
          {"width": "400px", "targets": 1}
        ],
        "tableTools": {
           "aButtons": [ "copy", "print", {
                 "sExtends": "collection",
                   "sButtonText": "Save",
                    "aButtons": [ "csv", "xls", "pdf" ]
                  }
                ]
              }
		  } );

    $('#stock_tbl').DataTable(
      {
        "ajax": '<?=site_url()?>/INVENTORY/ajax/view_stocks',
      	"paging": true,
      	"autoWidth": false,
        "columnDefs":[
          {"width": "150px", "targets": 0},
          {"width": "400px", "targets": 1}
        ],
        "tableTools": {
           "aButtons": [ "copy", "print", {
                 "sExtends": "collection",
                   "sButtonText": "Save",
                    "aButtons": [ "csv", "xls", "pdf" ]
                  }
                ]
              }
		  } );

    $('#example').DataTable(
      {
        "paging": true,
        "autoWidth": true,
        "tableTools": {
           "aButtons": [ "copy", "print", {
                 "sExtends": "collection",
                   "sButtonText": "Save",
                    "aButtons": [ "csv", "xls", "pdf" ]
                  }
                ]
              }
      } );

    $('#example1').DataTable(
      {
      	"paging": true,
      	"autoWidth": true,
      	"buttons": [
      		'colvis',
      		'copyHtml5',
          'csvHtml5',
      		'excelHtml5',
          'pdfHtml5',
      		'print'
      	]
		  }
    );

    $("#myBtn").click(function(){
        $("#myModal").modal();
    });

} );

function showDepartments(){
  $('#departments_stock').show();
  $('#all_stock').hide();
}

function showAll(){
  $('#departments_stock').hide();
  $('#all_stock').show();
  cancel2();
}

function add(){
  $('#table2').hide();
  $('#form2').show();
}

function edit(){
  $('#table').removeClass('col-xs-12');
  $('#table').addClass('col-xs-8');
  $('#form').show();
}

function edit2(){
  $('#table2').hide();
  $('#form2').show();
}


function cancel(){
  $('#table').removeClass('col-xs-8');
  $('#table').addClass('col-xs-12');
  $('#form').hide();
}

function cancel2(){
  $('#table2').show();
  $('#form2').hide();
}




</script>
