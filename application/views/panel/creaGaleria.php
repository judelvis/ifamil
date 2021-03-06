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
				<form class="form-horizontal" action="#">
					<div class="form-group">
						<label for="autosize" class="control-label col-lg-2">Producto</label>
						<div class="col-lg-2">
							<?php if(isset($id)){?>
							<input type="text" placeholder="Producto" class="form-control"
								name="serie" id="serie" value='<?php echo $id;?>' />
							<?php }else{?>
							<select data-placeholder="Seleccione Sevicio"
								class="form-control " id='serie' name='serie'
								onchange="consultar();"></select>
							<?php }?>
                        </div>
                        <label for="autosize" class="control-label col-lg-2">Fecha</label>
                        <div class="col-lg-2">
                            <input type="text" placeholder="Fecha" class="datepicker form-control"
                                   name="fecha" id="fecha"  />
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

                        <label for="autosize" class="control-label col-lg-2">Enlace</label>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Enlace" class="form-control"
                                   name="enlace" id="enlace"  />
                        </div>
					</div>
					<!-- <a href="#" class="btn btn-primary btn-lg" onclick="registrar();">Registrar</a> -->
					<div class="panel-body">
						<button class="btn btn-primary" data-toggle="modal" onclick="registrar();"
							>Registrar</button>

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
			<div  class="accordion-body collapse in body">
                <div id="reporte"></div>
            </div>
		</div>
	</div>
</div>
<script
	src="<?php echo __PANEL__;?>plugins/jasny/js/bootstrap-fileupload.js"></script>
