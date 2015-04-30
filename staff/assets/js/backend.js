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
		colNames:['No.', 'ID','Print ID','Application ID', 'No. KTP','Nama Lengkap','Tgl. Lahir','Jenis Kelamin','Alamat'],
		colModel:[
			{name:'no',index:'no', width:2, align:"center",search : false},
			{name:'id',index:'id', width:3, align:"center", hidden:true},
			{name:'print_id',index:'print_id', width:3, align:"center"},
			{name:'application_id',index:'application_id', width:6, align:"center"},
			{name:'applicant_id',index:'applicant_id', width:6, align:"center"},
			{name:'applicant_name',index:'applicant_name', width:8, align:"left"},
			{name:'applicant_birthdate',index:'applicant_birthdate', width:4, align:"center",search : false},
			{name:'applicant_sex',index:'applicant_sex', width:5, align:"center",search : false},
			{name:'applicant_address_doc',index:'applicant_address_doc', width:15, align:"left",search : false},
		],
		rowNum:20,
		width: 900,
		height: 250,
		rowList:[10,20,30],
		pager: '#pager1',
		sortname: 'applicant_name',
		viewrecords: true,
		caption:"Pendaftaran",
		
		
	}).navGrid('#pager1',{edit:false,add:false,del:false, view:false, refresh:true, beforeRefresh: function(){
		var postData = $("#list1").jqGrid('getGridParam','postData');
		$("#list1").jqGrid('setGridParam',{search:false});    
			$.extend(postData, { filters: "" });

			for (k in postData) {
				if (k == "_search")
					{ postData._search = false;}
				else if ($.inArray(k, ["nd", "sidx", "rows", "sord", "page", "filters"]) < 0) {
						delete postData[k];
					   $("#gs_" + $.jgrid.jqID(k), $("#list1").get(0).grid.hDiv).val("");
				}
			}
		$("#list1").trigger("reloadGrid", [{ page: 1}]);   
		return false;
	
	}},{},{},{},{sopt:['eq']}
		
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
		//alert('Upload berhasil');
		var res = data.result;
		if(res)alert(res.msg);
	},
	progressall: function (e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		$('#progress .progress-bar').css(
			'width',
			progress + '%'
		);
	}
});

$("#btn_refresh").on('click',function(e){
	
	var postData = $("#list1").jqGrid('getGridParam','postData');
    $("#list1").jqGrid('setGridParam',{search:false});    
        $.extend(postData, { filters: "" });

        for (k in postData) {
            if (k == "_search")
                { postData._search = false;}
            else if ($.inArray(k, ["nd", "sidx", "rows", "sord", "page", "filters"]) < 0) {
                    delete postData[k];
                   $("#gs_" + $.jgrid.jqID(k), $("#list1").get(0).grid.hDiv).val("");
            }
        }
    $("#list1").trigger("reloadGrid", [{ page: 1}]);   
	//return false;
});


$("#btn_download_ktp").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#ktp_file").html();
	return false;
});

$("#btn_del_ktp").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus dokumen KTP?"))
	{		
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/1/' + $("#ktp_file").html(), dataType: "JSON", success: function(json){
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
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/2/' + $("#passport_file").html(), dataType: "JSON", success: function(json){
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
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/3/' + $("#familycard_file").html(), dataType: "JSON", success: function(json){
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
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/4/' + $("#birthcert_file").html(), dataType: "JSON", success: function(json){
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
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/5/' + $("#fingerprint_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_polsek").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#polsek_file").html();
	return false;
});

$("#btn_del_polsek").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus Surat Polsek?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/6/' + $("#polsek_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_desa").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#desa_file").html();
	return false;
});

$("#btn_del_desa").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus Surat Desa?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/7/' + $("#desa_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_kecamatan").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#kecamatan_file").html();
	return false;
});

$("#btn_del_kecamatan").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus Surat Kecamatan?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/8/' + $("#kecamatan_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_del_foto").on('click',function(e){
	
	if(confirm("Apakah Anda yakin untuk menghapus Pas Foto?"))
	{
		$.ajax({url: BASE_URL + 'registration/del_doc/' + $("#id").val() + '/9/' + $("#foto_file").html(), dataType: "JSON", success: function(json){
			if(json){ alert(json.msg); }
		}});
	}
	return false;
	
});

$("#btn_download_foto").on('click',function(e){
	window.location.href = BASE_URL + 'registration/download/' + $("#id").val() + '/' +$("#foto_file").html();
	return false;
});



$("#btn_print").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		var data = $("#list1").jqGrid('getRowData',rowdata);
		if(data)
		{
			window.location.href = BASE_URL + 'registration/print_word/' + data.id;
			$('#list1').trigger( 'reloadGrid' );
		}
	}
});

$("#btn_print2").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		var data = $("#list1").jqGrid('getRowData',rowdata);
		if(data)
		{
			window.location.href = BASE_URL + 'registration/print_pertanyaan/' + data.id;
			$('#list1').trigger( 'reloadGrid' );
		}
	}
});

$("#btn_print3").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		var data = $("#list1").jqGrid('getRowData',rowdata);
		if(data)
		{
			window.location.href = BASE_URL + 'registration/print_kartu/' + data.id;
			$('#list1').trigger( 'reloadGrid' );
		}
	}
});


