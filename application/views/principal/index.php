<!-- must have -->
<link href="<?php echo __MAQ__ ?>css/allinone_carousel.css" rel="stylesheet" type="text/css">
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
        $("#owl-demo2").owlCarousel({
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

<?php
$servi = "Servicios";
$paq = 'Paquetes';
$solic = 'Realiza tu solicitud de paquetes ahora.<br><br>';
$reser = 'Reservación';
$solic2 = 'Realiza tu solicitud de paquetes ahora.<br><br>';
$opi = 'Dejanos tu opinión';
$opi2 = "Tu opinión es importante.<br><br>";
$contc = "Trabeje con nosotros";
$contc2 = "Trabajar en Viajes y Turismo Ifamil significa desarrollar tu carrera en una de las empresas mas imnovadoras del sector.";
$con = "Oficinas";
$con2 = "Hazlo Diferente, Hazlo con Nosotros.<br>";
$ver="VER MAS";
$n="Noticias";
$e="Encuentranos";
$l='Leer';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $servi = "Services";
    $paq = 'Packages';
    $solic = 'Make your application package now.';
    $reser = 'Reservation';
    $solic2 = "Make your application package now.<br>";
    $opi = 'Leave Feedback';
    $opi2 = "Your opinion is important.<br><br>";
    $con = "Offices";
    $con2 = "Different do - Do it with us.<br>";
    $ver="VIEW MORE";
    $n="News";
    $e="Find us";
    $l='Read';
} ?>
<div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main span_of_3">

            <br>

            <div class="cau_hide">

                <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
                    <div class="item">
                        <div class="cau_left">
                            <a href="http://www.mintur.gob.ve/mintur/" target="_blank>"><img class="lazyOwl" src="<?php echo __IMG__?>images/mintur1.png"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <a href="http://www.inatur.gob.ve/" target="_blank"> <img class="lazyOwl" src="<?php echo __IMG__?>images/inatur.png"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <a href="http://www.venetur.gob.ve/" target="_blank"> <img class="lazyOwl" src="<?php echo __IMG__?>images/venetur.png"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <a href="http://cormetur.merida.gob.ve/" target="_blank"> <img class="lazyOwl" src="<?php echo __IMG__?>images/cormetur.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!----//End-img-cursual---->
        </div>
    </div>
</div>
</div>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="title">
                <hr class="team_hr team_hr_left hr_gray"/>
                <center><span class="lhre"></span>

                    <h1><?php echo $servi; ?></h1></center>
                <hr class="team_hr team_hr_left hr_gray"/>
            </div>
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><a href="<?php echo base_url("index.php/Principal/solicitud/4") ?>"><i
                                    class="fa fa-suitcase "></i></a></span>

                        <h3><?php echo $paq; ?></h3>

                        <p><?php echo $solic; ?></p>

                        <div class="read_more">
                            <a class="btn btn-2 active"
                               href="<?php echo base_url("index.php/Principal/solicitud/4") ?>"><?php echo $ver;?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><a href="<?php echo base_url("index.php/Principal/solicitud/2") ?>"><i
                                    class="fa fa-plane"></i></a></span>

                        <h3><?php echo $reser; ?></h3>

                        <p><?php echo $solic2; ?></p>

                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo base_url("index.php/Principal/solicitud/2") ?>"><?php echo $ver;?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><a href="<?php echo base_url("index.php/Principal/opinion") ?>"><i
                                    class="fa fa-group"></i></a></span>

                        <h3><?php echo $opi; ?></h3>

                        <p><?php echo $opi2 ?></p>

                        <div class="read_more">
                            <a class="btn  btn-2b" href="<?php echo base_url("index.php/Principal/opinion") ?>"><?php echo $ver;?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><a href="<?php echo base_url("index.php/Principal/contacto") ?>"><i class="fa fa-list"></i></span>

                        <h3><?php echo $con; ?></h3>

                        <p><?php echo $con2; ?></p>
                        <br>

                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo base_url("index.php/Principal/contacto") ?>"><?php echo $ver;?></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end span_of_4 -->
        </div>
    </div>
</div>

<div class="main_btm1" id="noticias">
    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $n; ?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
        <div class="main_grid">
            <?php
            if ($lst != 0) {
                $i = 0;
                foreach ($lst as $ls) {
                    if ($i == 0) echo '<div class="row-fluid team">';
                    $i++;
                    echo '
			<div class="col-md-3 span1_of_4" id="noticia_' . $ls->oid . '">
				<div class="thumbnail" style="height:300px;">
					<img src="' . __IMG__ . 'noticia/medio/' . $ls->imagen . '" alt="team 1">
					<div class="mask">
					    <h4>'.substr($ls->res,0,350) .'</h4>
					    <ul class="social">
                        <li>
                            <a href="' . site_url("Principal/verNoticia/$ls->oid") . '">
                              '   .$l.'
                            </a>
                        </li>
                    </ul>
					</div>
                    <h3>' . $ls->tit . '</h3>
				</div>
			</div>
			';
                    if ($i == 4) {
                        echo '</div>';
                        break;
                    }
                }
            }
            ?></div>
    </div>
</div>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>Twitter</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
    </div>
    <link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__ ?>style/style.css"/>
    <link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__ ?>css/scroller.css"/>
    <link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__ ?>css/dzsparallaxer.css"/>
    <div id="prx2" class="dzsparallaxer auto-init out-of-bootstrap use-loading" data-options='{ direction: "normal"}'>
        <div class="divimage dzsparallaxer--target "
             style="height: 530px; background-image: url(<?php echo __IMG__ ?>images/F-06-min.jpg)">
        </div>

        <div class=" center-it" style="font-style:normal;">
            <center><br>
                <a class="twitter-timeline" href="https://twitter.com/ifamil_ca"
                   data-widget-id="640861362185502720" data-tweet-limit="1" data-theme="dark" data-chrome="noheader noborder transparent">Tweets
                    por el @ifamil_ca.</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </center>
        </div>

    </div>
</div>


<div class="main_bg"><!-- start main -->
    <div class="title">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>Instagram</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
    </div>


    <center>
        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4"
                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:500px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            <div style="padding:8px;">
                <div
                    style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                    <div
                        style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                </div>
                <p style=" margin:8px 0 0 0; padding:0 4px;"><a href="https://instagram.com/p/6k76YdOOSM/"
                                                                style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;"
                                                                target="_top">#Ifamil
                        #HazloDiferenteHazloConNosotros</a></p>

                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                    Una foto publicada por Viajes y Turismo IFAMIL (@ifamil_c.a) el
                    <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                          datetime="2015-08-19T19:44:04+00:00">19 de Ago de 2015 a la(s) 12:44 PDT
                    </time>
                </p>
            </div>
        </blockquote>
        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    </center>

</div>

<div class="container">
    <div class="title">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1><?php echo $e; ?></h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
    </div>
    <center>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1961.6755529000425!2d-66.89525299865238!3d10.472963174847518!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1441404862591"
            width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </center>
</div>



</div>
</div>
<script>
    jQuery(document).ready(function ($) {
        window.dzsscr_init($('.mwrap-wrapper'), {
            'type': 'scrollTop'
            , 'settings_skin': 'skin_apple'
            , enable_easing: 'on'
            , settings_autoresizescrollbar: 'on'
            , settings_chrome_multiplier: 0.04
        })
    });

</script>
<link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__ ?>advancedscroller/plugin.css"/>
<script src="<?php echo __PARALAX__ ?>advancedscroller/plugin.js" type="text/javascript"></script>
<script src="<?php echo __PARALAX__ ?>dzsparallaxer/dzsparallaxer.js" type="text/javascript"></script>
<script src="<?php echo __PARALAX__ ?>dzsscroller/scroller.js" type="text/javascript"></script>