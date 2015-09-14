$(function() {
	listarAfiliados();
    listaPaquetes();
});


function listarAfiliados(){
	var origen = {
			'tipoOrigen' : 'php',
			'rutaObjeto' : sUrlP + 'listarAfiliados',
			'parametro' : ''
		};
		$("#reporte").dtgrid(origen, [ {
			'titulo' : 'Afiliados Al Sistema',
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

function listaPaquetes(){
    //alert(sUrl + "comboPaquetes");
    $.ajax({
        url : sUrl + "/index.php/Principal/comboPaquetes",
        type : "post",
        dataType : "json",
        success : function(data) {//alert(data);
            $.each(data, function(item, valor) {
                $("#paquete").append(new Option(valor,item));
            });
            $("#paquete").append(new Option("Seleccione Paquete", "0"));
            var paq = $("#vaPaquete").val();
            //alert(paq);
            if(paq != ''){
                $("#paquete > option[value="+ paq +"]").attr("selected","selected");
                $("#paquete").attr("readonly",true);
            }
        }
    });
}

function enviar(){
    var paquete = $("#paquete").val();
    var profesion = $("#profesion").val();
    var cadena = "paquete="+paquete+"&profesion="+profesion;
    $.ajax({
        url : sUrlP + "enviaCorreo",
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