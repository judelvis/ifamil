<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="title">
                <hr class="team_hr team_hr_left hr_gray"/>
                <center><span class="line"></span>

                    <h1>Servicios</h1></center>
                <hr class="team_hr team_hr_left hr_gray"/>
            </div>
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-suitcase "></i></span>

                        <h3>Paquetes</h3>

                        <p>Realiza tu solicitud de paquetes ahora.</p>

                        <div class="read_more">
                            <a class="btn btn-2 active" href="<?php echo base_url("index.php/Principal/paquetes")?>">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-plane"></i></span>

                        <h3>Reservación</h3>

                        <p>Reserva tu vuelo ya con nosotros.</p>

                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo base_url("index.php/Principal/reservacion")?>">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-group"></i></span>

                        <h3>Dejanos tu opinion</h3>

                        <p>Dejanos tu opinion.</p>

                        <div class="read_more">
                            <a class="btn  btn-2b" href="<?php echo base_url("index.php/Principal/opinion")?>">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-list"></i></span>

                        <h3>Contactenos</h3>

                        <p>Hazlo Diferente-Hazlo con Nosotros</p>

                        <div class="read_more">
                            <a class="btn btn-2b" href="<?php echo base_url("index.php/Principal/contacto")?>">Ver mas</a>
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
            <center><h1>Noticias</h1></center>
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
					<h3>' . $ls->titulo . '</h3>
					<div class="mask">
						<a href="' . site_url("Principal/verNoticia/$ls->oid") . '">
						<h2><span >LEER</span></h2>
						</a>
					</div>
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

    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>Twitter</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
    </div>
<link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__?>style/style.css"/>
<link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__?>css/scroller.css"/>
<link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__?>css/dzsparallaxer.css"/>
<div id="prx2" class="dzsparallaxer auto-init" data-options='{  mode_scroll: "fromtop", animation_duration: "50", direction: "reverse",js_breakout: "off", settings_movexaftermouse: "on"}' style="">

    <div class="divimage dzsparallaxer--target " style="width: 130%; height: 530px; background-image: url(<?php echo __IMG__?>images/tovar.jpg)">
    </div>

    <div class=" center-it" style="font-style:normal;">
        <center><br>
            <a class="twitter-timeline" href="https://twitter.com/ifamil_ca"
               data-widget-id="640861362185502720" data-tweet-limit="1" data-chrome="noheader noborder transparent">Tweets
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


<!-- start main1 -->
<div class="title">
    <hr class="team_hr team_hr_left hr_gray"/>
    <center><h1>Instagram</h1></center>
    <hr class="team_hr team_hr_left hr_gray"/>
</div>


<center>
<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:500px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/6k76YdOOSM/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">#Ifamil #HazloDiferenteHazloConNosotros</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Una foto publicada por Viajes y Turismo IFAMIL (@ifamil_c.a) el <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-08-19T19:44:04+00:00">19 de Ago de 2015 a la(s) 12:44 PDT</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></center>

<!-- end banner -->
<div class="main_bg">
    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>Encuentranos</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
        <center>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1961.6755529000425!2d-66.89525299865238!3d10.472963174847518!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1441404862591"
            width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </center>
    </div>
    </div>

<div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main span_of_3">

            <br>

            <div class="cau_hide">
                <div class="cursual"><!--  start cursual  -->
                    <h4>Empresas Asociadas<span class="line"></span></h4>
                </div>
                <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
                    <?php
                    if ($emp != 0) {
                        $i = 0;
                        foreach ($emp as $em) {
                            echo '
                                <div class="item">
                                    <div class="cau_left">
                                        <img class="lazyOwl" data-src="' . __IMG__ . 'empresa/' . $em->imagen . '" alt="' . $em->nombre . '">
                                    </div>
                                </div>
			                ';
                        }
                    }
                    ?>
                </div>
                <!----//End-img-cursual---->
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($){
            window.dzsscr_init($('.mwrap-wrapper'),{
                'type':'scrollTop'
                ,'settings_skin':'skin_apple'
                ,enable_easing: 'on'
                ,settings_autoresizescrollbar: 'on'
                ,settings_chrome_multiplier : 0.04
            })
        });

    </script>
    <link rel='stylesheet' type="text/css" href="<?php echo __PARALAX__?>advancedscroller/plugin.css"/>
    <script src="<?php echo __PARALAX__?>advancedscroller/plugin.js" type="text/javascript"></script>
    <script src="<?php echo __PARALAX__?>dzsparallaxer/dzsparallaxer.js" type="text/javascript"></script>
    <script src="<?php echo __PARALAX__?>dzsscroller/scroller.js" type="text/javascript"></script>