var sUrl = 'http://' + window.location.hostname + '/ifamil';
var sUrlP = sUrl + '/index.php/Principal/';
var sUrlR = sUrl + '/index.php/Reserva/';
var sUrlPanel = sUrl + '/index.php/Panel/';
var sImg = sUrl + '/system/img/';
var sMaq = sUrl + '/system/maq/';
var slide = sUrl + '/system/slide/';
function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function include(url){
    document.write('<script src="'+sMaq+url+'"></script>');
    return false ;
}

$(document).ready(function(e) {
    var mozillaPresente = false,
        mozilla = (function detectarNavegador(navegador) {
            if(navegador.indexOf("Firefox") != -1 ) {
                mozillaPresente = true;
            }
        })(navigator.userAgent);
    function darEfecto(efecto) {
        el = $('.cajainterna');
        el.addClass(efecto);
        el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
            function (e) {
                el.removeClass(efecto);
            });
    }
    function mostrar(e) {
        $(".cajaexterna").show();
        darEfecto("bounceIn");
    }
    function ocultar() {
        $(".cajaexterna").fadeOut("fast", function() {
            if(mozillaPresente) {
                setTimeout(function() {
                    $(".cajainterna").removeClass("bounceIn");
                }, 5);
            }
        });
    }
    $("a.mostrarmodal").click(mostrar);
    $("a.cerrarmodal").click(ocultar);
});
