<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/9/15
 * Time: 4:56 PM
 */?>
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
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h3><?php echo $lst[0]->tit; ?></h3></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="portfolio_main col-md-9">
            <div id="portfoliolist">
                <div class="portfolio_main">
                        <?php
                        if(isset ($lst[0]->descrip)) {
                            echo '<div class="blog"><!-- start blog -->
                            <div class="blog_main col-md-12">

                                <div class="blog_list">
                                    <div class="col-md-12 blog_left">
                                        <p class="para">' . $lst[0]->descrip . '</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            ';
                        }
                         foreach($lst as $ls) {

                            echo '
                                <div class="portfolio logo1" data-cat="logo">
                                    <div class="portfolio-wrapper">
                                        <div class="fancyDemo">
                                                <a rel="group" title="" href="' . __IMG__ . 'galeria/' . $ls->imagen . '"><img src="' . __IMG__ . 'galeria/medio/' . $ls->imagen . '" alt="" class="img-responsive"/></a>

                                        </div>

                                    </div>
                                </div>';
                        }?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>