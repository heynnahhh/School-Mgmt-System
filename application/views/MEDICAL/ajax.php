<script>
var emp_recUrl = '<?=site_url()?>/MEDICAL/ajax/view_employee_records';
var stud_recUrl = '<?=site_url()?>/MEDICAL/ajax/view_student_records';
var emp_infoUrl = '<?=site_url()?>/MEDICAL/ajax/view_employee_info';
var stud_infoUrl = '<?=site_url()?>/MEDICAL/ajax/view_student_info';


$(document).ready(function() {

    $('#emp_records').DataTable({
        "ajax": emp_recUrl,
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

    $('#stud_records').DataTable();
    $('#emp_list').DataTable({
        "ajax": emp_infoUrl,
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
    $('#stud_list').DataTable({
        "ajax": stud_infoUrl,
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

});

$('#grade_lvl').on('change', function(){

  	$.ajax({
  		type: "POST",
  		data: {'grade_lvl':  $('#grade_lvl').val()},
  		url: '<?=site_url()?>/MEDICAL/ajax/get_section_option',
  		success: function(data){
	        if(data){
		        $json = JSON.parse(data);
		        $('#section').empty();

		        $.each($json,function(key,value){
		            $('#section').append('<option>'+value+'</option>');
		        });
	    	}
	    	else{
	    		$('#section').empty();
	    	}
	    }
  	});
 
});

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

	var params = {
		type: "POST",
		url: '<?=site_url()?>/MEDICAL/ajax/add',
	    success: function(data) {
        $("#myModal").modal('hide');
        alert("successfully saved!");
        // console.log(data);
        location.reload();
  	}	
	};

	if ( addUrl == 'student') {
		params.data = {'student_info': student_info, 'add':'student'};
	}
	else if( addUrl == 'employees'){
		params.data = {'employee_info': employee_info, 'add':'employees'};
	}

	$.ajax(params);

});

</script>