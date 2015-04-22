var mode = 0;
  //$(function() {
$(document).ready( function() { 	
	$("#tabs").tabs();
	$("#tabsFamily").tabs();
	$("#tabsPidana").tabs();
	$("#tabsEducation").tabs();
	$("#applicant_birthdate").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#list1").jqGrid({
		url: BASE_URL + 'registration/loadData',
		mtype : "post",             
		datatype: "json",            
		colNames:['No.', 'App ID', 'No. KTP','Nama Lengkap','Tgl. Lahir','Jenis Kelamin','Alamat'],
		colModel:[
			{name:'no',index:'no', width:2, align:"center",search : false},
			{name:'id',index:'id', width:4, align:"center", hidden:false},
			{name:'applicant_id',index:'applicant_id', width:5, align:"center"},
			{name:'applicant_name',index:'applicant_name', width:7, align:"left"},
			{name:'applicant_birthdate',index:'applicant_birthdate', width:7, align:"center",search : false},
			{name:'applicant_sex',index:'applicant_sex', width:5, align:"center",search : false},
			{name:'applicant_address_doc',index:'applicant_address_doc', width:7, align:"left",search : false},
		],
		rowNum:20,
		width: 850,
		height: 250,
		rowList:[10,20,30],
		pager: '#pager1',
		sortname: 'applicant_name',
		viewrecords: true,
		caption:"Pendaftaran",
		
		
	}).navGrid('#pager1',{edit:false,add:false,del:false, view:false},{},{},{},{sopt:['eq']}
		
	)
	;
	
	$(".selectopts").hide();
	
	$('#file_type').on('change', function() {
		$('#progress .progress-bar').css('width', '0%');
	});
	
$("#regForm").validate({
	rules: {
		applicant_id : "required"
	},
	messages : {
		applicant_id: "Silakan isi No. KTP",
	},
	errorClass: "my-error-class",
	validClass: "my-valid-class",
	highlight: function (element) {
		$(element).closest('.form-group').addClass('has-error');
		$(element).addClass('select-class');                      

	},
	unhighlight: function (element) {
		$(element).closest('.form-group').removeClass('has-error');
		$(element).removeClass('select-class');   
	},
});	

$('#myfile').fileupload({
	 url: BASE_URL + 'registration/upload_file',
	dataType: 'json',
	done: function (e, data) {
		alert('Upload berhasil');
	},
	progressall: function (e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		$('#progress .progress-bar').css(
			'width',
			progress + '%'
		);
	}
});


$("#btn_download_ktp").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#ktp_file").html();
	return false;
});

$("#btn_del_ktp").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen KTP?"))
	{		
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#ktp_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_passport").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#passport_file").html();
	return false;
});

$("#btn_del_passport").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Passport?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#passport_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_kk").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#familycard_file").html();
	return false;
});

$("#btn_del_kk").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Kartu Keluarga?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#familycard_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_akta").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#birthcert_file").html();
	return false;
});

$("#btn_del_akta").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Akta Kelahiran?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#birthcert_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_finger").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#fingerprint_file").html();
	return false;
});

$("#btn_del_finger").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Sidik Jari?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#fingerprint_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_corp").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#corp_sponsor_file").html();
	return false;
});

$("#btn_del_corp").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Dok Sponsor?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#corp_sponsor_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_marital").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#marital_letter_file").html();
	return false;
});

$("#btn_del_marital").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Surat Nikah?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#marital_letter_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_report").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#report_evidence_file").html();
	return false;
});

$("#btn_del_report").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen Report Evidence?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/' + $("#report_evidence_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_print").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		var data = $("#list1").jqGrid('getRowData',rowdata);
		if(data)
		{
			window.location.href = BASE_URL + 'registration/print_word/' + data.id;
		}
	}
});

