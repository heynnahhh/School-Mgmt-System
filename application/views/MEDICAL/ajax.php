<script>

$(document).ready(function() {
  $(document).ajaxStart(function() { Pace.restart(); });
  var emp_recUrl = '<?=site_url()?>/MEDICAL/ajax/view_employee_records';
  var stud_recUrl = '<?=site_url()?>/MEDICAL/ajax/view_student_records';
  var emp_infoUrl = '<?=site_url()?>/MEDICAL/ajax/view_employee_info';
  var stud_infoUrl = '<?=site_url()?>/MEDICAL/ajax/view_student_info';
  var current_module = '<?php echo $this->uri->segment(1);?>';
  var current_method = '<?php echo $this->uri->segment(3);?>';

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

  if (current_method == 'student'){
    tableParams.ajax = stud_infoUrl;
    tableParams.columnDefs = [{"width": "300px", "targets": 1},{"width": "100px", "targets": 2}];
    $('#stud_list').DataTable(tableParams);
  }
  else if(current_method == 'employees'){
    tableParams.ajax = emp_infoUrl;
    tableParams.columnDefs = [{"width": "150px", "targets": 0},{"width": "400px", "targets": 1}];
    $('#emp_list').DataTable(tableParams);

  }

    $('#emp_records').DataTable();
    $('#stud_records').DataTable({
      "ajax": '<?=site_url()?>/MEDICAL/ajax/view_student_records',
      "paging": true,
      "autoWidth": false,
      "columnDefs": [{"width": "150px", "targets": 0},{"width": "400px", "targets": 1}],
      "tableTools": {
         "aButtons": [ "copy", "print", {
               "sExtends": "collection",
                 "sButtonText": "Save",
                  "aButtons": [ "csv", "xls", "pdf" ]
                }
              ]
            }
    });

    $('#myModal').on('hidden.bs.modal', function () {
  		$(this).find('input,textarea,select').val(null);
  	});


// DELETE *********************************

    $('#stud_list tbody').on( 'click', '.delete', function () {
      var data = $('#stud_list').DataTable().row( $(this).parents('tr') ).data();
				$("#delModal").modal();
				onClickDel(data);
    } );

    $('#emp_list tbody').on( 'click', '.delete', function () {
      var data = $('#emp_list').DataTable().row( $(this).parents('tr') ).data();
				$("#delModal").modal();
				onClickDel(data);
    } );

		function onClickDel(data){

			$('#yes').on('click', function(){
				var params = {
					type: "POST",
					url: '<?=site_url()?>/MEDICAL/ajax/delete',
					success: function(data){
						$("#delModal").modal('hide');
						$('#stud_list').DataTable().ajax.reload();
						$('#emp_list').DataTable().ajax.reload();
				  },
					error: function(data){
						$("#delModal").modal('hide');
						alert('DELETE: Restricted!');
					}
				}

				if(current_method == 'student'){
					params.data = {'mdsp_id': data[0], 'delete':'student'};
				}
				if(current_method == 'employees'){
					params.data = {'mdei_id': data[0], 'delete':'employees'};
				}

				$.ajax(params);

			});
		}


    $('#stud_list tbody').on( 'click', '.addConsul', function () {
      var data = $('#stud_list').DataTable().row( $(this).parents('tr') ).data();
      $("#StudentConsultation").modal();
      $('#hid_id').val(data[0]);
      $('#addstud')[0].reset();

          // $.ajax({
          //   type: "POST",
          //   data: {'mdsp_id': data[0]},
          //   url: '<?=site_url()?>/MEDICAL/ajax/get_',
          //   dataType: 'json',
          //   success: function(data){
          //       if(data){
          //         var info = data.data[0];
          //
          //         $('#ed_jhs_subject_id').val(info.lres_id);
          //       }
          //   }
          // });

    } );

    $(".consulSubmit").on('click', function(){
      var studCons = {
        msh_mdsp_id: $('#hid_id').val(),
        date: $('#stud_date_consult').val(),
        complaint: $('#complaint').val(),
        treatment: $('#treatment').val(),
        remarks: $('#remarks').val()
      };

      var paramsdata = {
        type: "POST",
        url: '<?=site_url()?>/MEDICAL/ajax/add_consul',
          success: function(data) {
            $("#StudentConsultation").modal('hide');
            alert("successfully saved!");
            // console.log(data);
            $('#stud_records').DataTable().ajax.reload();
            $('#emp_records').DataTable().ajax.reload();
        }
      };

      	if ( current_method == 'student') {
      		paramsdata.data = {'studCons': studCons, 'add':'student'};
      	}

        $.ajax(paramsdata);

    });

});

