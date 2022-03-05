 $(document).ready(function(){
	$('#register_user').on('click', function(){
		var reg_firstname      = $('#reg_firstname').val(),
			reg_lastname       = $('#reg_lastname').val(),
			reg_email     		= $('#reg_email').val(),
			reg_role     		= $('#reg_role').val(),
			reg_username       = $('#reg_username').val(),
			reg_password       = $('#reg_password').val(),
			reg_repassword = $('#reg_repassword').val();

			var correct_password = '';
			if(reg_password !== reg_repassword){
			}else{
				correct_password = reg_password;
			}

		$.ajax({
			url: URL+'register/registerUser',
			type: "post",
			data: {
				reg_firstname: reg_firstname,
				reg_lastname: reg_lastname,
				reg_email:reg_email,
				reg_role:reg_role,
				reg_username: reg_username,
				correct_password: correct_password,
			},
			success: function(response){
				console.log(response);
			},
			error: function(jqXHR, textStatus, errorThrown) {
		    	console.log(textStatus, errorThrown);
		    }
		});
	});


	$('#add_student').on('click', function(){
		alert('Students added successfully!')
		var student_lrn = $('#student_lrn').val(),
			student_fname = $('#student_fname').val(),
			student_lname = $('#student_lname').val(),
			student_gender = $('#student_gender').val(),
			student_gradelevel = $('#student_gradelevel').val(),
			student_section = $('#student_section').val(),
			student_adviser = $('#student_adviser').val();

			$.ajax({
				url: URL+'students/addNewStudent',
				type: "post",
				data: {
					student_lrn :student_lrn,
					student_fname :student_fname,
					student_lname :student_lname,
					student_gender :student_gender,
					student_gradelevel :student_gradelevel,
					student_section :student_section,
					student_adviser :student_adviser
				},
				success: function(response){
					console.log(response);
					$('#add_student_modal').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
		
	});


	$('.delete-one-student').on('click', function(){
		$('#delete_student_id').val($(this).attr('data-id'));
	});


	$('.delete-one-settings').on('click', function(){
		$('#delete_settings_id').val($(this).attr('data-id'));
	});


	$(document).on('click', '#delete_student', function() {
		var studentid = $('#delete_student_id').val();
		$.ajax({
			url: URL+'students/deleteStudent',
			type: "post",
			data: {
				studentid: studentid,
			},
			success: function(response){
				location.reload();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	});

	$(document).on('click', '#delete_settings', function() {
		var settingsId = $('#delete_settings_id').val();
		$.ajax({
			url: URL+'settings/deleteSettings',
			type: "post",
			data: {
				settingsid: settingsId,
			},
			success: function(response){
				location.reload();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});



	});
	$('.edit-one-student').on('click', function() {
		$('#edit_student_id').val($(this).attr('data-id'));
		$('#edit_student_lrn').val($(this).attr('data-student_lrn'));
		$('#edit_student_fname').val($(this).attr('data-student_fname'));
		$('#edit_student_lname').val($(this).attr('data-student_lname'));
		$('#edit_student_gender').val($(this).attr('data-student_gender'));
		$('#edit_student_gradelevel').val($(this).attr('data-student_gradelevel'));
		$('#edit_student_section').val($(this).attr('data-student_section'));
		$('#edit_student_adviser').val($(this).attr('data-student_adviser'));
	});


	$('.edit-one-settings').on('click', function() {
		$('#edit_settings_id').val($(this).attr('data-id'));
		$('#edit_settings_gradelevel').val($(this).attr('data-grade_level'));
		$('#edit_settings_section').val($(this).attr('data-section'));
		$('#edit_settings_adviser').val($(this).attr('data-adviser'));
	});

	$('#edit_settings').on('click', function() {
		alert('Settings edited successfully!')
			var settings_id = $('#edit_settings_id').val(),
			settings_gradelevel = $('#edit_settings_gradelevel').val(),
			settings_section = $('#edit_settings_section').val(),
			settings_adviser = $('#edit_settings_adviser').val();

			$.ajax({
				url: URL+'settings/editSettings',
				type: "post",
				data: {
					settings_id :settings_id,
					settings_gradelevel :settings_gradelevel,
					settings_section :settings_section,
					settings_adviser :settings_adviser,
				},
				success: function(response){
					$('#edit_student_id').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});

	});





	$('#edit_student').on('click', function() {
			alert('Students edited successfully!')
					var student_id = $('#edit_student_id').val(),
					student_lrn = $('#edit_student_lrn').val(),
					student_fname = $('#edit_student_fname').val(),
					student_lname = $('#edit_student_lname').val(),
					student_gender  = $('#edit_student_gender').val(),
					student_gradelevel = $('#edit_student_gradelevel').val(),
					student_section = $('#edit_student_section').val(),
					student_adviser = $('#edit_student_adviser').val();


			// console.log(student_id);
			// console.log(student_lrn);
			// console.log(student_fname);
			// console.log(student_lname);
			// console.log(student_gender);
			// console.log(student_gradelevel);
			// console.log(student_section);
			// console.log(student_adviser);


			$.ajax({
				url: URL+'students/editStudent',
				type: "post",
				data: {
					student_id :student_id,
					student_lrn :student_lrn,
					student_fname :student_fname,
					student_lname :student_lname,
					student_gender :student_gender,
					student_gradelevel :student_gradelevel,
					student_section :student_section,
					student_adviser :student_adviser
				},
				success: function(response){
					$('#edit_student_id').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});

	});

$('#setting_add').on('click', function(){
	alert('Settings added successfully!')
		var setting_add_grade_level = $('#setting_add_grade_level').val(),
			setting_add_section = $('#setting_add_section').val(),
			setting_add_adivser = $('#setting_add_adivser').val();

			$.ajax({
				url: URL+'settings/addSettings',
				type: "post",
				data: {
					setting_add_grade_level :setting_add_grade_level,
					setting_add_section :setting_add_section,
					setting_add_adivser :setting_add_adivser,
				},
				success: function(response){
					$('#edit_student_id').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});


});


$('#monitor_grade_level').on('change', function(){

	var id = $(this).val();
$('#calendar').fullCalendar('removeEvents');
		$('#box-of-drag').css({'display':'none'});
	$.ajax({
				url: URL+'monitor/getSections',
				type: "get",
				data: {
					id: id
				},
				success: function(response){
					var data = JSON.parse(response);
					$('#monitor_section').empty();
					$('#monitor_student').empty();
					$('#monitor_section').append(`
							<option value="" disabled selected>--SELECT--</option>
						`)
					$(data).each(function(key, val){
						$('#monitor_section').append(`
							<option value="${val.section}">${val.section}</option>
						`)
					})
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});

});

$(document).on('change', '#student_gradelevel', function(){
	var id = $(this).val();
		$.ajax({
				url: URL+'students/getSections',
				type: "get",
				data: {
					id: id
				},
				success: function(response){
					var data = JSON.parse(response);
					console.log(data);
					$('#student_section').empty();
					$('#student_section').append(`
							<option value="" disabled selected>--SELECT--</option>
						`)
					$(data).each(function(key, val){
						$('#student_section').append(`
							<option value="${val.section}">${val.section}</option>
						`)
					});

				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
});

$(document).on('change', '#monitor_student', function(){
	var val = $(this).val();

		$.ajax({
				url: URL+'monitor/getAllEvents',
				type: "get",
				data: {
					id: val
				},
				success: function(response){
					var data = JSON.parse(response);
					console.log();
					var event = JSON.parse(data[0].allEvents);	
					var newdat = [];
						$(event).each(function(key,val) {
							var year = val.start.substring(0,4);
							var month  = val.start.substring(5,7);
							var day  = val.start.substring(8,10);

							year = parseInt(year);
							month = parseInt(month);
							day = parseInt(day);

							console.log(val.title);


									switch(val.title ) {
										case 'Absent':
											background= '#dd4b39';
										break;
										case 'Tardy':
											background= '#f39c12';
										break;
										case 'Polo/Blouse(Non Compliance)':
											background= '#00c0ef';
										break;
										case 'Pants/Skirt(Non Compliance)':
											background= '#00a65a';
										break;
										case 'Earings(Non Compliance)':
											background= '#f012be';
										break;
										case 'ID(Non Compliance)':
											background= '#605ca8';
										break;
										// case 'Blouse(Non Compliance)':
										// 	background= '#d2d6de';
										// break;
										// case 'Skirt(Non Compliance)':
										// 	background= '#d81b60';
										// break;
										case 'Haircut(Non Compliance)':
											background= '#001f3f';
										break;
										default:
										background= '#39cccc';
									}
						


							 $('#calendar').fullCalendar('renderEvent', 
							 	{
							 	 title          : val.title,
						          start          : new Date(year, month - 1, day),
						          end            : new Date(year, month - 1, day),
						          backgroundColor: background, //Info (aqua)

						          // borderColor    : '#00c0ef' //Info (aqua)
								}, true);


						}, );
					
				 //$('#calendar').fullCalendar('addEvent', event);

				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});


	$('#calendar').fullCalendar('removeEvents');
	if(val === '') {
		$('#box-of-drag').css({'display':'none'});
	}else{
		$('#box-of-drag').css({'display':'block'});
	}

});

$(document).on('change', '#student_section', function(){
var id = $(this).val();
	
	console.log(id);

		$.ajax({
				url: URL+'students/getAdviser',
				type: "get",
				data: {
					id: id
				},
				success: function(response){
					var data = JSON.parse(response);
					$('#student_adviser').val(data[0].adviser);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
});


$(document).on('change', '#monitor_section', function(){

	$('#calendar').fullCalendar('removeEvents');
		$('#box-of-drag').css({'display':'none'});
	var id = $(this).val();

		$.ajax({
				url: URL+'monitor/getStudents',
				type: "get",
				data: {
					id: id
				},
				success: function(response){
					var data = JSON.parse(response);
					console.log(data);
					$('#monitor_student').empty();
					$('#monitor_student').append(`
							<option value="" disabled selected>--SELECT--</option>
						`);
					$(data).each(function(key, val){
						$('#monitor_student').append(`
							<option value="${val.id}">${val.student_fname} ${val.student_lname}</option>
						`)
					});
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
});

$('#monitor_save').on('click', function(){
	alert('Data added successfully')
	location.reload();
	var calendar_data = $('#calendar').fullCalendar('clientEvents');


	var data = [];

	var studentsId = $('#monitor_student').val();

	var studentGradeLevel = $('#monitor_grade_level').val();

	var studentsSection = $('#monitor_section').val();

	$(calendar_data).each(function(key, val){
		data.push({"title": val.title, "start": val.start._d});
	});

	if(calendar_data != undefined || calendar_data.length != 0){
		$.ajax({
				url: URL+'monitor/addNewEvent',
				type: "post",
				data: {
					studentsId : studentsId,
					studentGradeLevel: studentGradeLevel,
					studentsSection: studentsSection,
					caldendardata: JSON.stringify(data)
				},
				success: function(response){
					console.log(response)
					// location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
	}
});

});

$('#edit_password').on('click', function(){
	// alert('Password changed successfully!')
	var 
	user_id = $('#edit_password_id').val();
	user_name = $('#username').val();
	user_oldpass = $('#oldpassword').val();
	user_newpass = $('#newpassword').val();
	
	// console.log(user_id);
	// console.log(user_name);
	// console.log(user_oldpass);
	// console.log(user_newpass);

$.ajax({
	url: URL+'changepassword/changePassword',
	type: "post",
	data: {
		id : id,
		name : name,
		password : password, 
		newpass : newpass
	},
	success: function(response){
		$('#edit_password_id').modal('toggle');
		location.reload();
	},
	error: function(jqXHR, textStatus, errorThrown) {
		console.log(textStatus, errorThrown);
	}
});
});
