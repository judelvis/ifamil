$(function() {
    $( "#fechadeSalida" ).datepicker({
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#fechadeLlegada" ).datepicker( "option", "minDate", selectedDate );
        }
    });
    $( "#fechadeLlegada" ).datepicker({
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#fechadeSalida" ).datepicker( "option", "maxDate", selectedDate );
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
        dateFormat: 'yy/mm/dd',
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

    $("#paqueteT").autocomplete({
        source:sUrlP+"completarPaquete",
        minLength: 2,
        select: function( event, ui ) {
            $("#paquete").val(ui.item.oid);
        }
    });

    listaEstados();
    verificarCat();
});

function listaEstados(){
    alert(sUrlP + "comboEstados");
    $.ajax({
        url : sUrlP + "comboEstados",
        type : "post",
        //dataType : "json",
        success : function(data) {alert(data);
            $.each(data, function(item, valor) {
                $("#estado").append(new Option(valor,item));
            });
            $("#estado").append(new Option("Seleccione Estado", "0"));
        }
    });
}

function verificarCat(){
    var cat = $("#categoria").val();
    switch (cat){
        case '1': $("#divTransporte").toggleClass('hide');break;
        case '2': $("#divViajes").toggleClass('hide');break;
        case '3': $("#divHotel").toggleClass('hide');break;
        case '4': $("#divPaquete").toggleClass('hide');break;
        default: alert(cat);
    }
}