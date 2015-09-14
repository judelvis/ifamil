function guardar(){
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var telefono = $("#codTel").val()+"-"+$("#telefono").val();
    var mensaje = $("#mensaje").val();
    var datos = "nombre="+nombre+"&correo="+correo+"&telefono="+telefono+"&mensaje="+mensaje;
    //alert(datos+sUrlP);
    $.ajax({
        url : sUrlP + 'enviarContacto',
        type : "post",
        //dataType : "json",
        data:datos,
        success : function(data) {//alert(data);
            alert(data);
            $('form').each(function () {
                this.reset();
            });
        }
    });
    return false;
}
function verificarCodigo(){
    var cod=$("#codTel").val();
    if(cod=="otros"){
        $("#telefono").attr("maxlength","11")
    }
    else{ $("#telefono").attr("maxlength","7")}
}