<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/5/15
 * Time: 3:22 PM
 */ ?>
<?php //print("<pre>");print_R($lst);?>
<script type="text/javascript" src="<?php echo __MAQ__; ?>js/fliplightbox.min.js"></script>
<script type="text/javascript">
    $('body').flipLightBox()
</script>
<script type="text/javascript" src="<?php echo __MAQ__; ?>js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo __MAQ__; ?>js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {

                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(function () {
                    $(this).find('.label').stop().animate({
                        bottom: 0
                    }, 200, 'easeOutQuad');
                    $(this).find('img').stop().animate({
                        top: -30
                    }, 500, 'easeOutQuad');
                }, function () {
                    $(this).find('.label').stop().animate({
                        bottom: -40
                    }, 200, 'easeInQuad');
                    $(this).find('img').stop().animate({
                        top: 0
                    }, 300, 'easeOutQuad');
                });

            }
        };

        // Run the show!
        filterList.init();

    });
</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="<?php echo __MAQ__; ?>css/jquery.fancybox.css" media="screen"/>
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="<?php echo __MAQ__; ?>js/jquery.fancybox-1.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("div.fancyDemo a").fancybox();
    });
</script>
<div class="main_bg"><!-- start main -->
    <img src="<?php echo __IMG__ ?>images/<?php echo $imagen ?>" style="width: 100%">

    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $titulo; ?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="portfolio_main col-md-9">
            <div id="portfoliolist">
                <?php
                if ($lst == 0) {
                    echo "No existen publicaciones.";
                } else {
                    foreach ($lst as $ls) {
                        echo '
                    <div class="col-md-2 blog_date">
                        <span><h3>Publicado</h3><p>' . $ls->fecha . '</p></span>
                        <span class="icon_date"><i class="fa fa-suitcase"></i> </span>
                    </div>
                    <div class="col-md-10 blog_left">
                        <a href="#"><img src="'. __IMG__.'galeria/medio/'.$ls->imagen.'" alt="" class="img-responsive"/></a>
                        <h4>'.$ls->tit.'</h4>


                        <p class="para">'.$ls->res.'</p>

                        <div class="read_btn">
                            <a href="'.site_url("Principal/paratodos/".$ls->id).'">
                                <button class="btn">leer mas</button>
                            </a>
                            <a href="'.site_url("Principal/solicitud/4/".$ls->id).'">
                                <button class="btn">Realiza tu solicitud</button>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div><br>';
                    }
                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-2 blog_right z">
            <img src="<?php echo __IMG__?>images/prueba.png" class="img-responsive">
            <img src="<?php echo __IMG__?>images/anuncio.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/naci.png" class="img-responsive">
            <img src="<?php echo __IMG__?>images/inter.png" class="img-responsive">
            <img src="<?php echo __IMG__?>images/salto.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/ifamil1.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/ofi.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/cas.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/puente.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/cuartel.jpg" class="img-responsive">
            <img src="<?php echo __IMG__?>images/arte.jpg" class="img-responsive">

        </div>
    </div>
</div>
