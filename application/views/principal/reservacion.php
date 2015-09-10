<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:09 PM
 */?>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/reservacion.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>RESERVA YA</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="http://localhost/ifamil/index.php/Reserva/Principal/registrarAfiliado">
            <div class="col-md-6">
                <input type="text" name="desde" id="desde" placeholder="Desde">
            </div>
            <div class="col-md-6">
                <input type="text" name="hasta" id="hasta" placeholder="Hasta">
            </div>
            <div class="col-md-6">
                <input type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular">
            </div>
            <div class="col-md-6">
                <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
            </div>
            <div class="col-md-6">
                <input type="text" name="fechadeSalida" id="fechadeSalida" placeholder="Fecha de Salida">
            </div>
            <div class="col-md-6">
                <input type="text" name="fechadeLlegada" id="fechadeLlegada" placeholder="Fecha de Llegada">
            </div>
            <div class="col-md-6">
                <select name="cantidadPasajeros" class="input-sm" style="width: 100%" id="cantidadPasajeros">
                    <option value="0">Cantidad de Pasajeros</option>
                    <?php for($i = 1; $i <= 10; $i ++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }

                    ?>
                    </select>
            </div>

            <div class="col-md-6">
                <select name="cantidadNinos" class="input-sm" style="width: 100%" id="cantidadNinos">
                    <option value="0">Cantidad de Ni?os</option>
                    <?php for($i = 1; $i <= 10; $i ++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <select name="cantidadAdultos" class="input-sm" style="width: 100%" id="cantidadAdultos">
                    <option value="0">Cantidad de Adultos</option>
                    <?php for($i = 1; $i <= 10; $i ++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" name="formadePago" id="formadePago" placeholder="Forma de pago que desea Usar">
            </div>
            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>
</div>

