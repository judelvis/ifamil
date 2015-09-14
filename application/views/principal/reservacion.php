<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:09 PM
 */ ?>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/reservacion.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>RESERVA YA</h1>

            <h2 id="tituloPagina"></h2></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="#" onsubmit="return guardar();">
            <input type="hidden" name="categoria" id="categoria" value="<?php echo $tipo; ?>">

            <div class="row">
                <div class="col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="Correo Electronico" required="required">
                </div>
                <div class="col-md-2">
                    <select id="codTel" name="codTel" style="width: 100%;" class="input-sm">
                        <option value="0">Código</option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0412">0412</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono"
                           placeholder="Numero de telefono Celular" required="required"
                           onkeypress="return soloNumeros(event);">
                </div>
            </div>
            <div class="row hide" id="divTransporte">
                <div class="col-md-12">
                    <input type="text" name="transporte" id="transporte"
                           placeholder="Especifique ruta de transporte que desea tomar">
                </div>
            </div>
            <div class="row hide" id="divViajes">
                <div class="col-md-6">
                    <input type="text" name="desdeT" id="desdeT" placeholder="Aeropuerto de Salida">
                    <input type="hidden" name="origen" id="origen">
                </div>
                <div class="col-md-6">
                    <input type="text" name="hastaT" id="hastaT" placeholder="Aeropuerto de Llegada">
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <input type="text" name="fechaSalida" id="fechaSalida" placeholder="Fecha de Salida">
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label>
                            Ida y Vuelta?<input type="checkbox" id="vuelta" name="vuelta" onclick="verificaVuelta();">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="fechaLlegada" id="fechaLlegada" placeholder="Fecha de Retorno"
                           disabled="disabled">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="cantidadAdulto" class="input-sm" style="width: 100%" id="cantidadAdulto"
                            required="required">
                        <option value="0">Cantidad de Adultos</option>
                        <?php for ($i = 1; $i <= 15; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <select name="cantidadNino" class="input-sm" style="width: 100%" id="cantidadNino"
                            required="required">
                        <option value="0">Cantidad de Niños</option>
                        <?php for ($i = 1; $i <= 15; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="detalle" id="detalle" placeholder="Escriba cualquier inquietu aqui">
                </div>
                <div class="col-md-6">
                    <select name="formadePago" class="input-sm" style="width: 100%" id="formadePago">
                        <option value="0">Debito</option>
                        <option value="1">Efectivo</option>
                        <option value="2">Cheque</option>
                        <option value="3">Credito</option>
                    </select>
                </div>
            </div>
            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>
</div>

