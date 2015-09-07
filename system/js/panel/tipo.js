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
    var origen={'tipoOrigen': 'php', 'rutaObjeto': sUrlPanel+'listarTipo','parametro':''};
    $("#reporte").dtgrid(origen,[{
            'titulo': 'Categorias',
            'clase' : "",
            'oculto':[1],
            'editable': {'c2': 'texto', 'c3': 'texto'},
            "accion": [{
                "ejecuta": sUrlPanel+"modTipo",
                "tipo": "php",
                "clase": "mdi-content-save",
                "parametro": [],
                //"ocultar":true
            }],
            "boton":
                [{"parametro":[],"titulo":"enviar","ejecuta":sUrlPanel+"Exporta_Exel","tipo":"php","clase":"mdi-action-done"}]
        }]
    );
}