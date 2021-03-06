/**
 * Created by judprog on 07/05/15.
 */
/**
 * Desarrollado por: Judelvis Antonio Rivas Perdomo
 * Fecha Creacion: 09 de Noviembre de 2014
 */

$(function() {
    listarNoticia();
    $('.datepicker').pickadate({
        labelMonthNext: '>>',
        labelMonthPrev: '<<',
        labelMonthSelect: 'Seleccione un mes',
        labelYearSelect: 'Seleccione un año',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        weekdaysLetter: ['D', 'L', 'M', 'I', 'J', 'V', 'S'],
        today: 'Hoy',
        clear: 'Limpiar',
        close: 'Cerrar',
        selectYears: 15,
        selectMonths: true,
        format: 'yyyy-mm-dd'
    });
});

function registrar() {
    //alert(1);
    var archivoImagen = document.getElementById("imagen");
    var imagen = archivoImagen.files[0];
    var cadena = new FormData();

    cadena.append('imagen', imagen);
    cadena.append('titulo', $('#titulo').val());
    cadena.append('descrip', $('#descrip').val());
    cadena.append('resumen', $('#resumen').val());
    cadena.append('titulo_i', $('#titulo_i').val());
    cadena.append('descrip_i', $('#descrip_i').val());
    cadena.append('resumen_i', $('#resumen_i').val());
    cadena.append('fecha', $('#fecha').val());
    cadena.append('enlace', $('#enlace').val());

    if($('#titulo').val() == ''){

        alert('Debe ingresar los datos');

        return false;
    }
    $('#notificationModal').modal('show');
    //$("#carga_busqueda").dialog('open');
    //alert(sUrlPanel + "registrarNoticia");
    $.ajax({
        url : sUrlPanel + "registrarNoticia",
        type : 'POST',
        data : cadena,
        contentType : false,
        processData : false,
        cache : false,
        success : function(msj) {//alert(msj);
            alert(msj);
            //alert(msj);
            listarNoticia();
            limpiar();
        }
    });

}

function listarNoticia(){
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'listarNoticia','parametro':''};
    $("#reporte").html('');
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Noticias',
            'clase' : "",
            'oculto':[1,2],
            'editable': {'c3': 'texto', 'c4': 'texto','c5':'texto','c6': 'texto', 'c7': 'texto','c8':'texto'},
            "accion": [{
                "ejecuta": sUrlPanel+"eliminarNoticia",
                "tipo": "php",
                "clase": "mdi-action-highlight-remove",
                "parametro": [1,2],
                "texto":"Eliminar"
                //"ocultar":true
            },{
                "ejecuta": sUrlPanel+"modificarNoticia",
                "tipo": "php",
                "clase": "mdi-content-save",
                "texto":"Guardar",
                "parametro": [1,3,4,5,6,7,8]}]
            }]
    );
}

function limpiar(){
    $("#titulo").val('');
    $("#descrip").val('');
    $("#resumen").val('');
    $("#fecha").val('');
    $("#enlace").val('');
}