/**
 * Desarrollado por: Judelvis Antonio Rivas Perdomo
 * Fecha Creacion: 09 de Noviembre de 2014
 */

$(function() {
    cmbTipo();
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
	listarSerie();
});

function cmbTipo() {
    $.ajax({
        url : sUrlPanel + 'cmbTipo',
        dataType : 'JSON',
        success : function(json) {//alert(json);
            $.each(json, function(item, valor) {
                $("#categoria").append(new Option(valor, item, false, true));
            });
            $("#categoria").append(new Option('Seleccione Categoria', 0, false, true));
        }
    });
}

function limpiar(){
	$("#nombre").val('');
	$("#descrip").val('');
    $("#resumen").val('');
	$("#fecha").val('');
}

function Registrar() {
	var nombre = $("#titulo").val();
	var descrip = $("#descrip").val();
	var fecha = $("#fecha").val();
    var resumen = $("#resumen").val();
    var cadena = new FormData();
	cadena.append('titulo', nombre);
	cadena.append('descrip',descrip);
	cadena.append('fecha',fecha);
    cadena.append('resumen',resumen);
    cadena.append('oidcat', $('#categoria').val());

	if(nombre == '' || descrip == '' || fecha == '' ){
		alert("Debe ingresar todos los datos");
		return false;
	}
	$.ajax({
		url : sUrlPanel + "registrarSerie",
		type : 'POST',
		data : cadena,
		contentType : false,
		processData : false,
		cache : false,
		success : function(oid) {
			alert('Se registro con exito');
			limpiar();
			window.location = sUrlPanel+"agregarGaleria/"+oid;
		}
	});
	return false;
	
}

function listarSerie(){//alert(sUrlP);
    var datosCombo = {'0': 'Activo', '1': 'Inactivo'};
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'listarSerie','parametro':''};
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Categorias',
            'clase' : "",
            'oculto':[1],
            'editable': {'c2': 'texto', 'c3': 'texto', 'c4': 'texto', 'c6': datosCombo},
            "accion": [{
                "ejecuta": sUrlPanel+"modificarSerie",
                "tipo": "php",
                "clase": "mdi-content-save",
                "parametro": [],
                "texto":"Guardar",
                //"ocultar":true
            }],
            "boton":
                [{"parametro":[],"titulo":"enviar","ejecuta":sUrlPanel+"Exporta_Exel","tipo":"php","clase":"mdi-action-done"}]
        }]
    );
}