$("#btn_delete").click(function(){
	var rowdata = $("#list1").jqGrid('getGridParam','selrow');
	if(rowdata){
		var data = $("#list1").jqGrid('getRowData',rowdata);
		if(data)
		{
			if(confirm("Apakah Anda yakin untuk menghapus data?"))
			{
				$.ajax({url: BASE_URL + 'registration/delete/' + data.id, dataType: "JSON", success: function(json){
					if(json){ /*alert(json.msg);*/ $('#list1').trigger( 'reloadGrid' ); }
				}});
			}
			
			return false;
			
			
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
	
	$("#desa_file").html('');
	$("#polsek_file").html('');
	$("#kecamatan_file").html('');
	$("#foto_file").html('');
	
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
	
	$("#btn_download_polsek").hide();
	$("#btn_del_polsek").hide();
	$("#btn_download_desa").hide();
	$("#btn_del_desa").hide();
	$("#btn_download_kecamatan").hide();
	$("#btn_del_kecamatan").hide();
	$("#btn_download_foto").hide();
	$("#btn_del_foto").hide();
	
	$("#id").val('');
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
					$("#application_id").val(json[0].application_id);
					$("#id").val(json[0].id);
					$("#applicant_name").val(json[0].applicant_name);
					$("#purpose_desc").val(json[0].purpose_desc);
					$("#status_type").val(json[0].status_type);
					$("#applicant_email").val(json[0].applicant_email);
					$("#applicant_birthplace").val(json[0].applicant_birthplace);
					$("#applicant_birthdate").val(json[0].applicant_birthdate);
					$("#applicant_religion").val(json[0].applicant_religion);
					$("#applicant_sex").val(json[0].applicant_sex);
					$("#applicant_citizenship").val(json[0].applicant_citizenship);
					$("#applicant_address_now").val(json[0].applicant_address_now);
					$("#applicant_address_doc").val(json[0].applicant_address_doc);
					$("#applicant_occupation").val(json[0].applicant_occupation);
					$("#applicant_passport").val(json[0].applicant_passport);
					//$("#applicant_kitaps").val(json[0].applicant_kitaps);
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
					
					var sidik = json[0].applicant_rumussidikjari;
					var sidiks = sidik.split("#");
					if(sidiks.length == 2)
					{
						$("#applicant_rumussidikjari").val(sidiks[0]);
						$("#applicant_rumussidikjari2").val(sidiks[1]);
					}
					else
					{
						$("#applicant_rumussidikjari").val('');
						$("#applicant_rumussidikjari2").val('');
					}
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
					var names = name.split("#");
					if(names.length  == 6)
					{
						$("#applicant_sibling1_name").val(names[0]);
						$("#applicant_sibling2_name").val(names[1]);
						$("#applicant_sibling3_name").val(names[2]);
						$("#applicant_sibling4_name").val(names[3]);
						$("#applicant_sibling5_name").val(names[4]);
						$("#applicant_sibling6_name").val(names[5]);
					}
					
					var age = json[0].applicant_siblings_ages;
					var ages = age.split("#");
					if(ages.length  == 6)
					{
						$("#applicant_sibling1_age").val(ages[0]);
						$("#applicant_sibling2_age").val(ages[1]);
						$("#applicant_sibling3_age").val(ages[2]);
						$("#applicant_sibling4_age").val(ages[3]);
						$("#applicant_sibling5_age").val(ages[4]);
						$("#applicant_sibling6_age").val(ages[5]);
					}
					
					var address = json[0].applicant_siblings_addresses;
					var addresses = address.split("#");
					if(addresses.length  == 6)
					{
						$("#applicant_sibling1_address").val(addresses[0]);
						$("#applicant_sibling2_address").val(addresses[1]);
						$("#applicant_sibling3_address").val(addresses[2]);
						$("#applicant_sibling4_address").val(addresses[3]);
						$("#applicant_sibling5_address").val(addresses[4]);
						$("#applicant_sibling6_address").val(addresses[5]);
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
					
					if(json[0].skck_surat_polsek == '' || json[0].skck_surat_polsek == null)
					{
						$("#polsek_file").html('');
						$("#btn_download_polsek").hide();
						$("#btn_del_polsek").hide();
					}
					else
					{
						$("#polsek_file").html(json[0].skck_surat_polsek);
						$("#btn_download_polsek").show();
						$("#btn_del_polsek").show();
					}
					
					if(json[0].skck_surat_desa == '' || json[0].skck_surat_desa == null)
					{
						$("#desa_file").html('');
						$("#btn_download_desa").hide();
						$("#btn_del_desa").hide();
					}
					else
					{
						$("#desa_file").html(json[0].skck_surat_desa);
						$("#btn_download_desa").show();
						$("#btn_del_desa").show();
					}
					
					if(json[0].skck_surat_kecamatan == '' || json[0].skck_surat_kecamatan == null)
					{
						$("#kecamatan_file").html('');
						$("#btn_download_kecamatan").hide();
						$("#btn_del_kecamatan").hide();
					}
					else
					{
						$("#kecamatan_file").html(json[0].skck_surat_kecamatan);
						$("#btn_download_kecamatan").show();
						$("#btn_del_kecamatan").show();
					}
					
					if(json[0].skck_pas_foto == '' || json[0].skck_pas_foto == null)
					{
						$("#foto_file").html('');
						$("#btn_download_foto").hide();
						$("#btn_del_foto").hide();
					}
					else
					{
						$("#foto_file").html(json[0].skck_pas_foto);
						$("#btn_download_foto").show();
						$("#btn_del_foto").show();
					}
					
					if(json[0].skck_pas_foto == null || json[0].skck_pas_foto == '')
						$("#photo").attr('src',BASE_URL + 'assets/images/default-user.png');
					else
						$("#photo").attr('src',BASE_URL + 'uploads/' +json[0].id +'/'+json[0].skck_pas_foto);
					
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
									$('#list1').trigger( 'reloadGrid' );
									
									$("#dialog-form").dialog("close");
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
									$('#list1').trigger( 'reloadGrid' );
									
									$("#dialog-form").dialog("close");
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

