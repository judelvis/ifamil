<?php
/**
 * Created by Antony
 * User: breyner
 * Date: 9/5/15
 * Time: 3:24 PM
 */ ?>

<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/afiliate.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>AFILIATE YA</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="#" onsubmit="return guardar();">
            <div class="row">
                <div class="col-md-1 input-sm">
                    <select id="V" name="V"style="width: 100%;" >
                        <option value="v">V</option>
                        <option value="e">E</option><
                    </select>
                </div>
                <div class="col-md-5">
                    <input type="text" name="cedula" id="cedula" placeholder="Cedula" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required="required">
                </div>
                <div class="col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="Correo Electronico" required="required">
                </div>
                <div class="col-md-2">
                    <select id="codTel" name="codTel"style="width: 100%;" class="input-sm">
                        <option value="0">Codigo</option>
                        <option value="0416">0416</option><option value="0426">0426</option>
                        <option value="0414">0414</option><option value="0424">0424</option>
                        <option value="0412">0412</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                    <input type="text" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
                </div>
                <div class="col-md-6">
                    <input type="text" name="faceBook" placeholder="FaceBook">
                </div>
                <div class="col-md-12">
                    <select id="profesion" name="profesion "style="width: 100%;" class="input-sm">
                        <option value="0">Profesión</option>
                        <option value="M">Uniformado</option>
                        <option value="P">Particular</option>

                    </select>
                </div>
            </div>

            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>
</div>
