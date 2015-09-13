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
		} ]
	} ]);
}