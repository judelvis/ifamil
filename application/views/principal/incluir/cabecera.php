<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>Viajes y Turismo</title>
    <link rel="shortcut icon" type="image/x-icon" style="width: 100%; height: 100%"
          href="<?php echo __IMG__ ?>images/favi.ico">
    <meta charset="UTF-8"/>
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
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })

            jQuery(function (){
                jQuery(".slide_likebox").hover(function(){
                    jQuery(".slide_likebox").stop(true, false).animate({right:"0"},"medium");
                },function(){
                    jQuery(".slide_likebox").stop(true, false).animate({right:"-250"},"medium");
                },500);
                return false;
            })

        });
    </script>

</head>
<?php
$actual = str_replace("/", "-", uri_string());
$cerrar = site_url("Principal/cerrar") . '/' . $actual;
$idioma = site_url("Principal/idioma") . '/' . $actual;
$subir = "Volver Arriba";
$home = 'Inicio';
$quien = 'Quienes Somos';
$paq = 'Paquetes';
$afi = 'Afiliate';
$con = 'Oficinas';
$not = "Noticias";
$ser = "Servicios";
$v = "Viaja por Venezuela";
$i = "Viajes Internacionales";
$bandera = '<div style="float: right;"><a href="' . $idioma . '">
<img  style="float: left" src="' . __IMG__ . 'images/ingles.png" class="img-responsive"></a></div>';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $subir = "Back to Top";
    $home = 'Home';
    $quien = 'Company';
    $paq = 'Packages';
    $afi = 'Sign Us';
    $con = 'Offices';
    $not = "News";
    $ser = "Services";
    $v = "Travel by Venezuela";
    $i = "International travel";
    $bandera = '<div style="float: right;"><a href="' . $cerrar . '">
    <img  style="float: left" src="' . __IMG__ . 'images/vene2.png" class="img-responsive"></a></div>';
} ?>
<body>
<div class="container1">
    <div class="row">
        <img src="<?php echo __IMG__ ?>images/slayder-extras-01-min.jpg" style="width: 98%;">
        <img src="<?php echo __IMG__ ?>images/extra-02-02-min1.jpg" style="width: 98%;">

        <a href="#" class="back-to-top"><?php echo $subir; ?></a>
        <div class="slide_likebox">
            <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;"><span><div class='likeboxwrap'>
                        <iframe
                            src='http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/ifamil%2F&width=240&colorscheme=light&connections=15&show_facepile=false&stream=true&height=320' style='border:none; overflow:hidden; width:240px; height:325px;'
                            frameborder="0"
                            style="border:none; overflow:hidden; width:380px; height:320px;"
                            allowtransparency="true"></iframe>
                    </div></span></div>
        </div>


        <div class="header_bg" style="background=#ffffff;" >
            <!--  <div class="container"> -->
            <div class="header">
                <div class="h_menu">

                    <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                    <nav>
                        <ul class="menu list-unstyled" style="margin-bottom: 0px;">
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/index") ?>"><?php echo $home; ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/nosotros") ?>"><?php echo $quien; ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo $paq; ?></a>
                                <ul class="sub-menu list-unstyled">
                                    <li>
                                        <a href="<?php echo base_url("index.php/Principal/viajeV") ?>"><?php echo $v; ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url("index.php/Principal/paquetes/6") ?>"><?php echo $i; ?></a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/afiliate") ?>"><?php echo $afi; ?></a>
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/noticias") ?>"><?php echo $not; ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/portafolio") ?>"><?php echo $ser; ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("index.php/Principal/contacto") ?>"><?php echo $con; ?></a>
                            </li>
                            <!-- <?php echo $bandera; ?> -->
                        </ul>

                    </nav>
                    <script src="<?php echo __MAQ__ ?>js/menu.js" type="text/javascript"></script>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- </div>-->
    </div>