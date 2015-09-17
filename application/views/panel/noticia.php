<?php
/**
 * Created by PhpStorm.
 * User: judprog
 * Date: 07/05/15
 * Time: 12:12 PM
 */
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box dark">
            <header>
                <div class="icons">
                    <i class="icon-edit"></i>
                </div>
                <h5>Registro</h5>

                <div class="toolbar">
                    <ul class="nav">
                        <li><a class="accordion-toggle minimize-box"
                               data-toggle="collapse" href="#div-1"> <i class="icon-chevron-up"></i>
                            </a></li>
                    </ul>
                </div>
            </header>
            <div id="div-1" class="accordion-body collapse in body">
                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="autosize" class="control-label col-sm-1">Titulo</label>

                        <div class="col-lg-3">
                            <input type="text" placeholder="Titulo" class="form-control"
                                   name="titulo" id="titulo"/>
                        </div>
                        <label for="autosize" class="control-label col-sm-1">Detalle</label>

                        <div class="col-lg-3">
                            <textarea id="descrip" name="descrip" class="form-control"></textarea>
                        </div>
                        <label for="autosize" class="control-label col-sm-1">Resumen</label>

                        <div class="col-lg-3">
                            <textarea id="resumen" name="resumen" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="autosize" class="control-label col-sm-1">Titulo Ing.</label>

                        <div class="col-lg-3">
                            <input type="text" placeholder="Titulo En Ingles" class="form-control"
                                   name="titulo_i" id="titulo_i"/>
                        </div>
                        <label for="autosize" class="control-label col-sm-1">Detalle Ing.</label>

                        <div class="col-lg-3">
                            <textarea id="descrip_i" name="descrip_i" class="form-control"></textarea>
                        </div>
                        <label for="autosize" class="control-label col-sm-1">Resumen Ing.</label>

                        <div class="col-lg-3">
                            <textarea id="resumen_i" name="resumen_i" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="autosize" class="control-label col-md-1">Fecha</label>
                        <div class="col-lg-3">
                            <input type="text" placeholder="fecha"
                                   name="fecha" id="fecha" class="datepicker form-control"/>
                        </div>
                        <label for="autosize" class="control-label col-md-1">Enlace</label>

                        <div class="col-lg-3">
                            <input type="text" placeholder="Enlace" class="form-control"
                                   name="enlace" id="enlace"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-2">Seleccione Imagen</label>
                        <div class="col-lg-2">
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text"/>
                                <a class="waves-effect waves-light btn"><input type="file" id="imagen"/>Archivo</a>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="btn btn-primary btn-lg" onclick="registrar();">Registrar</a> -->
                    <div class="panel-body">
                        <button class="btn btn-primary" data-toggle="modal" onclick="registrar();"
                            >Registrar
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="modal" id="notificationModal" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Cargando</h4>
                        </div>
                        <div class="modal-body">
                            <div class="progress progress-striped active">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span class="sr-only">Cargando</span>
                                </div>
                            </div>
                        </div>

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
                <h5>Lista De Imagenes</h5>

                <div class="toolbar">
                    <ul class="nav">
                        <li><a class="accordion-toggle minimize-box"
                               data-toggle="collapse" href="#reporte"> <i
                                    class="icon-chevron-up"></i>
                            </a></li>
                    </ul>
                </div>
            </header>
            <div id="reporte" class="accordion-body collapse in body"></div>
        </div>
    </div>
</div>
<script
    src="<?php echo __PANEL__; ?>plugins/jasny/js/bootstrap-fileupload.js"></script>
