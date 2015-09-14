$(function() {
	listarSitios();
});

function listarSitios() {
	//alert(sUrlP + 'listarSitios');
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
		} ]
	} ]);
}

function registrar() {
    var nom = $("#nom").val();
    var cod = $("#cod").val();
    var est = $("#est").val();
    var cadena = "nom="+nom+"&cod="+cod+"&est="+est;
    if(nom == '' || cod=='' || est == ''){
        alert("Debe ingresar todo los datos.");
        return false;
    }
    //alert(sUrlP+ "registrarSitio"+cadena);
    $.ajax({
        url : sUrlP + "registrarSitio",
        type : 'POST',
        data : cadena,
        success : function(msj) {
            alert(msj);
            listarSitios();
            $('form').each(function () {
                this.reset();
            });
        }
    });
    return false;
}