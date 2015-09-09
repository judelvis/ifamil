/**
 * Desarrollado por: Judelvis Antonio Rivas Perdomo
 * Fecha Creacion: 09 de Noviembre de 2014
 */

$(function() {
	cmbSerie();
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

function cmbSerie() {
	//alert(sUrlP);
	$.ajax({
		url : sUrlPanel + 'cmbSerie',
		dataType : 'JSON',
		success : function(json) {
			$.each(json, function(item, valor) {
				$("#serie").append(new Option(item+' | '+valor, item, false, true));
			});
			$("#serie").append(new Option('Seleccione Producto', 0, false, true));
		}
	});
}


function registrar() {
	//alert(1);
	var archivoImagen = document.getElementById("imagen");
	var imagen = archivoImagen.files[0];
	var cadena = new FormData();

	cadena.append('imagen', imagen);
	cadena.append('oidpor', $('#serie').val());
    cadena.append('titulo', $('#titulo').val());
    cadena.append('detalle', $('#detalle').val());
    cadena.append('fecha', $('#fecha').val());
    cadena.append('enlace', $('#enlace').val());
	
	if($('#serie').val() == 0){
		
		alert('Debe elegir un servicio');
		
		return false;
	}
	$('#notificationModal').modal('show');
	//$("#carga_busqueda").dialog('open');
	$.ajax({
		url : sUrlPanel + "registrarGaleria",
		type : 'POST',
		data : cadena,
		contentType : false,
		processData : false,
		cache : false,
		success : function(msj) {
			alert(msj);
			//alert(msj);
			consultar();
			limpiar();
		}
	});

}

function consultar(){//alert(1);
	$("#imagenes").html('');
	$("#reporte").html('');
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'consultarGaleria','parametro':'id='+$('#serie').val()};
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Galeria',
            'clase' : "",
            'oculto':[1,3],
            //'editable': {'c2': 'texto', 'c3': 'texto', 'c4': 'texto', 'c6': datosCombo},
            "accion": [{
                "ejecuta": sUrlPanel+"eliminarGaleria",
                "tipo": "php",
                "clase": "mdi-action-highlight-remove",
                "parametro": [1,2],
                "texto":"Eliminar"
                //"ocultar":true
            }],
            "boton":
                [{"parametro":[],"titulo":"enviar","ejecuta":sUrlPanel+"Exporta_Exel","tipo":"php","clase":"mdi-action-done"}]
        }]
    );
}

function limpiar(){
    $('#imagen').val('');
    $('#oidser').val('');
    $('#oidcat').val('');
    $('#titulo').val('');
    $('#detalle').val('');
    $('#fecha').val('');
    $('#enlace').val('');
}