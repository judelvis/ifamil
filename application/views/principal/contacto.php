<script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid1">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>CONTACTANOS</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
    <div class="container">
        <div class="contact">
            <center>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1961.6755529000425!2d-66.89525299865238!3d10.472963174847518!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1441404862591"
                width="88%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><div class="contact_main">
            </center>
                    <div class="col-md-4 company_ad">
                    <h2>Dirección :</h2>
                    <address>
                        <p><b>IFAMIL - Caracas - Sede Principal:</b></p>
                        <p>Av. Los Proceres C.C Los Proceres Nivel 3 </p>
                        <p>area socialista Urb. Aanta Monica Caracas </p>
                        <p>Distrito Capital Zona postal 1040.</p>
                        <p>Telefono:(0212) 661 56 16</p>
                        <p>Fax: (662) 41 06</p>
                        <p><b>Sucursal IFAMIL - Maracay:</b></p>
                        <p>Av. Bolívar, Edif. Almacenes Militares I.P.S.F.A.,</p>
                        <p>Los Jardines de Maracay. Maracay,</p>
                        <p>estado Aragua-Venezuela.</p>
                        <p>Email: <a href="https://snt151.mail.live.com/" target="_blank">ifamil@hotmail.com</a>  <a href="https://plus.google.com/u/0/116239479180848308489/posts">ifamilviajesyturismo@gmail.com</a></p>
                        <p>Siguenos: <a href="https://www.facebook.com/profile.php?id=100008649614216">Facebook</a>, <a href="https://twitter.com/ifamil_ca">Twitter</a>, <a href="https://instagram.com/ifamil_c.a">Insatagram</a>.</p>
                    </address>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <h2>Contacto</h2>
                        <form method="post" action="<?php echo base_url("index.php/Principal/enviarcontacto")?>">
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido..." required="required">
                            <input type="email" name="correo" id="correo" placeholder="Correo Electronico" required="required">
                            <div class="col-md-3">
                                <select id="codTel" name="codTel"style="width: 100%;" class="input-sm">
                                    <option value="0416">0416</option><option value="0426">0426</option>
                                    <option value="0414">0414</option><option value="0424">0424</option>
                                    <option value="0412">0412</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <input style="width: 100%;" type="text" name="telefono" id="telefono" placeholder="Numero de telefono Celular" required="required" onkeypress="return soloNumeros(event);">
                            </div>
                            <textarea id="mensaje" name="mensaje" placeholder="Mensaje..." required="required"></textarea>
                            <span><input type="submit" value="ENVIAR"></span>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
