$(function() {

});

function verificar(){
    var datos = $("form").serialize();
    $.ajax({
        url : sUrlP + "validarUsuario",
        type : 'POST',
        data : datos,
        success : function(msj) {
            if(msj == 0){
                alert("Usuario o clave invalido");
            }else{
                window.location = sUrlP + "principal";
            }
        }
    });
    return false;
}