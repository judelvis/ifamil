<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>NOTICIAS</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="blog"><!-- start blog -->
            <div class="blog_main col-md-9">
                <div class="blog_list">
                    <?php
                    foreach($lst as $ls) {
                        echo '
                    <div class="col-md-2 blog_date">
                        <span><h3>Publicado</h3><p>' . $ls->fecha . '</p></span>
                        <span class="icon_date"><i class="fa fa-archive"></i> </span>
                    </div>
                    <div class="col-md-10 blog_left">
                        <a href="#"><img src="'. __IMG__.'noticia/medio/'.$ls->imagen.'" alt="" class="img-responsive"/></a>
                        <h4>'.$ls->titulo.'</h4>

                        <p class="para">'.$ls->resumen.'</p>
                        <div class="read_btn">
                            <a href="'.site_url("Principal/verNoticia/".$ls->oid).'">
                                <button class="btn">leer mas</button>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div><br>';
                    }?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 blog_right">

            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end blog -->
    </div>
</div>