<div class="col-lg-12">
    <div class="modal" id="enviar" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div>
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Responder al Correo</h4>
                </div>
                <div class="modal-body" id='modal_mensaje'>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" id="correo" name="correo" readonly=true />
                    </div>
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
                        <p class="help-block">Escriba mensaje de respuesta al cliente aqui.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="enviarCorreo();">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="box dark">
        <header>
            <div class="icons">
                <i class="icon-edit"></i>
            </div>
            <h5>Lista General</h5>

            <div class="toolbar">
                <ul class="nav">
                    <li><a class="accordion-toggle minimize-box"
                           data-toggle="collapse" href="#reporte"> <i
                                class="icon-chevron-up"></i>
                        </a></li>
                </ul>
            </div>
        </header>
        <div class="accordion-body collapse in body">
            <div id="reporte"></div>
        </div>
    </div>
</div>
</div>


