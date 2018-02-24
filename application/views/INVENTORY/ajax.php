<script>
var stocksUrl = '<?=site_url()?>/INVENTORY/ajax/view_stocks';
var itemsUrl = '<?=site_url()?>/INVENTORY/ajax/view_products';
var transactsUrl = '<?=site_url()?>/INVENTORY/ajax/view_transacts';
var current_method = '<?php echo $this->uri->segment(3); ?>';

$(document).ready(function() {

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

  if (current_method == 'inventory_items'){
    tableParams.ajax = itemsUrl;
    tableParams.columnDefs = [{"width": "300px", "targets": 1},{"width": "100px", "targets": 2}];
    $('#items_tbl').DataTable(tableParams);
  }
  else if(current_method == 'transactions'){
    tableParams.ajax = transactsUrl;
    tableParams.columnDefs = [{"width": "150px", "targets": 0},{"width": "400px", "targets": 1}];
    $('#transacts_tbl').DataTable(tableParams);

  }
  else if(current_method == 'stock_register'){
    tableParams.ajax = stocksUrl;
    tableParams.columnDefs = [{"width": "150px", "targets": 0},{"width": "400px", "targets": 1}];
    $('#stock_tbl').DataTable(tableParams);

  }

    $(document).on('click', '#myBtn', function(){
      $("#myModal").modal();
    });

    $('#myModal').on('hidden.bs.modal', function () {
      $(this).find('input,textarea,select').val('');
    });

    $('.sel_category').select2();

} );

$('#item_code').on('change', function(){

    $.ajax({
      type: "POST",
      data: {'item_code':  $('#item_code').val()},
      url: '<?=site_url()?>/INVENTORY/ajax/get_item_details',
      success: function(data){
          if(data){
            $json = JSON.parse(data);

              $.each($json,function(key,value){
                $('#unit_cost').val(value);
                var t_cost = value * $('#quantity').val();
                $('#total_cost').val(t_cost);

              });
          }
          else if(data == null){
              $('#unit_cost').val('');
              $('#total_cost').val(null);
              $('#unit_cost').val(null);

          }
      }
    });

});

$('#quantity').on('keyup', function(){
  var total_cost = $('#unit_cost').val() * $('#quantity').val();
  $('#total_cost').val(total_cost);
});

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
    received_fr: $("input#received_fr").val(),
    date_received: $("input#date_received").val()

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

  if(current_method == 'inventory_items'){
    params.data = {'category': category, 'items':items, 'add':'inventory_items'};
  }

  else if(current_method == 'transactions'){
    params.data = {'transacts':transacts, 'add':'transactions'};
  }

  $.ajax(params);

});

$('#date_received').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
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