// function view(){
//
// }
//
// $('#grade_lvl').on('change', function(){
//
//   	$.ajax({
//   		type: "POST",
//   		data: {'grade_lvl':  $('#grade_lvl').val()},
//   		url: '<?=site_url()?>/MEDICAL/ajax/get_section_option',
//   		success: function(data){
// 	        if(data){
// 		        $json = JSON.parse(data);
// 		        $('#section').empty();
//             $('#section').append('<option></option>');
// 		        $.each($json,function(key,value){
// 		            $('#section').append($('<option></option>').attr("value",key).text(value));
// 		        });
// 	    	}
// 	    	else{
// 	    		$('#section').empty();
// 	    	}
// 	    }
//   	});
//
// });
//
// $('#sgrade_lvl').on('change', function(){
//
//   	$.ajax({
//   		type: "POST",
//   		data: {'grade_lvl':  $('#sgrade_lvl').val()},
//   		url: '<?=site_url()?>/MEDICAL/ajax/get_section_option',
//   		success: function(data){
// 	        if(data){
// 		        $json = JSON.parse(data);
// 		        $('#ssection').empty();
//             $('#ssection').append('<option></option>');
// 		        $.each($json,function(key,value){
// 		            $('#ssection').append($('<option></option>').attr("value",key).text(value));
// 		        });
// 	    	}
// 	    	else{
// 	    		$('#ssection').empty();
// 	    	}
// 	    }
//   	});
//
// });
//
// $('#ssection').on('change', function(){
//
//   	$.ajax({
//   		type: "POST",
//   		data: {'section':  $('#ssection').val()},
//   		url: '<?=site_url()?>/MEDICAL/ajax/get_student_info',
//   		success: function(data){
// 	        if(data){
// 		        $json = JSON.parse(data);
// 		        $('#ssection').empty();
//             $('#ssection').append('<option></option>');
// 		        $.each($json,function(key,value){
// 		            $('#ssection').append($('<option></option>').attr("value",key).text(value));
// 		        });
// 	    	}
// 	    	else{
// 	    		$('#ssection').empty();
// 	    	}
// 	    }
//   	});
//
// });

$(".submit").on('click', function(){
	var addUrl = '<?php echo $this->uri->segment(3); ?>';
	var student_info = {
		last_name: $('input#last_name').val(),
		first_name: $('input#first_name').val(),
		middle_name: $('input#middle_name').val(),
		grade_lvl: $('select#grade_lvl').val(),
		section: $('select#section').val(),
		age: $('input#age').val(),
		birthdate: $('input#birthdate').val(),
		contact_no: $('input#contact_no').val(),
		mother_name: $('input#mother_name').val(),
		mother_contact: $('input#mother_contact').val(),
		father_name: $('input#father_name').val(),
		father_contact: $('input#father_contact').val(),
	};
  var employee_info = {
    last_name: $('input#last_name').val(),
    first_name: $('input#first_name').val(),
    middle_name: $('input#middle_name').val(),
    department: $('select#department').val(),
    age: $('input#age').val(),
    birthdate: $('input#emp_birthdate').val(),
    contact_no: $('input#contact_no').val(),
    contact_person: $('input#contact_person').val(),
    relationship: $('select#relationship').val(),
    address: $('input#address').val(),
    contact_person_no: $('input#contact_person_no').val(),
  };


	var params = {
		type: "POST",
		url: '<?=site_url()?>/MEDICAL/ajax/add',
	    success: function(data) {
        $("#myModal").modal('hide');
        alert("successfully saved!");
        // console.log(data);
        $('#stud_list').DataTable().ajax.reload();
        $('#emp_list').DataTable().ajax.reload();
  	}
	};

	if ( addUrl == 'student') {
		params.data = {'student_info':student_info, 'studCons': studCons, 'add':'student'};
	}
	else if( addUrl == 'employees'){
		params.data = {'employee_info': employee_info, 'add':'employees'};
	}

	$.ajax(params);

});


</script>
