<!DOCTYPE html>
<!--[if IE 8]> <html lang="sp" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="sp" class="ie9"> <![endif]-->

<html lang="sp">
<head>
    <meta charset="UTF-8" />
    <title>Panel de Control</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>css/main.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>css/theme.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo __PANEL__;?>css/jquery-ui.css" rel="stylesheet" />
    <!--
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/uniform/themes/default/css/uniform.default.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/chosen/chosen.min.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>plugins/switch/static/stylesheets/bootstrap-switch.css" />
    <link rel="stylesheet" href="<?php echo __PANEL__;?>css/bootstrap-fileupload.min.css" />
    !-->



    <script type="text/javascript" src="<?php echo __DTGRID__ ?>js/include/jquery-2.1.3.min.js"></script>
    <script src="<?php echo __DTGRID__ ?>js/html5shiv.js"></script>
    <script src="<?php echo __DTGRID__ ?>js/respond.min.js"></script>


    <script type="text/javascript" src="<?php echo __JSVIEW__ ?>general/Global.js"></script>
    <link rel="stylesheet" href="<?php echo __DTGRID__ ?>css/dataTable.css">
    <link type="text/css" rel="stylesheet" href="<?php echo __DTGRID__ ?>md/css/materialize.min.css" media="screen,projection"/>
    <script type="text/javascript" src="<?php echo __DTGRID__ ?>js/dtgrid.js"></script>
    <script type="text/javascript" src="<?php echo __DTGRID__ ?>js/editar.js"></script>
    <script type="text/javascript" src="<?php echo __JSVIEW__ ?>panel/<?php echo $js; ?>.js"></script>
    <script type="text/javascript" src="<?php echo __DTGRID__ ?>js/accion.js"></script>
    <script type="text/javascript" src="<?php echo __DTGRID__ ?>md/js/materialize.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="padTop53 ">
<div class="row">
		<div class="col-lg-12">
			<div class="modal" id="msj_alertas" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Respuesta</h4>
						</div>
						<div class="modal-body" id='modal_mensaje'>
							mensaje
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MAIN WRAPPER -->
	<div id="wrap">


		<!-- HEADER SECTION -->
		<div id="top">

			<nav class="navbar navbar-inverse navbar-fixed-top "
				style="padding-top: 10px;">
				<a data-original-title="Show/Hide Menu" data-placement="bottom"
					data-tooltip="tooltip"
					class="accordion-toggle btn btn-primary btn-sm visible-xs"
					data-toggle="collapse" href="#menu" id="menu-toggle"> <i
					class="icon-align-justify"></i>
				</a>
				<!-- LOGO SECTION -->
				<header class="navbar-header">

					<a href="#" class="navbar-brand"> <img height="40px;"
						src="" alt="" />Panel de CONTROL IFAMIL</a>
				</header>
				<!-- END LOGO SECTION -->
				

			</nav>

		</div>
		<!-- END HEADER SECTION -->


  
