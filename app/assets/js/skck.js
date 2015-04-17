$(function() {

    $.validator.addMethod(
        "IDDate",
        function(value, element) {
            return value.match(/^\d\d?\-\d\d?\-\d\d\d\d$/);
        },
        "Gunakan format tanggal (00-00-0000)"
    );
    var $validator = $("#newForm").validate({
    
        rules: {
            polda: "required",
            fullname: {
              required: true,
              minlength: 3
            },
            tempatlahir: "required",
            tgllahir: {
              required: true,
              IDDate: true
            },
            agama: "required",
            kebangsaan: "required",
            kelamin: "required",
            status: "required",
            pekerjaan: "required",
            alamat: "required",
            ktp: {
                required: true,
                number: true
            },
            telp: {
                number: true
            },
            umurhubunganpasangan: {
                number: true
            },
            namahubunganayah: {
                required: true
            },
            umurhubunganayah: {
		required: true,
                number: true
            },
            agamahubunganayah: {
                required: true
            },
	    kebangsaanhubunganayah: {
                required: true
            },
            namahubunganibu: {
                required: true
            },
            umurhubunganibu: {
		required: true,
                number: true
            },
	    kebangsaanhubunganibu: {
                required: true
            },
            agamahubunganibu: {
                required: true
            },
	    rambut: "required",
                wajah: "required",
                kulit: "required",
                tinggibadan: "required",
                beratbadan: "required",
                tandaistimewa: "required",
                filektp: {
                    required: true
                },
                filepaspor: {
                    required: true
                },
                filekk: {
                    required: true
                },
                fileakte: {
                    required: true
                },
                filepasporwna: {
                    required: true
                },
                filekitaswna: {
                    required: true
                },
                filesponsorwna: {
                    required: true
                },
                filesuratnikahwna: {
                    required: true
                },
                filesuratlaporwna: {
                    required: true
                }
        },
        
        messages: {
            polda: "Data POLDA wajib di pilih / This field is required",
            fullname: "Kolom wajib di isi / This field is required",
            tempatlahir: "Kolom wajib di isi / This field is required",
            tgllahir:{
                required: "Kolom wajib di isi / This field is required",
                IDDate: "Silahkan gunakan format tanggal (00-00-0000) / Please enter a valid date (00-00-0000)"
            },
            agama: "Kolom wajib di pilih / This field is required",
            kebangsaan: "Kolom wajib di pilih / This field is required",
            kelamin: "Kolom wajib di pilih / This field is required",
            status: "Kolom wajib di pilih / This field is required",
            pekerjaan: "Kolom wajib di isi / This field is required",
            alamat: "Kolom wajib di isi / This field is required",
            ktp:{
                required: "Kolom wajib di isi / This field is required",
                number: "Silahkan gunakan nomor / Please enter a valid number",  
            },
            telp:{
                number: "Silahkan gunakan nomor / Please enter a valid number",
            },
            umurhubunganpasangan: {
                number: "Silahkan gunakan nomor / Please enter a valid number",
            },
            namahubunganayah: {
                required: "Kolom wajib di isi / This field is required",
            },
            umurhubunganayah: {
		required: "Kolom wajib di isi / This field is required",
                number: "Silahkan gunakan nomor / Please enter a valid number",
            },
	    kebangsaanhubunganayah: {
                number: "Kolom wajib di isi / This field is required",
            },
            agamahubunganayah: {
                required: "Kolom wajib di pilih / This field is required",
            },
            namahubunganibu: {
                required: "Kolom wajib di isi / This field is required",
            },
            umurhubunganibu: {
		required: "Kolom wajib di isi / This field is required",
                number: "Silahkan gunakan nomor / Please enter a valid number",
            },
            kebangsaanhubunganibu: {
                number: "Kolom wajib di isi / This field is required",
            },
            agamahubunganibu: {
                required: "Kolom wajib di pilih / This field is required",
            },
	    rambut: "Kolom wajib di pilih / This field is required",
                wajah: "Kolom wajib di pilih / This field is required",
                kulit: "Kolom wajib di pilih / This field is required",
                tinggibadan: "Kolom wajib di pilih / This field is required",
                beratbadan: "Kolom wajib di pilih / This field is required",
                tandaistimewa: "Kolom wajib di pilih / This field is required",
                filektp: {
                    required: "File wajib di isi / This field is required"
                },
                filepaspor: {
                    required: "File wajib di isi / This field is required"
                },
                filekk: {
                    required: "File wajib di isi / This field is required"
                },
                fileakte: {
                    required: "File wajib di isi / This field is required"
                },
                filepasporwna: {
                    required: "File wajib di isi / This field is required"
                },
                filekitaswna: {
                    required: "File wajib di isi / This field is required"
                },
                filesponsorwna: {
                    required: "File wajib di isi / This field is required"
                },
                filesuratnikahwna: {
                    required: "File wajib di isi / This field is required"
                },
                filesuratlaporwna: {
                    required: "File wajib di isi / This field is required"
                }
        }
    });

	$('#rootwizard').bootstrapWizard({
		'tabClass': 'nav nav-pills nav-justified',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
        'onNext': function(tab, navigation, index) {
            var $valid = $("#newForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
        onShow:   function(tab, navigation,index){
        },
         onInit : function(tab, navigation,index){
         
           //check number of tabs and fill the entire row
           var $total = navigation.find('li').length;
           $width = 100/$total;
           
           $display_width = $(document).width();
           
           if($display_width < 400 && $total > 3){
               $width = 50;
           }
           navigation.find('li').css('width',$width + '%');
        },
         onTabClick : function(tab, navigation, index){
            
            return false;
        }, 
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            
            var wizard = navigation.closest('#newForm');
            
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }
        
        
    });

	// Add and Remove field
    var max_fields      = 10;
    var wrapper         = $(".input_fields_wrap");
    var add_button      = $(".add_field_button");
    
    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div class="form-group"><div class="col-sm-3"><input type="text" class="form-control" name="namahubungansaudara[]" placeholder="Nama / Name"></div><div class="col-sm-2"><input type="text" class="form-control" name="umurhubungansaudara[]" placeholder="Umur / Age"></div><div class="col-sm-2"><input type="text" class="form-control" name="pekerjaanhubungansaudara[]" placeholder="Pekerjaan / Job"></div><div class="col-sm-4"><input type="text" class="form-control" name="alamathubungansaudara[]" placeholder="Alamat / Address"></div><a href="#" class="remove_field btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a></div>');
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });


    var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#status');

    var options = { 
        target:        '#output1',   // target element(s) to be updated with server response 
        beforeSubmit:  showRequest,  // pre-submit callback 
        uploadProgress: progress,
        success:       showResponse,  // post-submit callback 
 
        // other available options: 
        url:       URL_+"main/test",         // override for form's 'action' attribute 
        type:      'post',        // 'get' or 'post', override for form's 'method' attribute 
        dataType:  'json',        // 'xml', 'script', or 'json' (expected server response type) 
        // clearForm: true        // clear all form fields after successful submit 
        // resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 
 
    //$('#newForm').ajaxForm(options);

    function showRequest(formData, jqForm, options) { 

    	$(".loading").fadeIn("normal");
    	$(".btn-finish").hide();
        $(".progress").show();

        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);

	    var queryString = $.param(formData); 
	 
	    return true; 
	}

    function progress(event, position, total, percentComplete) { 

        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    } 
	 
	// post-submit callback 
	function showResponse(data, xhr, $form)  { 
	   
	 	$(".loading").fadeOut("normal");

	 	
	    if(data.msg['response']===true){

            status.html(xhr.responseText);
            $(".progress").hide();

           	$("#kode-registrasi").val(data.msg['code']);
            $("#codeModal").modal('show');

            $("#unduhpdf").click(function () {
                window.location.href = URL_+"formulir/pdf/"+data.msg['code'];
            })

            $("#close").click(function () {
            	$("#codeModal").modal('hide').fadeOut("1000");
                window.setTimeout(function() {
                    window.location.href = URL_;
                }, 2000);
            })

        }
    }

    var $login = $("#loginForm").validate({
        
        rules: {
            noreg: "required"
        },  
        messages: {
            noreg: "Kode Reg. wajib di isi / This field is required"
        },
        submitHandler: function(form) {

            var dataPost = $("#loginForm").serialize();

            $.ajax({
                type : "POST",
                beforeSend: function() {
                    $("#loginLoading").show();
                    $("#inputLogin").hide();
                },
                data : dataPost,
                url : URL_+"login/",
                dataType: "json",
                success : function(res){

                    if(res.msg['response']===true){
                        $("#loginModal").modal('hide').empty();
                        window.location.href="?"+res.msg['key'];
                    } else {
                        $("#login").hide();
                        $("#loginLoading").hide();
                        $("#loginFail").show();
                        $("#loginFail").find('p').text(res.msg['response']);
                    }
                }

            });
        }

    });

    $("#loginLoading").hide();
    $("#loginFail").hide();
    $("#loginBack").hide();

});