$(function() {
	alert(1);
	listarVuelos();
});

function listarVuelos() {
	alert(1);
	var origen = {
		'tipoOrigen' : 'php',
		'rutaObjeto' : sUrlP + 'listarVuelos',
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
			"ejecuta" : sUrlPanel + "modificarSerie",
			"tipo" : "php",
			"clase" : "mdi-action-check-circle",
			"parametro" : [],
			"texto" : "Guardar",
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