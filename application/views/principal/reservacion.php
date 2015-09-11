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
        <center><h1>RESERVA YA</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="http://localhost/ifamil/index.php/Reserva/Principal/registrarAfiliado">
            <input type="hidden" name="categoria" id="categoria" value="<?php echo $tipo;?>">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
                </div>
                <div class="col-md-6">
                    <input type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular">
                </div>
            </div>
            <div class="row hide" id="divTransporte">
                <div class="col-md-12">
                    <input type="text" name="transporte" id="transporte" placeholder="Especifique ruta de transporte que desea tomar">
                </div>
            </div>
            <div class="row hide" id="divViajes">
                <div class="col-md-6">
                    <input type="text" name="desdeT" id="desdeT" placeholder="Aeropuerto de Salida">
                    <input type="hidden" name="desde" id="desde">
                </div>
                <div class="col-md-6">
                    <input type="text" name="hastaT" id="hastaT" placeholder="Aeropuerto de Llegada">
                    <input type="hidden" name="hasta" id="hasta">
                </div>
            </div>
            <div class="row hide" id="divHotel">
                <div class="col-md-6">
                    <select id="estado" name="estado" class="input-sm" style="width: 100%"  onchange="buscarDestino();"></select>
                </div>
                <div class="col-md-6">
                    <select id="hospedaje" name="hospedaje" class="input-sm" style="width: 100%" ></select>
                </div>
            </div>
            <div class="row hide" id="divPaquete">
                <div class="col-md-12">
                    <input type="text" name="paquereT" id="paqueteT" placeholder="Describa el paquete que desea">
                    <input type="hidden" name="paquete" id="paquete">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="fechadeSalida" id="fechadeSalida" placeholder="Fecha de Salida">
                </div>
                <div class="col-md-6">
                    <input type="text" name="fechadeLlegada" id="fechadeLlegada" placeholder="Fecha de Llegada">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="cantidadPasajeros" class="input-sm" style="width: 100%" id="cantidadPasajeros">
                        <option value="0">Cantidad de Pasajeros</option>
                        <?php for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <select name="cantidadNinos" class="input-sm" style="width: 100%" id="cantidadNinos">
                        <option value="0">Cantidad de Niños</option>
                        <?php for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="cantidadAdultos" class="input-sm" style="width: 100%" id="cantidadAdultos">
                        <option value="0">Cantidad de Adultos</option>
                        <?php for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" name="formadePago" id="formadePago" placeholder="Forma de pago que desea Usar">
                </div>
            </div>
            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>
</div>

