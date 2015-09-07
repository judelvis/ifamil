/**
 * 
 * Fecha Creacion: 09 de Octubre de 2015
 * @author mamonsoft.ca-crash (Carlos Peña)
 */

var sUrl = 'http://' + window.location.hostname + '/ifamil';
var sUrlP = sUrl + '/index.php/Reserva/Panel/';
var sImg = sUrl + '/system/img/';
 

$(function() {
  $('#msj_alertas').dialog({
    modal : true,
    autoOpen : false,
    width : 260,
    height : 160,
    buttons : {
      "Cerrar" : function() {
        $(this).dialog("close");
      },
    }
  });


  listarVuelos();

});

function listarVuelos() {
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
			'c1' : 'texto',
			'c2' : 'texto',
			'c3' : 'texto'
		},
		"paginador": 10,
		"accion" : [ {
			"ejecuta" : sUrlP + "modificarSerie",
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
