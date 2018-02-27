<script>
var stocksUrl = '<?=site_url()?>/INVENTORY/ajax/view_stocks';
var itemsUrl = '<?=site_url()?>/INVENTORY/ajax/view_products';
var transactsUrl = '<?=site_url()?>/INVENTORY/ajax/view_transacts';
var current_method = '<?php echo $this->uri->segment(3); ?>';

$(document).ready(function() {
  $(document).ajaxStart(function() { Pace.restart(); });

function hide_div(){
  if($('edit_form').hasAttribute('style')){

  }
}

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
    tableParams.columnDefs = [{"width": "100px", "targets": 0},{"width": "500px", "targets": 1},{"width": "300px", "targets": 2},
      {"width": "40px", "targets": 3}];
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


    $('#transacts_tbl tbody').on( 'click','.view', function () {
      var data = $('#transacts_tbl').DataTable().row( $(this).parents('tr') ).data();

        $.ajax({
          type: "POST",
          data: {'receipt_no': data[0]},
          url: '<?=site_url()?>/INVENTORY/ajax/get_transact_details',
          dataType: 'json',
          success: function(data){
              if(data){
                var info = data.data[0];

                $('.full_details').removeAttr('style', 'display:none');

                if( $('.left,.middle,.right').is(':empty') ){

                  $("<label>" + "Receipt #:" + "</label>" + "<p>" + info.receipt_no + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Item Code:" + "</label>" + "<p>" + info.itr_item_code + "</p>").appendTo('.middle');
                  $("<label>" + "Item Name:" + "</label>" + "<p>" + info.item_name + "</p>").appendTo('.right');
                  $("<label>" + "Description:" + "</label>" + "<p>" + info.description + "</p>").appendTo('.left');
                  $("<label>" + "Quantity:" + "</label>" + "<p>" + info.quantity + "</p>").appendTo('.middle');
                  $("<label>" + "Unit Cost:" + "</label>" + "<p>" + info.unit_cost + "</p>").appendTo('.right');
                  $("<label>" + "Total Cost:" + "</label>" + "<p>" + info.total_cost + "</p>").appendTo('.left');
                  $("<label>" + "Received By:" + "</label>" + "<p>" + info.received_by + "</p>").appendTo('.middle');
                  $("<label>" + "Received From:" + "</label>" + "<p>" + info.received_fr + "</p>").appendTo('.right');
                  $("<label>" + "Date Received:" + "</label>" + "<p>" + info.date_received + "</p>").appendTo('.left');
                }
                else {
                  $('.left,.middle,.right').empty();
                  $("<label>" + "Receipt #:" + "</label>" + "<p>" + info.receipt_no + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Item Code:" + "</label>" + "<p>" + info.itr_item_code + "</p>").appendTo('.middle');
                  $("<label>" + "Item Name:" + "</label>" + "<p>" + info.item_name + "</p>").appendTo('.right');
                  $("<label>" + "Description:" + "</label>" + "<p>" + info.description + "</p>").appendTo('.left');
                  $("<label>" + "Quantity:" + "</label>" + "<p>" + info.quantity + "</p>").appendTo('.middle');
                  $("<label>" + "Unit Cost:" + "</label>" + "<p>" + info.unit_cost + "</p>").appendTo('.right');
                  $("<label>" + "Total Cost:" + "</label>" + "<p>" + info.total_cost + "</p>").appendTo('.left');
                  $("<label>" + "Received By:" + "</label>" + "<p>" + info.received_by + "</p>").appendTo('.middle');
                  $("<label>" + "Received From:" + "</label>" + "<p>" + info.received_fr + "</p>").appendTo('.right');
                  $("<label>" + "Date Received:" + "</label>" + "<p>" + info.date_received + "</p>").appendTo('.left');
                }

              }

          }
        });

    } );

    $('#items_tbl tbody').on( 'click','.view', function () {
      var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();

        $.ajax({
          type: "POST",
          data: {'item_code': data[0]},
          url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
          dataType: 'json',
          success: function(data){
              if(data){
                var info = data.data[0];

                $('.full_details').removeAttr('style', 'display:none');

                if( $('.left,.middle,.right').is(':empty') ){

                  $("<label>" + "Item Code:" + "</label>" + "<p>" + info.item_code + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Category:" + "</label>" + "<p>" + info.item_category + "</p>").appendTo('.middle');
                  $("<label>" + "Item Name:" + "</label>" + "<p>" + info.item_name + "</p>").appendTo('.right');
                  $("<label>" + "Description:" + "</label>" + "<p>" + info.item_desc + "</p>").appendTo('.left')
                  $("<label>" + "Unit Cost:" + "</label>" + "<p>" + info.unit_cost + "</p>").appendTo('.middle');
                }
                else {
                  $('.left,.middle,.right').empty();
                  $("<label>" + "Item Code:" + "</label>" + "<p>" + info.item_code + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Category:" + "</label>" + "<p>" + info.item_category + "</p>").appendTo('.middle');
                  $("<label>" + "Item Name:" + "</label>" + "<p>" + info.item_name + "</p>").appendTo('.right');
                  $("<label>" + "Description:" + "</label>" + "<p>" + info.item_desc + "</p>").appendTo('.left')
                  $("<label>" + "Unit Cost:" + "</label>" + "<p>" + info.unit_cost + "</p>").appendTo('.middle');
                }

              }

          }
        });

    } );

    $('#transacts_tbl tbody').on( 'click', '.edit', function () {
        var data = $('#transacts_tbl').DataTable().row( $(this).parents('tr') ).data();
        $('#table').removeClass('col-xs-12');
        $('#table').addClass('col-xs-7');
        $('#form').show();

        $('.full_details').attr('style', 'display:none');


        console.log(data[0]);

        $.ajax({
          type: "POST",
          data: {'receipt_no': data[0]},
          url: '<?=site_url()?>/INVENTORY/ajax/get_transact_details',
          dataType: 'json',
          success: function(data){
              if(data){

                var info = data.data[0];

                $('#ed_receipt_no').val(info.receipt_no);
                $('#ed_quantity').val(info.quantity);
                $('#ed_description').val(info.description);
                $('#ed_received_by').val(info.received_by);
                $('#ed_received_fr').val(info.received_fr);
                $('#ed_date_received').val(info.date_received);
                $('#ed_item_code').val(info.itr_item_code + " - " + info.item_name).trigger('change');
              }
          }
        });

    } );

    $('#items_tbl tbody').on( 'click', '.edit', function () {
      var data = $('#items_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          $.ajax({
            type: "POST",
            data: {'item_code': data[0]},
            url: '<?=site_url()?>/INVENTORY/ajax/get_item_info',
            dataType: 'json',
            success: function(data){
                if(data){
                  var info = data.data[0];

                  $('#ed_item_code').val(info.item_code);
                  $('#ed_item_category').val(info.item_category);
                  $('#ed_item_desc').val(info.item_desc);
                  $('#ed_item_name').val(info.item_name);
                  $('#ed_unit_cost').val(info.unit_cost);
                }
            }
          });

    } );

    $('#stock_tbl tbody').on( 'click', '.edit', function () {
      var data = $('#stock_tbl').DataTable().row( $(this).parents('tr') ).data();
      alert(data[0]);
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

          $.ajax({
            type: "POST",
            data: {'stock_no': data[0]},
            url: '<?=site_url()?>/INVENTORY/ajax/get_stock_details',
            dataType: 'json',
            success: function(data){
                if(data){
                  var info = data.data[0];

                  $('#item_name').val(info.item_name);
                  $('#category').val(info.item_category);
                  $('#quantity').val(info.quantity);

                }
            }
          });

    } );

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

$('#ed_item_code').on('change', function(){

    $.ajax({
      type: "POST",
      data: {'item_code':  $('#ed_item_code').val()},
      url: '<?=site_url()?>/INVENTORY/ajax/get_item_details',
      success: function(data){
          if(data){
            $json = JSON.parse(data);

              $.each($json,function(key,value){
                $('#ed_unit_cost').val(value);
                var t_cost = value * $('#ed_quantity').val();
                $('#ed_total_cost').val(t_cost);

              });
          }
          else if(data == null){
              $('#ed_unit_cost').val(null);
              $('#ed_total_cost').val(null);
              $('#ed_unit_cost').val(null);

          }
      }
    });

});

$('#quantity').on('keyup', function(){
  var total_cost = $('#unit_cost').val() * $('#quantity').val();
  $('#total_cost').val(total_cost);
});

$('#ed_quantity').on('keyup', function(){
  var total_cost = $('#ed_unit_cost').val() * $('#ed_quantity').val();
  $('#ed_total_cost').val(total_cost);
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

$(".update").on('click', function (e) {
  e.preventDefault();
  // var category = $("input#category").val();
  var edit_items = {
      item_code: $("input#ed_item_code").val(),
      item_category: $("select#ed_item_category").val(),
      item_name: $("input#ed_item_name").val(),
      item_desc: $("textarea#ed_item_desc").val(),
      unit_cost: $("input#ed_unit_cost").val()
  };

  var edit_transacts = {
    receipt_no: $("input#ed_receipt_no").val(),
    item_code: $("select#ed_item_code").val(),
    quantity: $("input#ed_quantity").val(),
    unit_cost: $("input#ed_unit_cost").val(),
    total_cost: $("input#ed_total_cost").val(),
    description: $("textarea#ed_description").val(),
    received_by: $("input#ed_received_by").val(),
    received_fr: $("input#ed_received_fr").val(),
    date_received: $("input#ed_date_received").val()
  };

  var params = {
    type: "POST",
    url: '<?=site_url()?>/INVENTORY/ajax/edit',
    success: function(data) {
      alert("Successfully Updated!");
      // console.log(data);
      // location.reload();
      $('#transacts_tbl').DataTable().ajax.reload();
      $('#items_tbl').DataTable().ajax.reload();
      cancel();
    }
  };

  if(current_method == 'inventory_items'){
    params.data = {'items':edit_items, 'edit':'inventory_items'};
  }

  else if(current_method == 'transactions'){
    params.data = {'transacts':edit_transacts, 'edit':'transactions'};
  }

  $.ajax(params);

});


$('.date_received').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })

function add(){
  $('#table2').hide();
  $('#form2').show();
}

function cancel(){
  $('#table').removeClass('col-xs-7');
  $('#table').addClass('col-xs-12');
  $('#form').hide();
}

//STOCK REGISTER
var dQuantity;
$('#stock_tbl tbody').on( 'click', '.btn-dist', function (){
  var data = $('#stock_tbl').DataTable().row( $(this).parents('tr') ).data()
  $('#d-name').val(data[1])
  dQuantity = data[3]
  $('#d-name').prop('disabled', true)
})

$('.add_clone').on('click', function(){
  $('#department').clone().appendTo('.append').attr('clone-dept')
  $('.del_clone').on('click', function(){
    if($('.del_clone').length == 1){
      return
    }
    $(this).closest('.department').remove()

  });
  $('.del_clone').show()
});


$('#btn-dsave').on('click', function(){

  var q = 0
  $('.i-quantity').each(function(){
      q = q + parseInt($(this).val()) 
  })

  if(q > dQuantity){
    alert('NOT ENOUGH QUANTITY')
    return 
  }

  $('.s-dept').each(function(){
      var d = $(this).val()
      var qu = $(this).closest('.department').find('.i-quantity').val()
      console.log($(this).val())
      console.log($(this).closest('.department').find('.i-quantity').val())

      //ADD TO DB
  })

})




</script>
