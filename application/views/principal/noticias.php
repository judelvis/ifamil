<script type="text/javascript">
    $(document).ready(function () {
        pagina(1);
    });
    function pagina(p){
        tam = $('#paginador li').size();
        for(var i=1;i<=tam;i++){
            $(".pag"+i).hide();
        }
        $(".pag"+p).show();
    }
</script>
<?php
$t = "Noticias";
$p="Publicado";
$l = 'LEER MAS';

if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t = "News";
    $p = "Published";
    $l = 'READ MORE';


} ?>

<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $t; ?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="blog" id="noti"><!-- start blog -->
            <div class="blog_main col-md-9">
                <div class="blog_list">
                    <?php
                    $i = 0;
                    $j=1;$band=0;
                    echo '<div class="row pag'.$j.'">';
                    foreach ($lst as $ls) {
                        $i ++;
                        if($band == __PAG__){
                            $j++;
                            $band=1;
                            echo '</div>';
                            echo '<div class="row pag'.$j.'">';
                        }
                        $band++;
                        echo '
                    <div class="col-md-2 blog_date">
                        <span><h3> '   .$p.'</h3><p>' . $ls->fecha . '</p></span>
                        <span class="icon_date"><i class="fa fa-list-alt"></i> </span>
                    </div>
                    <div class="col-md-10 blog_left">
                        <a href="#"><img src="'. __IMG__.'noticia/medio/'.$ls->imagen.'" alt="" class="img-responsive"/></a>
                        <h4>'.$ls->tit.'</h4>

                        <p class="para">'.$ls->res.'</p>
                        <div class="read_btn">
                            <a href="'.site_url("Principal/verNoticia/".$ls->oid).'">
                                <button class="btn"> '   .$l.'</button>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div><br>';
                    }
                    echo '</div>';
                    $npag = count($lst)/__PAG__;
                    if(($npag)>1 ){
                        echo'<nav><ul class="pagination pagination-lg" id="paginador">';
                        $tam =ceil($npag);
                        for($i=1;$i<=$tam;$i++){
                            echo'<li><a href="#noti" onclick="pagina('.$i.')">'.$i.'</a></li>';
                        }
                        echo '</ul>	</nav>';
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
            <div class="clearfix"></div>
        </div>
        <!-- end blog -->
    </div>
</div>