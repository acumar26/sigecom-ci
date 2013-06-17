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
    
    $("#frmupdempresa").validate({
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "empresas/actualizarEmpresas",
                data: $(form).serialize(),
                success: function(data) {
                    switch (data) {
                        case "0":
                            alert("Error al ingresar los datos");
                            break;
                        case "1":
                            limpiarForm("#frmempresa");
                            alert("Datos actualizados correctamente");
                            buscarEmpresas();
                    }
                },
                error: function(data) {
                    alert("Error inesperado. Consulte con el administrador");
                }
            });
        },
        rules: {
            txte_empresa: {
                required: true
            },
            txte_alias: {
                required: true
            }
        }
    });
    

});

