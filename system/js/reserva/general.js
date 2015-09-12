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


 

});

