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

$(function() {

    //$("#txt_dni").inputmask({"mask": "99999999"}); //Validar DNI    
    //$("#txt_fnac").inputmask("d/m/y",{ "placeholder": "dd/mm/yyyy" }); //Validar Fecha Nac

    $('#txt_fnac').datepicker({
        format: 'dd/mm/yyyy'
    });

    //buscarEmpresas();

    // Buscar empresas
    $("#tab_buscar").bind({
        click: function() {
            //buscarEmpresas();
        }
    });


    $('#txt_dni').keyup(function() {
        var dni = $('#txt_dni').val();
        if (dni.length == '8') {

            $.ajax({
                type: "POST",
                url: "usuario/validarUsuario/",
                cache: false,
                data: { 
                    'txt_dni':$('#txt_dni').val()
                },
                success: function(data) {
                    if (data=='1'){
                        
                        $("#valerroresctrl").addClass("error");                        
                        $("#valerrores").html('<p class="error help-block"><span class="label label-important">Usuario registrado</span></p>');
                        
                    }
                    
                },
                error: function() {
                    alert("Ha ocurrido un error, vuelva a intentarlo.");
                }
            });

        }
    });

    $("#frmusuario").validate({
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "usuario/ingresarUsuario",
                data: $(form).serialize(),
                success: function(data) {
                    switch (data) {
                        case "0":
                            alert("Error al ingresar los datos");
                            break;
                        case "1":
                            limpiarForm("#frmempresa");
                            alert("Datos ingresados correctamente");
                    }
                },
                error: function(data) {
                    alert("Error inesperado. Consulte con el administrador");
                }
            });
        },
        rules: {
            txt_apellidos: {
                required: true
            },
            txt_nombres: {
                required: true
            },
            txt_dni: {
                required: true,
                number: true,
                minlength: 8,
                maxlength: 8
            },
            cbo_sexo: {
                required: true
            },
            txt_fnac: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            txt_correo: {
                required: true,
                email: true
            },
            txt_usuario: {
                required: true
            },
            txt_contrasena: {
                required: true,
                minlength: 8
            }
        }
    });

});

function buscarEmpresas() {
    $.ajax({
        type: "POST",
        url: "empresas/buscarEmpresas/",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}



function editarEmpresas(nidempresa) {
    if (confirm('Esta seguro de editar este registro?')) {
        $.ajax({
            type: "POST",
            url: "empresas/editarEmpresas/",
            cache: false,
            data: {
                nidempresa: nidempresa
            },
            success: function(data) {
                $("#mostrar_qry").html(data);
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function estadoEmpresas(nidempresa) {
    if (confirm('Esta seguro de cambiar el estado a este registro?')) {
        $.ajax({
            type: "POST",
            url: "empresas/estadoEmpresas/",
            cache: false,
            data: {
                nidempresa: nidempresa
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        break;
                    case "1":
                        buscarEmpresas();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}