$(function() {

});

function verificar(){
    var datos = $("form").serialize();
    //alert(datos + "--"+sUrlPanel);
    $.ajax({
        url : sUrlPanel + "validarUsuario",
        type : 'POST',
        data : datos,
        success : function(msj) {
            //alert(msj);
            if(msj == 0){
                alert("Usuario o clave invalido");
            }else{
                window.location = sUrlPanel+"principal";
            }
        }
    });
    return false;
}