/**
 * Created by breyner on 14/09/15.
 */
function guardar(){
    datos = $("form").serialize();
    //alert(datos);

    $.ajax({
        url : sUrlP + 'enviarOpinion',
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