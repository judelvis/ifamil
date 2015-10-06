<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/5/15
 * Time: 3:02 PM
 */ ?>
<?php
$t = "Bienvenido a IFAMIL";
$q = '¿Quienes somos?';
$qp = 'Viajes y Turismo IFAMIL C.A. es una filial del Instituto de Previsión Social de la Fuerza Armada Nacional (I.P.S.F.A.), establecida desde febrero de 1980, con el objeto de brindar un servicio de primera calidad, no solamente a la Fuerza Armada, sino también a los entes gubernamentales, privados y público en general.';
$n = 'Nuestro compromiso';
$np = 'Brindar el mejor servicio en lo que a viajes turísticos y de negocios se refiere, con la finalidad de satisfacer las necesidades de nuestra distinguida clientela.';
$m = 'Misión';
$mp = 'Ofrecer servicios y productos de calidad en viajes y turismo, para el disfrute a nivel Nacional e Internacional de nuestros afiliados y clientes en general, proporcionándoles asesoría, respuesta y atención oportuna, a fin de alcanzar un crecimiento sostenido en satisfacción y ventas.';
$v = 'Visión';
$vp = 'Ser una empresa comercializadora de servicios y productos turísticos en continuo crecimiento, reconocida a nivel nacional e internacional por su excelente calidad, confiabilidad y alta satisfacción, generando una rentabilidad sostenida, inspirada en el compromiso social.';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t = "Welcome to IFAMIL";
    $q = 'Us';
    $qp = 'Travel and Tourism Ifamil C.A. It is a subsidiary of the Social Welfare Institute of the National Armed Forces ( IPSFA ), established in February 1980 with the objective of promote a quality service, not only to the armed forces , but also the government , and public in general.';
    $n = 'Commitment';
    $np = 'Provide the best service in tourist travel, accommodation and entertainment in order to meet the needs of our customers.';
    $m = 'Mission';
    $mp = 'Offers quality services and products in travel and tourism , for the enjoyment of our customers national and international travel and customers in general , providing counseling , attention and immediate response with the purpose to achieve sustained growth in sales and satisfaction.';
    $v = 'Vision';
    $vp = 'Be a company of tourism services and products in continuous growth, be known for national and international peoples for its excellent quality , reliability and satisfaction , inspired by the social engagement.';

} ?>
<div class="main_bg"><!-- start main -->
    <img src="<?php echo __IMG__ ?>images/aviso.jpg" style="width: 100%">

    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $t; ?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1">
    <div class="container">
        <div class="technology">
            <div class="technology_main">
                <div class="technology_list col-md-12">
                    <h2><?php echo $q; ?></h2>

                    <p class="para"><?php echo $qp; ?>
                    </p>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_btm1">
    <div class="container">

        <div class="technology_main">
            <div class="technology_list col-md-12">
                <h2><?php echo $n; ?></h2>

                <p class="para"> <?php echo $np; ?></p>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">

        <div class="technology_main">
            <div class="technology_list col-md-6">
                <h2><?php echo $m; ?></h2>

                <div class="tech_para">
                    <p class="para"><?php echo $mp; ?> </p>
                </div>
                <div class="images_1_of_4 bg1 pull-right">
                    <span class="bg"><i class="fa fa-plane"></i> </span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="technology_list col-md-6">
                <h2><?php echo $v; ?></h2>

                <div class="tech_para">
                    <p class="para"><?php echo $vp; ?> </p>
                </div>
                <div class="images_1_of_4 bg1">
                    <span class="bg"><i class="fa fa-globe"></i> </span>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
            <div class="clearfix"></div>

    </div>
</div>
</div>
