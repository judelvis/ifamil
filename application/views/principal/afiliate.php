<?php
/**
 * Created by Antony
 * User: breyner
 * Date: 9/5/15
 * Time: 3:24 PM
 */ ?>

<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/afiliate.js"></script>
<?php
$t = "Afiliate YA";
$c = 'Cedula';
$n = 'Nombre';
$co = 'Correo';
$cod = 'Código';
$tlf = 'Número de telefonó celulad o habitación';
$f ='Fecha de Nacimiento';
$s='Seleccione su condición';
$s1='Militar activo';
$s2='Militar retirado';
$s3='Particular';
$s4='Empresa';
$e='ENVIAR';
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t = "Register now";
    $c = 'DNI';
    $n = 'Full name';
    $co = 'Email';
    $cod = 'City Code';
    $tlf = 'Cell Phone or number Phone home';
    $f ='Birthdate';
    $s='Select your status';
    $s1='Active military';
    $s2='Retired military';
    $s3='Particular';
    $s4='Company';
    $e='SUBMIT';

} ?>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">
    <div class="main_bg"><!-- start main -->
    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1><?php echo $t; ?></h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="#" onsubmit="return guardar();">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="cedula" id="cedula" placeholder="<?php echo $c; ?>" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombre" id="nombre" placeholder="<?php echo $n; ?>" required="required">
                </div>
                <div class="col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="<?php echo $co; ?>" required="required">
                </div>
                <div class="col-md-2">
                    <select id="codTel" name="codTel"style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                        <option value="0"><?php echo $cod; ?></option>
                        <option value="0416">0416</option><option value="0426">0426</option>
                        <option value="0414">0414</option><option value="0424">0424</option>
                        <option value="0412">0412</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="<?php echo $tlf; ?>" maxlength="7" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                    <input type="text" id="fechaNacimiento" name="fechaNacimiento" placeholder="<?php echo $f; ?>">
                </div>
                <div class="col-md-6">
                    <input type="text" name="faceBook" placeholder="FaceBook">
                </div>
                <div class="col-md-12">
                    <select id="profesion" name="profesion" style="width: 100%;" class="input-sm">
                        <option value="0"><?php echo $s; ?></option>
                        <option value="A"><?php echo $s1; ?></option>
                        <option value="J"><?php echo $s2; ?></option>
                        <option value="P"><?php echo $s3; ?></option>
                        <option value="R"><?php echo $s4; ?></option>
                    </select>
                </div>
            </div>

            <span><input type="submit" value="<?php echo $e;?>"></span>
        </form>
    </div>
</div>
    </div>
