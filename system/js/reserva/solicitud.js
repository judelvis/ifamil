/**
 * 
 * Fecha Creacion: 09 de Octubre de 2015
 * @author mamonsoft.ca-crash (Carlos Peña)
 */


$(function() {


listarSolicitud();

});

/**
 * 
 */

function listarSolicitud() {
	var origen = {
		'tipoOrigen' : 'php',
		'rutaObjeto' : sUrlP + 'listarSolicitud',
		'parametro' : ''
	};
	$("#reporte").dtgrid(origen, [ {
		'titulo' : '',
		'clase' : "",
		'oculto' : [ 1 ],
		'editable' : {
			'c7' : 'texto' //Observaciones
		},
		"paginador": 20,
		"accion" : [ {
			"ejecuta" : sUrlP + "modificarSerie",
			"tipo" : "php",
			"clase" : "mdi-action-check-circle",
			"parametro" : [],
<<<<<<< HEAD
=======
		},{
            "ejecuta" : "enviar",
            "tipo" : "script",
            "clase" : "mdi-communication-email",
            "parametro" : [4],
        } ],
		"boton" : [ {
			"parametro" : [],
			"titulo" : "enviar",
			"ejecuta" : sUrlP + "Exporta_Exel",
			"tipo" : "php",
			"clase" : "mdi-action-done"
>>>>>>> c4037cfe87a0c924e09ed596fd1bd823be70d612
		} ]
	} ]);
}

function enviar(correo){

    $("#correo").val(correo);
    $("#enviar").openModal();
}

function enviarCorreo(){
    var mensaje = $("#mensaje").val();
    var correo = $("#correo").val();
    //alert(mensaje);
    if(mensaje == ''){
        alert("Ingrese mensaje a enviar por correo");
        return false;
    }
    var cadena = "mensaje="+mensaje+"&correo="+correo;
    $.ajax({
        url : sUrlP + "enviarRespuesta",
        type : 'POST',
        data : cadena,
        success : function(msj) {
            alert(msj);
            $('form').each(function () {
                this.reset();
            });
        }
    });
}