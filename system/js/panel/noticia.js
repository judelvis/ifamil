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
    cadena.append('fecha', $('#fecha').val());
    cadena.append('enlace', $('#enlace').val());

    if($('#titulo').val() == ''){

        alert('Debe ingresar los datos');

        return false;
    }
    $('#notificationModal').modal('show');
    //$("#carga_busqueda").dialog('open');
    $.ajax({
        url : sUrlPanel + "registrarNoticia",
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
            listarNoticia();
            limpiar();
        }
    });

}

function listarNoticia(){
    $.ajax({
        url : sUrlPanel + "listarNoticia",
        type : 'POST',
        contentType : false,
        processData : false,
        cache : false,
        dataType : "json",
        success : function(json) {
            if(json['msj'] == 'SI'){
                Grid = new TGrid(json, 'reporte', "");
                Grid.SetNumeracion(true);
                Grid.SetName("Noticias");
                Grid.Generar();
            }else{
                alert("No se ha creado noticia");
            }
        }
    });
}

function limpiar(){
    $("#titulo").val('');
    $("#descrip").val('');
    $("#resumen").val('');
    $("#fecha").val('');
    $("#enlace").val('');

}