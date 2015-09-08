<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/7/15
 * Time: 7:21 PM
 */?>
<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="main_grid1">
                    <hr class="team_hr team_hr_left hr_gray"/>
                    <center><h1>NOTICIAS</h1></center>
                    <hr class="team_hr team_hr_left hr_gray"/>
                    <div class="clearfix"></div>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                <?php $i=0;foreach($lst as $ls) {$i++;
                    echo '<li>
                    <a href="'.site_url("principal/verNoticia/".$ls->oid).'">
                        <img src="'. __IMG__.'noticia/medio/'.$ls->imagen.'" alt="'.$ls->titulo.'">
                    </a>
                    <p>'.$ls->titulo.'</p>

                </li>';
                    if($i==3)break;
                }?>
            </ul>
        </div>
    </div>
</div>
<div class="section primary-section" id="noticias">
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>NOTICIAS</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
        <?php
        if ($lst != 0) {
            $i = 0;
            foreach ($lst as $ls) {
                if($i == 0) echo '<div class="row-fluid team">';
                $i++;
                echo '
                <div class="span4" id="noticia_'.$ls->oid.'">
                <div class="thumbnail">
                    <img src="'.__IMG__.'noticia/medio/'.$ls->imagen.'" alt="team 1">
                    <h3>'.$ls->titulo.'</h3>
                    <ul class="social">
                        <li>
                            <a href="'.site_url("principal/verNoticia/$ls->oid").'">
                                <span >LEER</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mask">
                        <h2>Resumen</h2>
                        <p>'.$ls->resumen.'</p>
                    </div>
                </div>
            </div>
        ';
                if($i== 3) echo '</div>';
            }
        }
        ?>
    </div>
</div>

