<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>IFAMIL</title>
    <link rel="shortcut icon" type="image/x-icon" style="width: 100%; height: 100%" href="<?php echo __IMG__?>images/favi.ico">
    <meta charset="UTF-8" />
    <!-- Bootstrap -->
    <link href="<?php echo __MAQ__ ?>css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="<?php echo __MAQ__ ?>css/blue.css" rel="stylesheet" type="text/css" media="all"/>
    <!----font-Awesome----->
    <link rel="stylesheet" href="<?php echo __MAQ__ ?>fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo __MAQ__ ?>jquery/jquery-ui.css">
    <!----font-Awesome----->
    <!-- start plugins -->
    <script type="text/javascript" src="<?php echo __MAQ__ ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo __JSVIEW__; ?>jquery/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="<?php echo __MAQ__ ?>js/bootstrap.min.js"></script>

    <script>
        jQuery(function () {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })

        });
    </script>
    <!-- Owl Carousel Assets -->
</head>
<?php
$actual = str_replace("/","-",uri_string());
$cerrar = site_url("Principal/cerrar").'/'.$actual;
$idioma = site_url("Principal/idioma").'/'.$actual;
$subir="Volver Arriba";$home = 'Inicio';$quien='Quienes Somos';$paq = 'Paquetes';$afi = 'Afiliate';$con ='Contactenos';$not = "Noticias";$ser = "Servicios";
$bandera = '<div style="float: right;"><a class="btn-link" href="'.$idioma.'">
<img  style="float: left" src="'.__IMG__ .'images/ingles.png" class="img-responsive"></a></div>';
if(isset($_SESSION['idioma']) && $_SESSION['idioma']=='_i'){
    $subir="Back to Top";$home = 'Home';$quien='Who we are';$paq = 'Packages';$afi = 'Register';$con ='Contact Us';$not = "News";$ser = "Services";
    $bandera = '<div style="float: right;z-index: 0;"><a class="" href="'.$cerrar.'">
    <img  style="float: left" src="'.__IMG__ .'images/vene2.png" class="img-responsive"></a></div>';
}?>
<body>
<div class="container1">
    <div class="row">
<a href="#" class="back-to-top"><?php echo $subir;?></a>
        <div class="row3">
    <div class="col-xs-6 col-sm-3">
        <img src="<?php echo __IMG__ ?>images/logo12.png" class="img-responsive">
    </div>
    <div class="col-xs-6 col-sm-3">
        <img src="<?php echo __IMG__ ?>images/banner5.png">
    </div>
    <div class="col-xs-6 col-sm-4"></div>
    <div class="col-xs-6 col-sm-2">
        <br>
        <?php echo $bandera;?>
    </div>
</div>
    <div class="header_bg x">
        <div class="container">

            <div class="header">
                <div class="h_menu">
                    <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                    <nav>
                        <ul class="menu list-unstyled">
                            <li><a href="<?php echo base_url("index.php/Principal/index")?>"><?php echo $home;?></a></li>
                            <li><a href="<?php echo base_url("index.php/Principal/nosotros")?>"><?php echo $quien;?></a></li>
                            <li><a href="<?php echo base_url("index.php/Principal/paquetes/4")?>"><?php echo $paq;?></a>
                            <ul class="sub-menu list-unstyled">
                                <li><a href="<?php echo base_url("index.php/Principal/viajeV")?>">Viaja por Venezuela</a></li>
                                <li><a href="<?php echo base_url("index.php/Principal/viajeI")?>">Viajes Internacionales</a></li>

                                </ul>
                            </li>
                            <li><a href="<?php echo base_url("index.php/Principal/afiliate")?>"><?php echo $afi;?></a>
                            <li><a href="<?php echo base_url("index.php/Principal/noticias")?>"><?php echo $not;?></a></li>
                            <li><a href="<?php echo base_url("index.php/Principal/portafolio")?>"><?php echo $ser;?></a></li>
                            <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"><?php echo $con;?></a></li>
                        </ul>
                    </nav>
                    <script src="<?php echo __MAQ__?>js/menu.js" type="text/javascript"></script>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>



