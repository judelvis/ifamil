<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/5/15
 * Time: 3:25 PM
 */ ?>
<?php
$t = "Servvicios";
$p = 'Nuestra Agencia de Viajes, cuenta con 35 años de Experiencia comprobada en el gremio Turístico Nacional, poseemos un recurso humano calificado con gran experiencia en viajes de placer y viajes de negocios, además hemos ampliado nuestra red de comercialización con la finalidad de ofrecer a nuestra clientela una extensa gama de productos y servicios.';
$t2 = 'Servicios turisticos que prestamos';
$s1='Venta de Boletos Aéreos Nacionales e Internacionales.';
$s2='Servicio de Hospedaje en Hoteles y Posadas a Nivel Nacional e Internacional.';
$s3='Servicio de Compra, Venta y Alquiler de Vehículos a Nivel Nacional e Internacional.';
$s4='Asesoría y Venta de Paquetes Nacionales e Internacionales, Full Days, Circuitos Turísticos, Paquete de Quinceañeras, Cruceros, Viajes Dorado, Viajes de Graduación.';
$s5='Organizamos Viajes de Grupos, Convenciones y Congresos con Experiencia comprobada en el manejo de los mismos.';
$s6='Contamos con Los Sistemas de Reservación Aérea Global AMADEUS y KIU.';
$s7='Ofrecemos Atención Personalizada, a fin de Garantizar una Rápida y Confiable Respuesta a sus Solicitudes.';
$s8='Cobramos la Tasa más baja del Mercado por Concepto de Servi Fee.';
$s9='Poseemos Convenios con Proveedores Turísticos, Hoteles y Aerolíneas.';
$s10='Ofrecemos a nuestra Distinguida Clientela Corporativa, Servicio de Guardia Nocturna, Fines de Semana y Días Feriados.';
$s11='Organizamos Eventos, Fiestas Corporativas, Fiestas de Fin de Año , Ferias Navideñas, Fiestas Infantiles, Día del Niño, Fiestas Institucionales , entre Otras.';
$s12='Alquilamos Salón de Fiesta de Uso Exclusivo “EL MIRADOR “. Estratégicamente Ubicado en nuestras Instalaciones del IPSFA, con capacidad para 350 Personas.';
$s13='Comercializamos: Materiales de Oficina, Materiales Eléctricos, Material Deportivo, Adquisición de Uniformes, Materiales de Limpieza, Tóner y Consumibles, Papel tipo Carta y Oficio, Multifuncionales, Cestas Navideñas entre otros.';
$s14='Organizamos Planes Vacacionales, Visitas Guiadas y Campamentos con Experiencia Comprobada en el Manejo de los Mismos.';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t = "Services";
    $p = 'Our Travel Agency has 35 years of expertise in the National Tourist guild experience , we have a skilled workforce with extensive experience in leisure and business travel, we also expanded our marketing network in order to offer our customers an extensive range of products and services.';
    $t2 = 'LOANS TOURIST SERVICES';
    $s1='Sale of National and International Air Tickets.';
    $s2='Accommodation service in hotels and inns at National and International Level.';
    $s3='Service Purchase , Sale and car rentals at National and International Level.';
    $s4='Advice and sale of domestic and international packages , Full Days , tours , package Quinceañeras, Cruises, Gold , Travel Graduation.';
    $s5='Groups organize trips , conventions and congresses with expertise in handling them Experience.';
    $s6='We have Air Reservation Systems and Global AMADEUS KIU.';
    $s7='We offer personalized service , to ensure fast and reliable response to their requests.';
    $s8='We charge the lowest rate by concept Market Fee Servi.';
    $s9='We have agreements with travel suppliers , hotels and airlines.';
    $s10='We offer our clients Corporate Service Night View Weekends and holidays.';
    $s11='We organize events, corporate parties, New Year parties , Christmas shows , celebrations, Children Day, Institutional Party , among others.';
    $s12='We rent Party Hall Use Only "El Mirador" . Our strategically located in IPSFA Facilities with capacity para 350 persons.';
    $s13='We market : Office Supplies , Electrical Materials , sports equipment, purchase of uniforms , cleaning materials , and supplies Toner , Paper Letter and Legal type , Multifunction , Christmas baskets etc.';
    $s14='We organize Vacation Plans , Guided and Campgrounds with expertise in the management of them.';
} ?>
<div class="main_bg"><!-- start main -->

    <img src="<?php echo __IMG__ ?>images/aviso2.jpg" style="width: 100%">

    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $t;?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="blog"><!-- start blog -->
            <div class="blog_main col-md-9">
                <div class="blog_list">
                    <div class="col-md-10 blog_left">
                        <a href="#"><img src="<?php echo __IMG__; ?>images/turismo1.jpg" alt=""
                                         class="img-responsive"/></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-12 blog_left">
                    <p class="para"><?php echo $p;?></p>
                </div>
                <div class="clearfix"></div>
                <div class="main_bg"><!-- start main -->
                    <div class="container">
                        <div class="main_grid1">
                            <h3 class="style pull-left"><?php echo $t2;?></h3>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 span1_of_3">
                    <ul class="para">
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s1;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"><?php echo $s2;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s3;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s4;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s5;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s6;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s7;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s8;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s9;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s10;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s11;?></a>
                        </li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s12;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s13;?></a></li>
                        <br>
                        <li><a href="<?php echo base_url("index.php/Principal/contacto")?>"> <?php echo $s14;?></a></li>

                    </ul>
                </div>


                <div class="clearfix"></div>
            </div>

            <div class="col-md-3 blog_right z">
                <img src="<?php echo __IMG__ ?>images/prueba.png" class="img-responsive">
                <img src="<?php echo __IMG__ ?>images/anuncio.jpg" class="img-responsive">
                <img src="<?php echo __IMG__ ?>images/anuncio2.png" class="img-responsive">
                <img src="<?php echo __IMG__ ?>images/naci.png" class="img-responsive">


            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end blog -->
    </div>
</div>