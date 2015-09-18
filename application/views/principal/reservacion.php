<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:09 PM
 */

$val = array("SELECCIONA TU PLAN","Correo Electronico","Código","Otros","Numero de telefono Celular",
    "Especifique ruta de transporte que desea tomar","Aeropuerto de Salida","Aeropuerto de Llegada",
    "Fecha de Salida","Con Retorno?","Fecha de Retorno","Cantidad de Adultos","Cantidad de Niños",
    "Escriba cualquier inquietu aqui","Debito","Efectivo","Cheque","Tarjeta de Credito","Transferencia","Enviar");
if(isset($_SESSION['idioma'])){
    $val = array("CHOOSE YOUR PLAN","Email","Code","Others","Cellphone number","Specify transport route you want to take",
        "Departure airport","Arrival Airport","Departure date","With return ?","Return Date",
        "Number of Adults","Number of Children","Type any inquietu here","Debit","Cash","Check","Credit card","Wire transfer","Send");
}
?>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/reservacion.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1><?php echo $val[0];?></h1>

            <h2 id="tituloPagina"></h2></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="#" onsubmit="return guardar();">
            <input type="hidden" name="categoria" id="categoria" value="<?php echo $tipo; ?>">

            <div class="row">
                <div class="col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="<?php echo $val[1];?>" required="required">
                </div>
                <div class="col-md-2">
                    <select id="codTel" name="codTel" style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                        <option value="0"><?php echo $val[2];?></option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0412">0412</option>
                        <option value="otros"><?php echo $val[3];?></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono"
                           placeholder="<?php echo $val[4];?>" maxlength="7" required="required"
                           onkeypress="return soloNumeros(event);">
                </div>
            </div>
            <div class="row hide" id="divTransporte">
                <div class="col-md-12">
                    <input type="text" name="transporte" id="transporte"
                           placeholder="<?php echo $val[5];?>">
                </div>
            </div>
            <div class="row hide" id="divViajes">
                <div class="col-md-6">
                    <input type="text" name="desdeT" id="desdeT" placeholder="<?php echo $val[6];?>">
                    <input type="hidden" name="origen" id="origen">
                </div>
                <div class="col-md-6">
                    <input type="text" name="hastaT" id="hastaT" placeholder="<?php echo $val[7];?>">
                    <input type="hidden" name="destino" id="destino">
                </div>
            </div>
            <div class="row hide" id="divHotel">
                <div class="col-md-6">
                    <select id="estado" name="estado" class="input-sm" style="width: 100%"
                            onchange="buscarDestino();"></select>
                </div>
                <div class="col-md-6">
                    <select id="hospedaje" name="hospedaje" class="input-sm" style="width: 100%">
                        <option value="0">Por asignar</option>
                    </select>
                </div>
            </div>
            <div class="row hide" id="divPaquete">
                <div class="col-md-12">
                    <select id="paquete" name="paquete" class="input-sm" style="width: 100%"></select>
                    <input type="hidden" id="vaPaquete" value="<?php echo $oid;?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <input type="text" name="fechaSalida" id="fechaSalida" placeholder="<?php echo $val[8];?>">
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label>
                            <?php echo $val[9];?><input type="checkbox" id="vuelta" name="vuelta" onclick="verificaVuelta();">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="fechaLlegada" id="fechaLlegada" placeholder="<?php echo $val[10];?>"
                           disabled="disabled">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="cantidadAdulto" class="input-sm" style="width: 100%" id="cantidadAdulto"
                            required="required">
                        <option value="0"><?php echo $val[11];?></option>
                        <?php for ($i = 1; $i <= 15; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <select name="cantidadNino" class="input-sm" style="width: 100%" id="cantidadNino"
                            required="required">
                        <option value="0"><?php echo $val[12];?></option>
                        <?php for ($i = 1; $i <= 15; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="detalle" id="detalle" placeholder="<?php echo $val[13];?>">
                </div>
                <div class="col-md-6">
                    <select name="formadePago" class="input-sm" style="width: 100%" id="formadePago">
                        <option value="0"><?php echo $val[14];?></option>
                        <option value="1"><?php echo $val[15];?></option>
                        <option value="2"><?php echo $val[16];?></option>
                        <option value="3"><?php echo $val[17];?></option>
                        <option value="4"><?php echo $val[18];?></option>
                    </select>
                </div>
            </div>
            <span><input type="submit" value="<?php echo $val[19];?>"></span>
        </form>
    </div>
</div>

