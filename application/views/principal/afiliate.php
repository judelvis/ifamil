<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 9/5/15
 * Time: 3:24 PM
 */ ?>
<script>
    $(function() {
        $( "#fechaNacimiento" ).datepicker({
            changeMonth: true,
            changeYear: true
        });
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi?rcoles', 'Jueves', 'Viernes', 'S?bado'],
            dayNamesShort: ['Dom','Lun','Mar','Mi?','Juv','Vie','S?b'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S?'],
            weekHeader: 'Sm',
            dateFormat: 'yy/mm/dd',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
            $("#fecha").datepicker();
        });
    });
</script>
<div class="contact-form">
    <img src="<?php echo __IMG__ ?>images/amarillo2.jpg" style="width: 100%">

    <div class="container">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>AFILIATE YA</h1></center>
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
                <input type="text" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
            </div>
            <div class="col-md-6">
                <input type="text" name="faceBook" placeholder="FaceBook">
            </div>
            <div class="col-md-12">
                <input type="text" name="profesion" placeholder="Profesion">
            </div>
            <span><input type="submit" value="ENVIAR"></span>
        </form>
    </div>
</div>
