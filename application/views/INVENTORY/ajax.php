<script>
var stocksUrl = '<?=site_url()?>/INVENTORY/ajax/view_stocks';
var itemsUrl = '<?=site_url()?>/INVENTORY/ajax/view_products';
var transactsUrl = '<?=site_url()?>/INVENTORY/ajax/view_transacts';
var addUrl = <?php $this->uri->segment(3); ?>

$(document).ready(function() {

  $(".submit").on('click', function (e) {
    e.preventDefault();
    var category = $("input#category").val();

    $.ajax({
      type: "POST",
      url: '<?=site_url()?>/INVENTORY/ajax/add_' + addUrl[1],
      data: {category: category},
      success: function(data) {
        $("#myModal").modal('hide');
        alert("successfully saved!");
        location.reload();
          // $('.sel_category').append("<option>" + data.category + "</option>");
      }
    });

  });

    $('#items_tbl').DataTable(
      {
        "ajax": itemsUrl,
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
        "ajax": transactsUrl,
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
        "ajax": stocksUrl,
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

    $(document).on('click', '#myBtn', function(){
      $("#myModal").modal();
    });

    $('#myModal').on('hidden.bs.modal', function () {
      $(this).find('input,textarea,select').val('');
    });

    $('.sel_category').select2();

} );

function add(){
  $('#table2').hide();
  $('#form2').show();
}

function edit(){
  $('#table').removeClass('col-xs-12');
  $('#table').addClass('col-xs-8');
  $('#form').show();
}


function cancel(){
  $('#table').removeClass('col-xs-8');
  $('#table').addClass('col-xs-12');
  $('#form').hide();
}


</script>
