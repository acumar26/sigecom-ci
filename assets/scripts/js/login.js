$.validator.setDefaults(
    {
        submitHandler: function() {
            alert("submitted!");
        },
        showErrors: function(map, list) 
        {
            this.currentElements.parents('label:first, .controls:first').find('.error').remove();
            this.currentElements.parents('.control-group:first').removeClass('error');
		
            $.each(list, function(index, error) 
            {
                var ee = $(error.element);
                var eep = ee.parents('label:first').length ? ee.parents('label:first') : ee.parents('.controls:first');
			
                ee.parents('.control-group:first').addClass('error');
                eep.find('.error').remove();
                eep.append('<p class="error help-block"><span class="label label-important">' + error.message + '</span></p>');
            });
        //refreshScrollers();
        }
});

$(function()
{    
 
    $("#frmlogin").validate({			
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url: "login/enviardatos",
                data: $(form).serialize(),
                success: function(data){                       
                     switch (data) {
                        case "0":
                            $('#mensaje').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><span>Error!! Verifique sus credenciales.</span></div>');                            
                            break;
                        default:
                            $('#mensaje').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><span>Listo!! Bienvenido al sistema.</span></div>');   
                            administracion();
                    }                          
            },
            error: function(data){
                alert('Error!! Consulte con el administrador');
            }
            });
    },            
    rules: {
        txt_usuario: {
            required: true
        },
        txt_contrasena: {
            required: true
        }
    }
    });    
	
});

function administracion(){
    location.href = "dashboard/index";
}