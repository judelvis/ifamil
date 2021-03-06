<div class="row">
	<div class="col-lg-12">
		<div class="box dark">
			<header>
				<div class="icons">
					<i class="icon-edit"></i>
				</div>
				<h5>Registro De Categoria</h5>
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
						<label for="autosize" class="control-label col-lg-2">Titulo</label>
						<div class="col-lg-4">
							<input type="text" placeholder="INGRESE CATEGORIA"class="form-control" name="categoria" id="categoria" />
						</div>
                        <label for="autosize" class="control-label col-lg-2">Descripcion</label>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Descripcion"class="form-control" name="descrip" id="descrip" />
                        </div>
                        <label for="autosize" class="control-label col-lg-2">Titulo En Ingles</label>
                        <div class="col-lg-4">
                            <input type="text" placeholder="INGRESE CATEGORIA EN INGLES"class="form-control" name="categoria_i" id="categoria_i" />
                        </div>
                        <label for="autosize" class="control-label col-lg-2">Descripcion En Ingles</label>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Descripcion En Ingles"class="form-control" name="descrip_i" id="descrip_i" />
                        </div>
						<div class="col-lg-2"><a href="#" class="btn btn-primary btn-lg" onclick="Registrar();">Registrar</a></div>
					</div>

					
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
				<h5>Categorias Registradas</h5>
				<div class="toolbar">
					<ul class="nav">
						<li><a class="accordion-toggle minimize-box"
							data-toggle="collapse" href="#reporte"> <i class="icon-chevron-up"></i>
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