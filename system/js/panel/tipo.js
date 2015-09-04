/**
 * Desarrollado por: Judelvis Antonio Rivas Perdomo
 * Fecha Creacion: 09 de Noviembre de 2014
 */
$(function() {
	listarTipo();
});

function limpiar(){
	$("#categoria").val('');
    $("#descrip").val('');
}

function Registrar() {
	var nombre = $("#categoria").val();
    var descrip = $("#descrip").val();

	var cadena = new FormData();
	cadena.append('categoria', nombre);
    cadena.append('descrip', descrip);

	if(nombre == ''){
		alert("Debe ingresar una categoria");
		return false;
	}
	
	$.ajax({
		url : sUrlPanel + "registrarTipo",
		type : 'POST',
		data : cadena,
		contentType : false,
		processData : false,
		cache : false,
		success : function(msj) {
			alert(msj);
			limpiar();
			listarTipo();
		}
	});
	
}

function listarTipo(){
    alert(1);
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'listarTipo','parametro':'para=1'};
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Categorias',
            "filtro":[2],
            'clase' : "brown darken-4  light-green-text lighten-4-text",
            'editable': {'c2': 'texto', 'c3': 'texto'},
            "accion": [{
                "ejecuta": "primera_funcion",
                "tipo": "script",
                "clase": "mdi-action-store",
                "parametro": [],
                "ocultar":true
            }]
        }]
    );
    alert(sUrlPanel);
	/*$.ajax({
		url : sUrlPanel + "listarTipo",
		type : "POST",
		dataType : "json",
		success : function(json) {
			if(json['msj']==1){
				var Grid1 = new TGrid(json, 'reporte','');
				//Grid1.SetNumeracion(true);
				Grid1.SetName("tp");
				//Grid1.SetXls(true);
				Grid1.Generar();
			}else $("#reporte").html("No posee tipos creados");
		}
	});*/
}