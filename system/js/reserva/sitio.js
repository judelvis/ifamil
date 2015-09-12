$(function() {
	listarSitios();
});

function listarSitios() {
	
	alert(sUrlP + 'listarSitios');
	var origen = {
		'tipoOrigen' : 'php',
		'rutaObjeto' : sUrlP + 'listarSitios',
		'parametro' : ''
	};
	$("#reporte").dtgrid(origen, [ {
		'titulo' : 'Rutas de Vuelos',
		'clase' : "",
		'oculto' : [ 1 ],
		'editable' : {
			'c2' : 'texto',
			'c3' : 'texto',
			'c4' : 'texto'
		},
		"accion" : [ {
			"ejecuta" : sUrlP + "modificarSerie",
			"tipo" : "php",
			"clase" : "mdi-action-check-circle",
			"parametro" : []
		} ],
		"boton" : [ {
			"parametro" : [],
			"titulo" : "enviar",
			"ejecuta" : sUrlP + "Exporta_Exel",
			"tipo" : "php",
			"clase" : "mdi-action-done"
		} ]
	} ]);
}