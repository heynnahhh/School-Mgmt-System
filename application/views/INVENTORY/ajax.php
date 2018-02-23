<script>
var stocksUrl = '<?=site_url()?>/INVENTORY/ajax/view_stocks';
var itemsUrl = '<?=site_url()?>/INVENTORY/ajax/view_products';
var transactsUrl = '<?=site_url()?>/INVENTORY/ajax/view_transacts';
var addUrl = '<?php echo $this->uri->segment(3); ?>';

$(document).ready(function() {

  $(".submit").on('click', function (e) {
    e.preventDefault();
    var category = $("input#category").val();
    var items = {
        item_code: $("input#item_code").val(),
        item_category: $("select#item_category").val(),
        item_name: $("input#item_name").val(),
        item_desc: $("textarea#item_desc").val(),
        unit_cost: $("input#unit_cost").val()
    };
    var transacts = {
      receipt_no: $("input#receipt_no").val(),
      item_code: $("select#item_code").val(),
      quantity: $("input#quantity").val(),
      unit_cost: $("input#unit_cost").val(),
      total_cost: $("input#total_cost").val(),
      description: $("textarea#description").val(),
      received_by: $("input#received_by").val(),
      received_fr: $("input#received_fr").val()
    };

    var params = {
      type: "POST",
      url: '<?=site_url()?>/INVENTORY/ajax/add',
      success: function(data) {
        $("#myModal").modal('hide');
        alert("successfully saved!");
        // console.log(data);
        location.reload();
      }
    };

    if(addUrl == 'inventory_items'){
      params.data = {'category': category, 'items':items, 'add':'inventory_items'};
    }

    else if(addUrl == 'transactions'){
      params.data = {'transacts':transacts, 'add':'transactions'};
    }

    $.ajax(params);

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

$('#date_received').datepicker({
    autoclose: true,
    dateFormat: "mm-dd-yy"
})

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
