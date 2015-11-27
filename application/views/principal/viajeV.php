<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 17/09/15
 * Time: 02:01 PM
 */ ?>
<?php
$v = "Viaja por Venezuela";
$s = 'SOL Y PLAYA';
$m = 'MONTAÑAS';
$sel = 'SELVA';
$ll = 'LLANOS';
$c = 'CIUDAD';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $v = "TRAVEL BY VENEZUELA";
    $s = 'SUN AND BEACH';
    $m = 'MOUNTAINS';
    $sel = 'JUNGLE';
    $ll = 'PLAINS';
    $c = 'CITY';

} ?>
<div class="main_bg"><!-- start main -->
    <img src="<?php echo __IMG__ ?>images/H-08-min.jpg" style="width: 100%">
    <div class="container">
        <div class="main_grid">
            <div class="title">
                <hr class="team_hr team_hr_left hr_gray"/>
                <center><h1><?php echo $v; ?></h1></center>
                <hr class="team_hr team_hr_left hr_gray"/>
            </div>
            <div class="span_of_4" style="margin-left: 40px;padding: 20px 0px 30px 8px "><!-- start span_of_4 -->
                <div class="col-md-2">
                    <div class="span4_of_list">
                        <a href="<?php echo site_url("Principal/paquetes/1");?>"><img src="<?php echo __IMG__?>images/island.png">

                        <h4><?php echo $s; ?></h4></a>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="span4_of_list">
                        <a href="<?php echo site_url("Principal/paquetes/3");?>"><img src="<?php echo __IMG__?>images/peaks.png">
                        <h4><?php echo $m; ?></h4>
                        </a>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="span4_of_list"
                    ">
                    <a href="<?php echo site_url("Principal/paquetes/2");?>"><img src="<?php echo __IMG__?>images/woods2.png">

                    <h4><?php echo $sel; ?></h4>
                    </a>
                    <br><br>
                </div>
            </div>
            <div class="col-md-2">
                <div class="span4_of_list">
                    <a href="<?php echo site_url("Principal/paquetes/4");?>"><img src="<?php echo __IMG__?>images/horseman2.png">

                    <h4><?php echo $ll; ?></h4>
                    </a>
                    <br><br>

                </div>
            </div>
            <div class="col-md-2">
                <div class="span4_of_list">
                    <a href="<?php echo site_url("Principal/paquetes/5");?>"><img src="<?php echo __IMG__?>images/urban.png">

                    <h4 ><?php echo $c; ?></h4>
                    </a>
                    <br><br>

                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

