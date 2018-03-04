<script>
var current_method = '<?php echo $this->uri->segment(3);?>';
	$(document).ready(function(){

		$('.strand-class').hide();

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
	  	tableParams.columnDefs = [{"width": "450px", "targets": 0},{"width": "150px", "targets": 1},{"width": "150px", "targets": 2},{"width": "150px", "targets": 3}];
	    $('#shs_tbl').DataTable(tableParams);

    }

     else if(current_method == 'users_account'){
      //tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/users_account';
      tableParams.columnDefs = [{"width": "200px", "targets": 0},{"width": "280px", "targets": 1},{"width": "180px", "targets": 2},{"width": "180px", "targets": 3},{"width": "100px", "targets": 4}];
      $('#users_account_tbl').DataTable(tableParams);

	  }

		else if(current_method == 'users_privilege'){
		 //tableParams.ajax = '<?=site_url()?>/LRMDS/ajax/users_account';
		 tableParams.columnDefs = [{"width": "200px", "targets": 0},{"width": "280px", "targets": 1},{"width": "180px", "targets": 2},{"width": "180px", "targets": 3},{"width": "100px", "targets": 4}];
		 $('#users_privilege_tbl').DataTable(tableParams);

	 }


	$(document).on('click', '#myBtn', function(){
      $("#myModal").modal();
    });

	$('#myModal').on('hidden.bs.modal', function () {
		$(this).find('input,textarea,select').val(null);
	});


// EDIT ***************************

    $('#jhs_tbl tbody').on( 'click', '.edit', function () {
      var data = $('#jhs_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

			$('#ed_jhs_subject').val(data[0]);

          $.ajax({
            type: "POST",
            data: {'subject': data[0]},
            url: '<?=site_url()?>/LRMDS/ajax/get_jhs_subject_id',
            dataType: 'json',
            success: function(data){
                if(data){
                  var info = data.data[0];

                  $('#ed_jhs_subject_id').val(info.lres_id);
                }
            }
          });

    } );

    $('#shs_tbl tbody').on( 'click', '.edit', function () {
      var data = $('#shs_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

					$('#ed_shs_subject').val(data[0]);
					$('#ed_subject_type').val(data[1]);
					$('#ed_strand').val(data[2]);
					$('#ed_grade_lvl').val(data[3]);

					if(data[2] == null){
						$('#ed_strand').attr('disabled','disabled');
					}
					else{
						$('#ed_strand').removeAttr('disabled','disabled');
					}

    } );


    $('#strand_tbl tbody').on( 'click', '.edit', function () {
      var data = $('#strand_tbl').DataTable().row( $(this).parents('tr') ).data();
          $('#table').removeClass('col-xs-12');
          $('#table').addClass('col-xs-7');
          $('#form').show();

					$('#ed_strand_name').val(data[0]);

          $.ajax({
            type: "POST",
            data: {'strand': data[0]},
            url: '<?=site_url()?>/LRMDS/ajax/get_strand_id',
            dataType: 'json',
            success: function(data){
                if(data){
                  var info = data.data[0];

                  $('#ed_strand_id').val(info.lrs_id);
                }
            }
          });

    } );

// DELETE *********************************


    $('#topic_tbl tbody').on( 'click', '.delete', function () {
      var data = $('#topic_tbl').DataTable().row( $(this).parents('tr') ).data();
				$("#delModal").modal();
				onClickDel(data);
    } );

    $('#jhs_tbl tbody').on( 'click', '.delete', function () {
      var data = $('#jhs_tbl').DataTable().row( $(this).parents('tr') ).data();
				$("#delModal").modal();
				onClickDel(data);
    } );

    $('#shs_tbl tbody').on( 'click', '.delete', function () {
      var data = $('#shs_tbl').DataTable().row( $(this).parents('tr') ).data();

			var shs_data = {'subject': data[0], 'strand': data[2]};

			$("#delModal").modal();
			onClickDel(shs_data);
    } );

    $('#strand_tbl tbody').on( 'click', '.delete', function () {
      var data = $('#strand_tbl').DataTable().row( $(this).parents('tr') ).data();
			$("#delModal").modal();
			onClickDel(data);
    } );

		function onClickDel(data){

			$('#yes').on('click', function(){
				var params = {
					type: "POST",
					url: '<?=site_url()?>/LRMDS/ajax/delete',
					success: function(data){
						$("#delModal").modal('hide');
						$('#jhs_tbl').DataTable().ajax.reload();
						$('#shs_tbl').DataTable().ajax.reload();
						$('#strand_tbl').DataTable().ajax.reload();
						$('#topic_tbl').DataTable().ajax.reload();
				  },
					error: function(data){
						$("#delModal").modal('hide');
						alert('DELETE: Restricted!');
					}
				}

				if(current_method == 'jhs'){
					params.data = {'subject': data[0], 'delete':'jhs'};
				}
				if(current_method == 'shs'){
					params.data = {'shs_data': data, 'delete':'shs'};
				}
				if(current_method == 'strands'){
					params.data = {'strand': data[0], 'delete':'strands'};
				}
				if(current_method == 'topics'){
					params.data = {'topic': data[0], 'delete':'topics'};
				}

				$.ajax(params);

			});
		}



// SELECT TRIGGER *************************

		$('#ed_subject_type').on('change', function(){
				if($('#ed_subject_type').val() == 'Specialized Subject'){
					$('#ed_strand').removeAttr('disabled','disabled');
				}
				else{
					$('#ed_strand').attr('disabled','disabled');
					$('#ed_strand').val(null);
				}
		});

		$('#adsubject_type').on('change', function(){
				if($('#adsubject_type').val() == 'Specialized Subject'){
					$('.strand-class').show();

					$.ajax({
						type: "POST",
						url: '<?=site_url()?>/LRMDS/ajax/get_strand',
						dataType:'json',
						success: function(data){
							if(data){
								$json = data;
								$('#adstrand').empty();

									$.each($json,function(i,data){
										$('#adstrand').append('<option value="'+data+'">'+data+'</option>');
									});
							}
							else if(data == null){
								$('#adstrand').empty();

							}
						}
					});

				}
				else{
					$('.strand-class').hide();
					$('#adstrand').val(null);
				}
		});


// VIEW DETAILS ***************************

    $('#topic_tbl tbody').on( 'click','.view', function () {
      var data = $('#topic_tbl').DataTable().row( $(this).parents('tr') ).data();

        $.ajax({
          type: "POST",
          data: {'topic_name': data[0]},
          url: '<?=site_url()?>/LRMDS/ajax/get_topic_details',
          dataType: 'json',
          success: function(data){
              if(data){
                var info = data.data[0];

                $('.full_details').removeAttr('style', 'display:none');
                window.scrollTo(0, 0);
                if( $('.left,.middle,.right').is(':empty') ){

                  $("<label>" + "Topic ID:" + "</label>" + "<p>" + info.topic_id + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Topic Name:" + "</label>" + "<p>" + info.topic_name + "</p>").appendTo('.middle');
                  $("<label>" + "Education Type:" + "</label>" + "<p>" + info.educ_type + "</p>").appendTo('.right');
                  $("<label>" + "Grade Level:" + "</label>" + "<p>" + info.grade_lvl + "</p>").appendTo('.left');
                  $("<label>" + "Subject Type:" + "</label>" + "<p>" + info.subject_type + "</p>").appendTo('.middle');
                  $("<label>" + "Strand:" + "</label>" + "<p>" + info.strand + "</p>").appendTo('.right');
                  $("<label>" + "Subject:" + "</label>" + "<p>" + info.subject + "</p>").appendTo('.left');
                }
                else {
                  $('.left,.middle,.right').empty();
                  $("<label>" + "Topic ID:" + "</label>" + "<p>" + info.topic_id + "</p>").appendTo('.left').trigger('change');
                  $("<label>" + "Topic Name:" + "</label>" + "<p>" + info.topic_name + "</p>").appendTo('.middle');
                  $("<label>" + "Education Type:" + "</label>" + "<p>" + info.educ_type + "</p>").appendTo('.right');
                  $("<label>" + "Grade Level:" + "</label>" + "<p>" + info.grade_lvl + "</p>").appendTo('.left');
                  $("<label>" + "Subject Type:" + "</label>" + "<p>" + info.subject_type + "</p>").appendTo('.middle');
                  $("<label>" + "Strand:" + "</label>" + "<p>" + info.strand + "</p>").appendTo('.right');
                  $("<label>" + "Subject:" + "</label>" + "<p>" + info.subject + "</p>").appendTo('.left');
                }

              }

          }
        });

    } );

	});


  $(".submit").on('click', function (e) {
    e.preventDefault();

    var jhs_subject = $("input#jhs_subject").val();
    var strand = $("input#strand_name").val();
		var shs_subject = {	'subject': $("input#adsubject").val(), 'grade_lvl': $("select#adgrade_lvl").val(), 'subject_type': $("select#adsubject_type").val(), 'strand': $("select#adstrand").val() };

    var params = {
      type: "POST",
      url: '<?=site_url()?>/LRMDS/ajax/add',
      success: function(data) {
        $("#myModal").modal('hide');
        alert("Successfully Saved!");
        // console.log(data);
				$('.strand-class').hide();
				$('#jhs_tbl').DataTable().ajax.reload();
				$('#shs_tbl').DataTable().ajax.reload();
				$('#strand_tbl').DataTable().ajax.reload();
      },
			error: function(data) {
				alert("ERROR: Saving data failed.");
			}
    };

    if(current_method == 'strands'){
      params.data = {'strand': strand, 'add':'strands'};
    }
    if(current_method == 'jhs'){
      params.data = {'jhs_subject': jhs_subject, 'add':'jhs'};
    }
		if(current_method == 'shs'){
			params.data = {'shs_subject': shs_subject, 'add':'shs'};
		}


    $.ajax(params);

  });


  $(".update").on('click', function (e) {
	  e.preventDefault();

		var edit_jhs_subject = { lres_id: $("input#ed_jhs_subject_id").val(), subject: $("input#ed_jhs_subject").val()};
		var edit_shs_subject = { subject: $("input#ed_shs_subject").val(), grade_lvl: $("select#ed_grade_lvl").val(), subject_type: $("select#ed_subject_type").val(), strand: $('select#ed_strand').val()};
		var edit_strand = { lrs_id: $("input#ed_strand_id").val(), strand: $("input#ed_strand_name").val()};

	  var params = {
	    type: "POST",
	    url: '<?=site_url()?>/LRMDS/ajax/edit',
	    success: function(data) {
	      alert("Successfully Updated!");
	      // console.log(data);
	      $('#jhs_tbl').DataTable().ajax.reload();
				$('#shs_tbl').DataTable().ajax.reload();
				$('#strand_tbl').DataTable().ajax.reload();
	      cancel();
	    }
	  };

	  if(current_method == 'jhs'){
	    params.data = {'jhs_subject':edit_jhs_subject, 'edit':'jhs'};
	  }
		if(current_method == 'shs'){
			params.data = {'shs_subject':edit_shs_subject, 'edit':'shs'};
		}
		if(current_method == 'strands'){
			params.data = {'strand':edit_strand, 'edit':'strands'};
		}

	  $.ajax(params);

	});

	function cancel(){
	  $('#table').removeClass('col-xs-7');
	  $('#table').addClass('col-xs-12');
	  $('#form').hide();
	}

</script>
