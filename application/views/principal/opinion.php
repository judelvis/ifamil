<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/8/15
 * Time: 12:08 PM
 */?>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<script type="text/javascript" src="<?php echo __JSVIEW__ ?>frontEnd/opinion.js"></script>
<div class="contact-form">
    <img src="<?php echo __IMG__?>images/amarillo2.jpg" style="width: 100%">
    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>DANOS TU OPINION</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
        <form method="post" action="http://localhost/ifamil/index.php/Reserva/Principal/registrarAfiliado">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="cedula" id="cedula" placeholder="Cedula" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required="required">
                </div>
                <div class="col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="Correo Electronico" required="required">
                </div>
                <div class="col-md-2">
                    <select id="codTel" name="codTel"style="width: 100%;" class="input-sm" onchange="verificarCodigo()">
                        <option value="0">Código</option>
                        <option value="0416">0416</option><option value="0426">0426</option>
                        <option value="0414">0414</option><option value="0424">0424</option>
                        <option value="0412">0412</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular" maxlength="7" required="required" onkeypress="return soloNumeros(event);">
                </div>
                <div class="col-md-12">
                    <textarea id="mensaje" name="mensaje" placeholder="Dinos tu opinión..." required="required"></textarea>
                </div>
            </div>

            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>

