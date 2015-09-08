<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:09 PM
 */?>
<script>
    $(function() {

    });
</script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>RESERVA YA</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="http://localhost/ifamil/index.php/Reserva/Principal/registrarAfiliado">
            <div class="col-md-6">
                <input type="text" name="cedula" id="cedula" placeholder="Cedula">
            </div>
            <div class="col-md-6">
                <input type="text" name="nombre" id="name" placeholder="Nombre completo">
            </div>
            <div class="col-md-6">
                <input type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular">
            </div>
            <div class="col-md-6">
                <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
            </div>
            <div class="col-md-6">
                <input type="text" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
            </div>
            <div class="col-md-6">
                <input type="text" name="faceBook" placeholder="FaceBook">
            </div>
            <div class="col-md-12">
                <input type="text" name="profesion" placeholder="Profesion">
            </div>
            <span><input type="submit" value="ENVIAR"></span>
        </form>
        <div class="ui-widget">
            <label for="tags">Tags: </label>
            <input id="tags">
        </div>
    </div>
</div>

