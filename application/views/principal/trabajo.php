<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:08 PM
 */?>
<?php
$t = "Dejanos tu currículum";
$c = 'Cedula';
$n = 'Nombre completo';
$e = 'Correo electronico';
$co = '----';
$p = 'Número de telefono celular o habitación';
$m = 'Presentación';
$s = 'ENVIAR';
$o="Otros";
$g="Genero";
$ma="Masculino";
$f="Femenino";
$ci="¿En que Ciudad Vives?";
$dir="¿Dirección Fiscal?... (Tu Dirección como aparece en el R.I.F.)";
$fecha="Fecha de nacimiento";
$cu="Adjunta tu currículum:";
if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i') {
    $t = "Give us your curriculum";
    $c = 'DNI';
    $n = 'Full name';
    $e = 'EMAIL';
    $co = '----';
    $p = 'Cell phone number or room';
    $m = 'Presentation';
    $s = 'SUBMIT';
    $o="Others";
    $g="Gender";
    $ma="Male";
    $f="Female";
    $ci="What city you live?";
    $dir="¿Fiscal address? ... ( Your address as shown in the R.I.F)";
    $fecha="Birthdate";
    $cu="Attach your currículum:";


} ?>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/opinion.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__?>images/amarillo2.jpg" style="width: 100%">
    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1><?php echo $t?></h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="#" onsubmit="return guardar();">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="cedula" id="cedula" placeholder="<?php echo $c?>" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-4">
                    <input type="text" name="nombre" id="nombre" placeholder="<?php echo $n?>" required="required">
                </div>
                <div class="col-md-4">
                    <input type="email" name="correo" id="correo" placeholder="<?php echo $e?>" required="required">
                </div>
                <div class="col-md-1">
                    <select required id="codTel" name="codTel"style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                        <option value=""><?php echo $co?></option>
                        <option value="0416">0416</option><option value="0426">0426</option>
                        <option value="0414">0414</option><option value="0424">0424</option>
                        <option value="0412">0412</option>
                        <option value="otros"><?php echo $o; ?></option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="<?php echo $p?>" maxlength="7" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-4">
                    <select required id="codTel" name="codTel"style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                        <option value=""><?php echo $g?></option>
                        <option value="M"><?php echo $ma?></option>
                        <option value="F"><?php echo $f?></option><
                        <option value="otros"><?php echo $o; ?></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="ciudad" id="ciudad" placeholder="<?php echo $ci?>" maxlength="7" required="required"">
                </div>
                <div class="col-md-12">
                    <input style="width: 100%;" type="text" name="direccion" id="direccion" placeholder="<?php echo $dir?>" maxlength="7" required="required"">
                </div>
                <div class="col-md-6">
                    <input type="text" required="required" name="fechan" id="fechan" placeholder="<?php echo $fecha;?>">
                </div>
                <div class="col-md-2">
                    <h5><?php echo $cu;?></h5>
                </div>
                <div class="col-md-4">
                    <input type="file" name="curri" id="curri" class="form-control"/>

                </div>
                <div class="col-md-12">
                    <textarea id="mensaje" name="mensaje" placeholder="<?php echo $m?>" required="required"></textarea>
                </div>
            </div>

            <span><input type="submit" value="<?php echo $s; ?>"></span>
        </form>
    </div>

