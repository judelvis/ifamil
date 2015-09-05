/**
 * Created by judprog on 07/05/15.
 */
/**
 * Desarrollado por: Judelvis Antonio Rivas Perdomo
 * Fecha Creacion: 09 de Noviembre de 2014
 */

$(function() {
    listarEmpresas();
});

function registrar() {
    //alert(1);
    var archivoImagen = document.getElementById("imagen");
    var imagen = archivoImagen.files[0];
    var cadena = new FormData();

    cadena.append('imagen', imagen);
    cadena.append('empresa', $('#empresa').val());
    if($('#empresa').val() == ''){

        alert('Debe ingresar empresa');

        return false;
    }
    $('#notificationModal').modal('show');
    //$("#carga_busqueda").dialog('open');
    $.ajax({
        url : sUrlPanel + "registrarEmpresa",
        type : 'POST',
        data : cadena,
        contentType : false,
        processData : false,
        cache : false,
        success : function(msj) {
            $('#notificationModal').modal('hide');
            $("#modal_mensaje").html(msj);
            $("#msj_alertas").modal('show');
            //alert(msj);
            listarEmpresas();
            limpiar();
        }
    });

}

function listarEmpresas(){
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'listarEmpresa','parametro':''};
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Publicidad a Empresas',
            'clase' : "",
            'oculto':[1],
            //'editable': {'c2': 'texto', 'c3': 'texto', 'c4': 'texto', 'c6': datosCombo},
            "accion": [{
                "ejecuta": sUrlPanel+"eliminarEmpresa",
                "tipo": "php",
                "clase": "mdi-action-highlight-remove",
                "parametro": [1],
                "texto":"Eliminar"
                //"ocultar":true
            }],
            "boton":
                [{"parametro":[],"titulo":"enviar","ejecuta":sUrlPanel+"Exporta_Exel","tipo":"php","clase":"mdi-action-done"}]
        }]
    );
}

function limpiar(){
    $("#empresa").val('');
    $("#imagen").val('');

}