$("#btn_add").click(function(){
	//clear fields
	
	 $('#dialog-form').find("input[type=text], textarea").val("");
	 
	$("#ktp_file").html('');
	$("#passport_file").html('');
	$("#familycard_file").html('');
	$("#birthcert_file").html('');
	$("#fingerprint_file").html('');
	$("#corp_sponsor_file").html('');
	$("#marital_letter_file").html('');
	$("#report_evidence_file").html('');
	
	$("#btn_download_ktp").hide();
	$("#btn_del_ktp").hide();
	$("#btn_download_passport").hide();
	$("#btn_del_passport").hide();
	$("#btn_download_kk").hide();
	$("#btn_del_kk").hide();
	$("#btn_download_kk").hide();
	$("#btn_del_kk").hide();
	$("#btn_download_akta").hide();
	$("#btn_del_akta").hide();
	$("#btn_download_finger").hide();
	$("#btn_del_finger").hide();
	$("#btn_download_corp").hide();
	$("#btn_del_corp").hide();
	$("#btn_download_marital").hide();
	$("#btn_del_marital").hide();
	$("#btn_download_report").hide();
	$("#btn_del_report").hide();
	
	
	$("#dialog-form").dialog('option','title', 'Add Data');
	$("#dialog-form").dialog('open');
	mode = 1;
});


