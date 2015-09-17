<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 9:02 AM
 */ ?>
<div id="fb-root "></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $lst[0]->tit; ?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1">
    <div class="container">
        <div class="blog"><!-- start blog -->
            <div class="blog_main col-md-10">
                <div class="blog_list">
                    <div class="col-md-8 blog_left">
                        <a href="#"><img src="<?php echo __IMG__ . 'noticia/' . $lst[0]->imagen; ?>"
                                         style="width: 100%;" alt=""
                                         class="img-responsive"/></a>
                    </div>
                    <div class="col-md-4 blog_left">
                        <h4>Resumen</h4>

                        <p class="para"><?php echo $lst[0]->res; ?></p>
                        <div class="fb-like" data-layout="button_count"></div>
                    </div>
                    <div class="technology_list col-md-12">
                        <br>

                        <p class="para"><?php echo $lst[0]->des; ?></p>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="col-md-2 blog_right z">
                <img src="<?php echo __IMG__ ?>images/prueba.png" class="img-responsive">
                <img src="<?php echo __IMG__ ?>images/anuncio.jpg" class="img-responsive">
                <img src="<?php echo __IMG__ ?>images/anuncio2.png" class="img-responsive">
            </div>

        </div>
    </div>
</div>