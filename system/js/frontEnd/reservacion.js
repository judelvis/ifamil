$(function() {
    $( "#fechaSalida" ).datepicker({
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#fechaLlegada" ).datepicker( "option", "minDate", selectedDate );
        }
    });
    $( "#fechaLlegada" ).datepicker({
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#fechaSalida" ).datepicker( "option", "maxDate", selectedDate );
        }
    });
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        dayNamesShort: ['Dom','Lun','Mar','Mi?','Juv','Vie','S?b'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $("#fecha").datepicker();
    $.datepicker.setDefaults($.datepicker.regional['es']);
    //alert(sUrlP);
    $("#desdeT").autocomplete({
        source:sUrlP+"completarSitio",
        minLength: 2,
        select: function( event, ui ) {
            $("#desde").val(ui.item.oid);
        }
    });
    $("#hastaT").autocomplete({
        source:sUrlP+"completarSitio",
        minLength: 2,
        select: function( event, ui ) {
            $("#hasta").val(ui.item.oid);
        }
    });

    listaEstados();
    listaPaquetes();
    verificarCat();
});

function listaEstados(){
    //alert(sUrlP + "comboEstados");
    $.ajax({
        url : sUrlP + "comboEstados",
        type : "post",
        dataType : "json",
        success : function(data) {//alert(data);
            $.each(data, function(item, valor) {
                $("#estado").append(new Option(valor,item));
            });
            $("#estado").append(new Option("Seleccione Estado", "0"));
        }
    });
}

function listaPaquetes(){
    //alert(sUrlP + "comboPaquetes");
    $.ajax({
        url : sUrlP + "comboPaquetes",
        type : "post",
        dataType : "json",
        success : function(data) {//alert(data);
            $.each(data, function(item, valor) {
                $("#paquete").append(new Option(valor,item));
            });
            $("#paquete").append(new Option("Seleccione Paquete", "0"));
        }
    });
}

function buscarDestino(){
    alert("por asignar lista");
}

function verificarCat(){
    var cat = $("#categoria").val();
    switch (cat){
        case '1': $("#divTransporte").toggleClass('hide');$("#tituloPagina").html(" TU TRASNPORTE");
            break;
        case '2': $("#divViajes").toggleClass('hide');$("#tituloPagina").html(" TU VUELO");
            break;
        case '3': $("#divHotel").toggleClass('hide');$("#tituloPagina").html(" TU HOSPEDAJE");
            $("#fechaSalida").attr("placeholder","Fecha De Entrada");$("#fechaLlegada").attr("placeholder","Fecha De salida");
            break;
        case '4': $("#divPaquete").toggleClass('hide');$("#tituloPagina").html(" TU PAQUETE");
            break;
        default: alert(cat);
    }
}

function verificaVuelta(){
    var check = $("#vuelta").is(':checked')
    //alert(check);
    if(check){
        $("#fechaLlegada").attr("disabled",false);
    }else{
        $("#fechaLlegada").attr("disabled","disabled");
        $("#fechaLlegada").val("");
    }
}

function guardar(){
    $datos = $("form").serialize();
    alert($datos);
    var ruta = "Principal/registrarAfiliado";
    $.ajax({
        url : sUrlR + ruta,
        type : "post",
        //dataType : "json",
        success : function(data) {//alert(data);
            alert(data);
        }
    });
    return false;
}