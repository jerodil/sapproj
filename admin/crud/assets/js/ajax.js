jQuery(document).ready(function(){	
	var grievanceRecords = jQuery('#grievance-list').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'fetch_all_grievance'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0,6],
				"orderable":false,
			},	
		],
		"pageLength": 10
	});

	jQuery(document).on('click', '#add-grievance', function() {
		jQuery('#create-grievance').modal('show');
		jQuery('#grievance-frm')[0].reset();
		jQuery('.modal-title').html(" Add Grievance");
		jQuery('#action').val('create');
		jQuery('#grievance-btn').text('Add');
	});		

	jQuery("#grievance-list").on('click', '.update-grievance', function(){
		var grievance_id = jQuery(this).data("grievanceid");
		var action = 'fetch_grievance';
		jQuery.ajax({
			url:'action.php',
			method:"POST",
			data:{grievance_id:grievance_id, action:action},
			dataType:"json",
			success:function(json){
				jQuery('#create-grievance').modal('show');
				jQuery('#action').val('update');
				jQuery('#grievance_id').val(json.grievance_id);
				jQuery('#ir_no').val(json.ir_no);
				jQuery('#mode_of_com').val(json.mode_of_com);
				jQuery('#fname').val(json.fname);
				jQuery('#mname').val(json.mname);				
				jQuery('#lname').val(json.lname);
				jQuery('#ext').val(json.ext);
				jQuery('#age').val(json.age);
				jQuery('#city').val(json.city);
				jQuery('#cpnum').val(json.cpnum);
				jQuery('#gender').val(json.gender);
				jQuery('#region').val(json.region);
				jQuery('#con').val(json.con);
				jQuery('#act').val(json.act);
				jQuery('#staff').val(json.staff);
				jQuery('#date_created').val(json.date_created);	
				jQuery('.modal-title').html(" Edit Grievance");
				jQuery('#grievance-btn').text('Update');
			}
		})
	});

	jQuery("#grievance-list").on('click', '.view-grievance', function(){
		var student_id = jQuery(this).data("grievanceid");
		var action = 'fetch_grievance';
		jQuery.ajax({
			url:'action.php',
			method:"POST",
			data:{grievance_id:grievance_id, action:action},
			dataType:"json",
			success:function(json){
				jQuery('#view-grievance').modal('show');
				jQuery('#vs-ir_no').text(json.ir_no);
				jQuery('#vs-mode_of_com').text(json.mode_of_com);
				jQuery('#vs-fname').text(json.fname;
				jQuery('#vs-mname').text(json.mname);				
				jQuery('#vs-ext').text(json.ext);
				jQuery('#vs-age').text(json.age);
				jQuery('#vs-city').text(json.city);
				jQuery('#vs-cpnum').text(json.cpnum);
				jQuery('#vs-gender').text(json.gender);
				jQuery('#vs-region').text(json.region);
				jQuery('#vs-con').text(json.con);
				jQuery('#vs-act').text(json.act);
				jQuery('#vs-staff').text(json.staff);
				jQuery('#vs-date_created').text(json.date_created);
			}
		})
	});

	// create/update 
	jQuery(document).on('click','button#grievance-btn', function(e){
		e.preventDefault();
		var formData = jQuery('form#grievance-frm').serialize();
		var grievance_id = jQuery('input#grievance_id').val();
		if(grievance_id){
			var action = 'update';
		} else {
			var action = 'create';
		}
		jQuery.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			 beforeSend: function () {
	            jQuery('button#grievance-btn').button('loading');
	        },
	        complete: function () {
	            jQuery('button#grievance-btn').button('reset');
	            jQuery('#grievance-frm')[0].reset();
	            jQuery('#create-grievance').modal('hide');
	        }, 
			success:function(data){				
				grievanceRecords.ajax.reload();
			}
		})
	});	

	jQuery("#grievance-list").on('click', '.delete-grievance', function(){
		var student_id = jQuery(this).data("grievanceid");	
		var action = "delete";
		if(confirm("Are you sure you want to delete this Record?")) {
			jQuery.ajax({
				url:"action.php",
				method:"POST",
				data:{grievance_id:grievance_id, action:action},
				success:function(data) {					
					grievanceRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});