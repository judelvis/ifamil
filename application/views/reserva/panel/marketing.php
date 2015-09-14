
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
                            <input type="text" placeholder="Ingrese Nombre Aeropuero" class="form-control"
                                   name="nom" id="nom" required="required"/>
                        </div>

                        <div class="col-lg-4">
                            <input type="text" placeholder="Ingrese Codigo Del Aeropuero" class="form-control"
                                   name="cod" id="cod" required="required"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Ingrese Nombre Del Estado" class="form-control"
                                   name="est" id="est" required="required"/>
                        </div>
                    </div>

                    <div class="panel-body">
                        <button class="btn btn-primary" data-toggle="modal" onclick="registrar();">Registrar
                        </button>

                    </div>
                </form>
            </div>
			<div class="accordion-body collapse in body">
                <div id="reporte"></div>
            </div>
		</div>
	</div>
</div>
