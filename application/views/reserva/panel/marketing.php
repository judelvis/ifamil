
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
            <div id="div-1" class="accordion-body collapse in body">
                <form class="form-horizontal">

                    <div class="form-group">

                        <div class="col-lg-4">
                            <select id="paquete" name="paquete" class="browser-default"></select>
                        </div>

                        <div class="col-lg-4">
                            <select id="profesion" name="profesion" class="browser-default">
                                <option value="0">Seleccione su condición</option>
                                <option value="A">Militar Activo</option>
                                <option value="J">Militar Jubilado</option>
                                <option value="P">Particular</option>
                                <option value="R">Empresa</option>
                            </select>

                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary" data-toggle="modal" onclick="enviar();">Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
			<div class="accordion-body collapse in body">
                <div id="reporte"></div>
            </div>
		</div>
	</div>
</div>
