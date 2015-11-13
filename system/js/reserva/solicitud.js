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
		'oculto' : [ 1,3,5,6 ],
		'editable' : {
			'c7' : 'texto'
		},		
		"accion" : [ {
			"ejecuta" : sUrlP + "modificarSerie",
			"tipo" : "php",
			"clase" : "mdi-action-check-circle",
			"parametro" : []
		},{
            "ejecuta" : "enviar",
            "tipo" : "script",
            "clase" : "mdi-communication-email",
            "parametro" : [4],
        } ],
        "detalle": {
        	"tipo": "post",
        	"ruta": sUrlP + 'listarDetalleSolicitud',
        	"parametro": [1]
        }
		
	} ]);
}

function enviar(correo){

    $("#correo").val(correo);
    $("#enviar").openModal();
}

function enviarCorreo(){
    var mensaje = $("#mensaje").val();
    var correo = $("#correo").val();
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
            $("#enviar").closeModal();
            $('form').each(function () {
                this.reset();
            });
        }
    });
}