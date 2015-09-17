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
                        <label for="autosize" class="control-label col-md-1">Nombre</label>
                        <div class="col-lg-2">
                            <input type="text" placeholder="Nombre Del Paquete"
                                   class="form-control" name="titulo" id="titulo" />
                        </div>
						<label for="autosize" class="control-label col-md-1">Resumen</label>
						<div class="col-lg-2">
							<textarea class="form-control" name="resumen" id="resumen"></textarea>
						</div>
                        <label for="autosize" class="control-label col-md-1">Descripcion</label>
                        <div class="col-lg-4">
                            <textarea class="form-control" name="descrip" id="descrip"></textarea>
                        </div>
					</div>

                    <div class="form-group">
                        <label for="autosize" class="control-label col-md-1">Nombre Ing.</label>
                        <div class="col-lg-2">
                            <input type="text" placeholder="Nombre Del Paquete en Ingles"
                                   class="form-control" name="titulo_i" id="titulo_i" />
                        </div>
                        <label for="autosize" class="control-label col-md-1">Resumen Ing.</label>
                        <div class="col-lg-2">
                            <textarea class="form-control" name="resumen_i" id="resumen_i"></textarea>
                        </div>
                        <label for="autosize" class="control-label col-md-1">Descripcion Ing.</label>
                        <div class="col-lg-4">
                            <textarea class="form-control" name="descrip_i" id="descrip_i"></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="autosize" class="control-label col-md-1">Fecha</label>
                        <div class="col-lg-2">
                            <input type="text" placeholder=""
                                   class="datepicker form-control" name="fecha" id="fecha" />
                        </div>
                        <label for="autosize" class="control-label col-md-1">Categoria</label>
                        <div class="col-lg-3">
                            <select data-placeholder="Seleccione categoria"
                                    class="form-control " id='categoria' name='categoria'></select>
                        </div>

                    </div>
					<a href="#" class="btn btn-primary btn-lg" onclick="Registrar();">Registrar</a>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="box dark">
			<header>
				<div class="icons">
					<i class="icon-edit"></i>
				</div>
				<h5>Lista De Series</h5>
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


