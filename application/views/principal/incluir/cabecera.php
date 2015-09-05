<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>IFAMIL</title>
    <!-- Bootstrap -->
    <link href="<?php echo __MAQ__ ?>css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
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
    <!----font-Awesome----->
    <!-- start plugins -->
    <script type="text/javascript" src="<?php echo __MAQ__ ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo __MAQ__ ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo __MAQ__ ?>js/bootstrap.min.js"></script>
    <!--start slider -->
    <link rel="stylesheet" href="<?php echo __MAQ__ ?>css/fwslider.css" media="all">
    <script src="<?php echo __MAQ__ ?>js/jquery-ui.min.js"></script>
    <script src="<?php echo __MAQ__ ?>js/css3-mediaqueries.js"></script>
    <script src="<?php echo __MAQ__ ?>js/fwslider.js"></script>
    <!--end slider -->
    <!-- must have -->
    <link href="<?php echo __MAQ__ ?>css/allinone_carousel.css" rel="stylesheet" type="text/css">
    <script src="<?php echo __MAQ__ ?>js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo __MAQ__ ?>js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <script src="<?php echo __MAQ__ ?>js/allinone_carousel.js" type="text/javascript"></script>
    <!--[if IE]>
    <script src="<?php echo __MAQ__?>js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
    <!-- must have -->
    <script>
        jQuery(function () {

            jQuery('#allinone_carousel_charming').allinone_carousel({
                skin: 'charming',
                width: 990,
                height: 454,
                responsive: true,
                autoPlay: 3,
                resizeImages: true,
                autoHideBottomNav: false,
                showElementTitle: false,
                verticalAdjustment: 50,
                showPreviewThumbs: false,
                //easing:'easeOutBounce',
                numberOfVisibleItems: 5,
                nextPrevMarginTop: 23,
                playMovieMarginTop: 0,
                bottomNavMarginBottom: -10
            });
        });
    </script>
    <!-- Owl Carousel Assets -->
    <link href="<?php echo __MAQ__ ?>css/owl.carousel.css" rel="stylesheet">
    <script src="<?php echo __MAQ__ ?>js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: false,
                scrollPerPage: false,
                pagination: false,
                paginationNumbers: false,
            });

        });
    </script>
    <!-- //Owl Carousel Assets -->
    <!-- start circle -->
</head>
<body>
<div class="row">
    <div class="col-xs-6 col-sm-3">
        <img style="width: 100%" src="<?php echo __IMG__ ?>images/logo1.jpg">
    </div>
    <div class="col-xs-6 col-sm-3">
        <img src="<?php echo __IMG__ ?>images/banner5.jpg">
    </div>
    <div class="col-xs-6 col-sm-4"></div>
    <div class="col-xs-6 col-sm-2">
        <img src="<?php echo __IMG__ ?>images/banner6.jpg">
    </div>
    <div class="header_bg">
        <div class="container">
            <div class="header">
                <div class="h_menu">
                    <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
                    <nav>
                        <ul class="menu list-unstyled">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="about.php">Quienes Somos</a></li>
                            <li><a href="service.html">Paquetes</a></li>
                            <li><a href="portfolio.html">Afiliate</a>
                                <!--<ul class="sub-menu list-unstyled">
                                    <li><a href="portfolio.html">Portfolio Page</a></li>
                                    <li><a href="portfolio.html">Portfolio Page</a></li>
                                    <li><a href="portfolio.html">Portfolio Page</a>
                                        <ul class="list-unstyled">
                                            <li><a href="portfolio.html">Sub-Menu 1</a></li>
                                            <li><a href="portfolio.html">Sub-Menu 2</a></li>
                                            <li><a href="portfolio.html">Sub-Menu 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </li>-->
                            <li><a href="blog.html">Portafolio</a></li>
                            <li><a href="contact.html">CONTACTO</a></li>
                            <li><a href="feature.html">Eventos</a></li>
                        </ul>
                    </nav>
                    <script src="<?php echo __MAQ__?>js/menu.js" type="text/javascript"></script>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>


