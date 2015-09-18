<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/contacto.js"></script>
<?php
$t1 = "Contactenos";
$d = 'Dirección:';
$d1 = 'IFAMIL - Caracas - Sede Principal:';
$d2 = 'Av. Los Proceres C.C Los Proceres Nivel 3';
$d3 = 'área socialista Urb. Santa Monica Caracas';
$d4 = 'Distrito Capital Zona postal 1040.';
$d5 = 'Télefono:(0212) 661 56 16';
$d6 = 'Fax: (0212) 662 41 06';
$d7 = 'Sucursal IFAMIL - Maracay:';
$d8 = 'Av. Bolívar, Edif. Almacenes Militares I.P.S.F.A.,';
$d9 = 'Los Jardines de Maracay. Maracay,';
$d10 = 'estado Aragua-Venezuela.';
$d11 = 'Sucursal IFAMIL - Barquisimeto:';
$d12 ='Av. Venezuela entre Av. Los Leones y Av.Armiguero';
$d13 ='Bracamontes, piso 2 C.C IPSFA Barquisimeto.';
$d14 ='Municipio: Iribarren Parroquia: Santa Rosa';
$d15 ='Siguenos: Facebook, Twitter, Insatagram.';
$c = 'Contacto';
$n = 'Nombre y apellido';
$e = 'Correo Electronico';
$co ='Código';
$t = 'Número de telefono celular o habitación';
$m = 'Mensaje...';
$en='ENVIAR';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t1 = "Contact us";
    $d = 'Address:';
    $d1 = 'IFAMIL - Caracas - Headquarters:';
    $d2 = 'Av. The Proceres C.C The Proceres level 3';
    $d3 = 'Urb . Santa Monica Caracas socialist area';
    $d4 = 'Capital District Postal code 1040.';
    $d5 = 'PHONE:(0212) 661 56 16';
    $d6 = 'Fax: (0212) 662 41 06';
    $d7 = 'Branch IFAMIL - Maracay:';
    $d8 = 'Av. Bolívar, Edif. Militares stores I.P.S.F.A.,';
    $d9 = 'The Gardens of Maracay. Maracay,';
    $d10 = 'state Aragua-Venezuela.';
    $d11 = 'Branch IFAMIL - Barquisimeto:';
    $d12 ='Av. Venezuela between Av. The Lions y Av.Armiguero';
    $d13 ='Bracamontes, flat 2 C.C IPSFA Barquisimeto.';
    $d14 ='Town: Iribarren Parish: Santa Rosa';
    $d15 ='Follow:';
    $c = 'Contact';
    $n = 'Name and surname';
    $e = 'Email';
    $co ='Code';
    $t = 'Cell phone number or room';
    $m = 'Message...';
    $en='SUBMIT';
} ?>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1><?php echo $t1;?></h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="contact">
            <center>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1961.6755529000425!2d-66.89525299865238!3d10.472963174847518!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1441404862591"
                width="88%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><div class="contact_main">
            </center>
                    <div class="col-md-4 company_ad">
                    <h2><?php echo $d;?></h2>
                    <address>
                        <p><b><?php echo $d1;?></b></p>
                        <p><?php echo $d2;?> </p>
                        <p><?php echo $d3;?></p>
                        <p><?php echo $d4;?></p>
                        <p><b><?php echo $d5;?></b></p>
                        <p><b><?php echo $d6;?></b></p>
                        <p><b><?php echo $d7;?></b></p>
                        <p><?php echo $d8;?></p>
                        <p><?php echo $d9;?></p>
                        <p><?php echo $d10;?></p>
                        <p><b><?php echo $d11;?></b></p>
                        <p><?php echo $d12;?></p>
                        <p><?php echo $d13;?></p>
                        <p><?php echo $d14;?></p>
                        <p>Email: <a href="https://plus.google.com/u/0/116239479180848308489/posts">ifamilviajesyturismo@gmail.com</a></p>
                        <p><?php echo $d15;?><a href="https://www.facebook.com/profile.php?id=100008649614216">Facebook</a>, <a href="https://twitter.com/ifamil_ca">Twitter</a>, <a href="https://instagram.com/ifamil_c.a">Insatagram</a>.</p>
                    </address>
                </div>
                <div class="col-md-8">
                    <div class="contact-form" id="formulario">
                        <h2><?php echo $c; ?></h2>
                        <form method="post" action="#" onsubmit="return guardar();">
                            <input type="text" id="nombre" name="nombre" placeholder="<?php echo $n; ?>" required="required">
                            <input type="email" name="correo" id="correo" placeholder="<?php echo $e; ?>" required="required">
                            <div class="row">
                            <div class="col-md-3">
                                <select id="codTel" name="codTel"style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                                    <option value="0"><?php echo $co; ?></option>
                                    <option value="0416">0416</option><option value="0426">0426</option>
                                    <option value="0414">0414</option><option value="0424">0424</option>
                                    <option value="0412">0412</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="<?php echo $t; ?>" maxlength="7" required="required" onkeypress="return soloNumeros(event);">
                            </div>
                            </div>
                            <textarea id="mensaje" name="mensaje" placeholder="<?php echo $m; ?>" required="required"></textarea>
                            <span><input type="submit" value="<?php echo $en;?>"></span>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
