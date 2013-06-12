$(function() {


    buscarEmpresas();

    // Buscar empresas
    $("#tab_buscar").bind({
        click: function() {
            buscarEmpresas();
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
            $('#mostrar_qry').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><span>Error!! Problemas al cargar los datos.</span></div>');
        }
    });
}



function editarEmpresas(nidempresa) {    
    alert(nidempresa);
}

function estadoEmpresas(nidempresa) {
    alert(nidempresa);    
}