$("#btn_edit").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		
		
		var data = $("#list1").jqGrid('getRowData',rowdata);
		
		if(data)
		{
			//alert(data.id);
			$( "#dialog-form" ).dialog('option','title', 'Edit Data');
			$("#dialog-form").dialog('open');
			mode = 0;
			$.ajax({url: BASE_URL + 'registration/get_applicant/' + data.id, dataType: "JSON", success: function(json){
				if(json)
				{
					//alert(json[0].applicant_name);
					$("#applicant_id").val(json[0].applicant_id);
					$("#id").val(json[0].id);
					$("#applicant_name").val(json[0].applicant_name);
					$("#purpose_desc").val(json[0].purpose_desc);
					$("#status_type").val(json[0].status_type);
					$("#applicant_birthplace").val(json[0].applicant_birthplace);
					$("#applicant_birthdate").val(json[0].applicant_birthdate);
					$("#applicant_religion").val(json[0].applicant_religion);
					$("#applicant_sex").val(json[0].applicant_sex);
					$("#applicant_citizenship").val(json[0].applicant_citizenship);
					$("#applicant_address_now").val(json[0].applicant_address_now);
					$("#applicant_address_doc").val(json[0].applicant_address_doc);
					$("#applicant_occupation").val(json[0].applicant_occupation);
					$("#applicant_passport").val(json[0].applicant_passport);
					$("#applicant_kitaps").val(json[0].applicant_kitaps);
					$("#applicant_phone").val(json[0].applicant_phone);
					$("#applicant_edu_primary").val(json[0].applicant_edu_primary);
					$("#applicant_edu_primary_city").val(json[0].applicant_edu_primary_city);
					$("#applicant_edu_primary_year").val(json[0].applicant_edu_primary_year);
					$("#applicant_edu_secondary").val(json[0].applicant_edu_secondary);
					$("#applicant_edu_secondary_city").val(json[0].applicant_edu_secondary_city);
					$("#applicant_edu_secondary_year").val(json[0].applicant_edu_secondary_year);
					$("#applicant_edu_tertiary").val(json[0].applicant_edu_tertiary);
					$("#applicant_edu_tertiary_city").val(json[0].applicant_edu_tertiary_city);
					$("#applicant_edu_tertiary_year").val(json[0].applicant_edu_tertiary_year);
					$("#applicant_edu_bachelor").val(json[0].applicant_edu_bachelor);
					$("#applicant_edu_bachelor_city").val(json[0].applicant_edu_bachelor_city);
					$("#applicant_edu_bachelor_year").val(json[0].applicant_edu_bachelor_year);
					$("#applicant_edu_master").val(json[0].applicant_edu_master);
					$("#applicant_edu_master_city").val(json[0].applicant_edu_master_city);
					$("#applicant_edu_master_year").val(json[0].applicant_edu_master_year);
					$("#applicant_edu_doctoral").val(json[0].applicant_edu_doctoral);
					$("#applicant_edu_doctoral_city").val(json[0].applicant_edu_doctoral_city);
					$("#applicant_edu_doctoral_year").val(json[0].applicant_edu_doctoral_year);
					$("#applicant_rambut").val(json[0].applicant_rambut);
					$("#applicant_kulit").val(json[0].applicant_kulit);
					$("#applicant_wajah").val(json[0].applicant_wajah);
					$("#applicant_tinggibadan").val(json[0].applicant_tinggibadan);
					$("#applicant_beratbadan").val(json[0].applicant_beratbadan);
					$("#applicant_tandakhusus").val(json[0].applicant_tandakhusus);
					$("#applicant_rumussidikjari").val(json[0].applicant_rumussidikjari);
					$("#applicant_spouse_type").val(json[0].applicant_spouse_type);
					$("#applicant_spouse_name").val(json[0].applicant_spouse_name);
					$("#applicant_spouse_age").val(json[0].applicant_spouse_age);
					$("#applicant_spouse_religion").val(json[0].applicant_spouse_religion);
					$("#applicant_spouse_citizenship").val(json[0].applicant_spouse_citizenship);
					$("#applicant_spouse_occupation").val(json[0].applicant_spouse_occupation);
					$("#applicant_spouse_address").val(json[0].applicant_spouse_address);
					$("#applicant_father_name").val(json[0].applicant_father_name);
					$("#applicant_father_age").val(json[0].applicant_father_age);
					$("#applicant_father_citizenship").val(json[0].applicant_father_citizenship);
					$("#applicant_father_religion").val(json[0].applicant_father_religion);
					$("#applicant_father_occupation").val(json[0].applicant_father_occupation);
					$("#applicant_father_address").val(json[0].applicant_father_address);
					$("#applicant_mother_name").val(json[0].applicant_mother_name);
					$("#applicant_mother_age").val(json[0].applicant_mother_age);
					$("#applicant_mother_citizenship").val(json[0].applicant_mother_citizenship);
					$("#applicant_mother_religion").val(json[0].applicant_mother_religion);
					$("#applicant_mother_occupation").val(json[0].applicant_mother_occupation);
					$("#applicant_mother_address").val(json[0].applicant_mother_address);
					
					var name = json[0].applicant_siblings_names;
					var names = name.split(",");
					if(names.length  == 3)
					{
						$("#applicant_sibling1_name").val(names[0]);
						$("#applicant_sibling2_name").val(names[1]);
						$("#applicant_sibling3_name").val(names[2]);
					}
					
					var age = json[0].applicant_siblings_ages;
					var ages = age.split(",");
					if(ages.length  == 3)
					{
						$("#applicant_sibling1_age").val(ages[0]);
						$("#applicant_sibling2_age").val(ages[1]);
						$("#applicant_sibling3_age").val(ages[2]);
					}
					
					var address = json[0].applicant_siblings_addresses;
					var addresses = address.split(",");
					if(addresses.length  == 3)
					{
						$("#applicant_sibling1_address").val(addresses[0]);
						$("#applicant_sibling2_address").val(addresses[1]);
						$("#applicant_sibling3_address").val(addresses[2]);
					}
					
					$("#applicant_pidana").val(json[0].applicant_pidana);
					$("#applicant_pidana_apa").val(json[0].applicant_pidana_apa);
					$("#applicant_pidana_proses").val(json[0].applicant_pidana_proses);
					$("#applicant_pidana_kasus").val(json[0].applicant_pidana_kasus);
					$("#applicant_pidana_sampaimana").val(json[0].applicant_pidana_sampaimana);
					$("#applicant_pidana_putusansementara").val(json[0].applicant_pidana_putusansementara);
					$("#applicant_pidana_putusanakhir").val(json[0].applicant_pidana_putusanakhir);
					$("#applicant_pelanggaran").val(json[0].applicant_pelanggaran);
					$("#applicant_pelanggaran_apa").val(json[0].applicant_pelanggaran_apa);
					$("#applicant_pelanggaran_proses").val(json[0].applicant_pelanggaran_proses);
					$("#applicant_pelanggaran_sampaimana").val(json[0].applicant_pelanggaran_sampaimana);
					
					if(json[0].skck_ktp == '' || json[0].skck_ktp == null)
					{
						$("#ktp_file").html('');
						$("#btn_download_ktp").hide();
						$("#btn_del_ktp").hide();
					}
					else
					{
						$("#ktp_file").html(json[0].skck_ktp);
						$("#btn_download_ktp").show();
						$("#btn_del_ktp").show();
					}
					
					if(json[0].skck_passport == '' || json[0].skck_passport == null)
					{
						$("#passport_file").html('');
						$("#btn_download_passport").hide();
						$("#btn_del_passport").hide();
					}
					else
					{
						$("#passport_file").html(json[0].skck_passport);
						$("#btn_download_passport").show();
						$("#btn_del_passport").show();
					}
					
					if(json[0].skck_familycard == '' || json[0].skck_familycard == null)
					{
						$("#familycard_file").html('');
						$("#btn_download_kk").hide();
						$("#btn_del_kk").hide();
					}
					else
					{
						$("#familycard_file").html(json[0].skck_familycard);
						$("#btn_download_kk").show();
						$("#btn_del_kk").show();
					}
					
					if(json[0].skck_birthcert == '' || json[0].skck_birthcert == null)
					{
						$("#birthcert_file").html('');
						$("#btn_download_akta").hide();
						$("#btn_del_akta").hide();
					}
					else
					{
						$("#birthcert_file").html(json[0].skck_birthcert);
						$("#btn_download_akta").show();
						$("#btn_del_akta").show();
					}
					
					if(json[0].skck_fingerprint == '' || json[0].skck_fingerprint == null)
					{
						$("#fingerprint_file").html('');
						$("#btn_download_finger").hide();
						$("#btn_del_finger").hide();
					}
					else
					{
						$("#fingerprint_file").html(json[0].skck_fingerprint);
						$("#btn_download_finger").show();
						$("#btn_del_finger").show();
					}
					
					if(json[0].skck_corp_sponsor == '' || json[0].skck_corp_sponsor == null)
					{
						$("#corp_sponsor_file").html('');
						$("#btn_download_corp").hide();
						$("#btn_del_corp").hide();
					}
					else
					{
						$("#corp_sponsor_file").html(json[0].skck_corp_sponsor);
						$("#btn_download_corp").show();
						$("#btn_del_corp").show();
					}
					
					if(json[0].skck_marital_letter == '' || json[0].skck_marital_letter == null)
					{
						$("#marital_letter_file").html('');
						$("#btn_download_marital").hide();
						$("#btn_del_marital").hide();
					}
					else
					{
						$("#marital_letter_file").html(json[0].skck_marital_letter);
						$("#btn_download_marital").show();
						$("#btn_del_marital").show();
					}
					
					if(json[0].skck_report_evidence == '' || json[0].skck_report_evidence == null)
					{
						$("#report_evidence_file").html('');
						$("#btn_download_report").hide();
						$("#btn_del_report").hide();
					}
					else
					{
						$("#report_evidence_file").html(json[0].skck_report_evidence);
						$("#btn_download_report").show();
						$("#btn_del_report").show();
					}
					
					
				}}});
			
		}}
	});


	$("#dialog-form").dialog({
		modal: true,
		draggable: true,
		resizable: true,
		position: { my: 'top', at: 'top+51' },
		show: 'blind',
		hide: 'blind',
		width: 800,
		dialogClass: 'ui-dialog-osx',
		autoOpen: false,
		
		buttons: 
			{
				"Simpan" : function(){
					if($("#regForm").valid())
					{
						if(mode == 0)
						{
							$.ajax({
								url: BASE_URL + 'registration/update',
								data: $("#regForm").serialize(),
								dataType: 'JSON',
								method: "POST",
								beforeSend:function(){
									
								},
								error: function(){
									alert('Data gagal disimpan');
								},
								success: function(data){
									if(data){
										alert(data.msg);
									}
									$(this).dialog("close");
								}
							});
						}
						else
						{
							$.ajax({
								url: BASE_URL + 'registration/save_data',
								data: $("#regForm").serialize(),
								dataType: 'JSON',
								method: "POST",
								beforeSend:function(){
									
								},
								error: function(){
									alert('Data gagal disimpan');
								},
								success: function(data){
									if(data){
										alert(data.msg);
									}
									
									$(this).dialog("close");
								}
							});
						}
					}
					
					
				},
				"Tutup": function() {
					$(this).dialog("close");
				}
				
			},
		open: function(){
			$('.ui-dialog-titlebar-close').addClass('ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only');
			$('.ui-dialog-titlebar-close').append('<span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">close</span>');
			$('.my-error-class').text('');
			$('.form-group').removeClass('has-error');
			$('.form-control').removeClass('select-class');  
			$('#progress .progress-bar').css('width', '0%');
		}
		
	});
	
	

});//end

