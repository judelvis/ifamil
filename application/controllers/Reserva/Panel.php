<?php

/**
 * Administracion de Solicitudes
 *
 * @package application.controller.Reserva.Panel
 * @author mamonsoft.ca-crash (Carlos Peña)
 * @date 2015-09-04
 */
date_default_timezone_set ( 'America/Caracas' );
session_start ();
class Panel extends CI_Controller {
	/**
	 * El Panel de Control de la interfaz gráfica de los sistema permite a los usuarios
	 * que vean y que manipulen ajustes y controles del sistema básico, tales como
	 * Agregar nuevo hardware, Agregar o quitar programas, Cuentas de usuario y opciones de
	 * accesibilidad entre otras opciones de sonidos y pantalla.
	 * Applets adicionales pueden ser
	 * proporcionados por el software de terceros.
	 *
	 * @copyright Mamonsoft, C.A
	 */
	function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
	}
	function index() {
		$this->load->view ( 'reserva/entrar' );
	}
	
	/**
	 * Interfaz de usuario
	 * git
	 */
	function principal() {
		if (! isset ( $_SESSION ['usuario_ifamil'] )) {
			session_destroy ();
			redirect ( base_url () . 'index.php/Reserva/Panel' );
		} else {
			$this->load->model ( 'panel/Mpanel', 'MPanel' );
			$data ['js'] = 'solicitud';
			$data ['titulo'] = 'Solicitudes Pendientes';
			$data ['formulario'] = 'reservaciones';
			$this->load->view ( 'reserva/panel/incluir/cabecera', $data );
			$this->load->view ( 'reserva/panel/incluir/menu' );
			$this->load->view ( 'reserva/panel/principal', $data );
		}
	}
	
	/**
	 * Interfaz de usuario
	 */
	function ruta() {
		if (! isset ( $_SESSION ['usuario_ifamil'] )) {
			session_destroy ();
			redirect ( base_url () . 'index.php/Reserva/Panel' );
		} else {
			$data ['js'] = 'sitio';
			$data ['titulo'] = 'Listado de Rutas o Aeropuertos';
			$data ['formulario'] = 'sitio';
			$this->load->view ( 'reserva/panel/incluir/cabecera', $data );
			$this->load->view ( 'reserva/panel/incluir/menu' );
			$this->load->view ( 'reserva/panel/principal', $data );
		}
	}
	function marketing() {
		if (! isset ( $_SESSION ['usuario_ifamil'] )) {
			session_destroy ();
			redirect ( base_url () . 'index.php/Reserva/Panel' );
		} else {
			$data ['js'] = 'marketing';
			$data ['titulo'] = 'Estrategia de Envios';
			$data ['formulario'] = 'marketing';
			$this->load->view ( 'reserva/panel/incluir/cabecera', $data );
			$this->load->view ( 'reserva/panel/incluir/menu' );
			$this->load->view ( 'reserva/panel/principal', $data );
		}
	}
	/**
	 * ------------------------------------------------------------
	 */
	function validarUsuario() {
		$this->load->model ( 'usuario/Iniciar', 'Iniciar' );
		echo $this->Iniciar->validarCuenta ( $_POST );
	}
	function registrarSitio() {
		$this->load->model ( 'reserva/Sitio', 'Sitio' );
		// echo "hola";
		// print_R($_POST);
		$this->Sitio->nombre = $_POST ['nom'];
		$this->Sitio->codigo = $_POST ['cod'];
		$this->Sitio->estado = $_POST ['est'];
		$resp = $this->Sitio->Salvar ();
		if ($resp)
			echo "Se registro con exito";
		else
			echo "Error al registrar";
	}
	function enviarRespuesta() {
		/*print ("<pre>") ;
		print_R ( $_POST );*/
        echo $this->enviaCorreo($_POST['correo'],$_POST['mensaje']);
	}

    function enviarPaquetes() {
        $this -> load -> model("reserva/Afiliado","Afiliado");
        $this -> load -> model("reserva/Paquete","Paquete");
        //print ("<pre>") ;
//        print_R ( $_POST );
        $lista = $this -> Afiliado->obtenerAfiliadoTipo($_POST['profesion']);
        $paquete = $this->Paquete ->obtenerPaqueteId($_POST['paquete']);
        //print_R ( $lista );
        //echo $this->enviaCorreo($_POST['correo'],$_POST['mensaje']);
        foreach($lista as $lst){
            $msj = 'Estimado Sr(a). '.$lst->nom .', reciba un cordial saludo de parte de la famila IFAMIL.<br>
            Nos dirigimos a usted en la oportunidad de informarle de la disponibilidad del siguiente paquete turistico:<br>
            <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                <tbody>
                <tr valign="middle">
                    <td width="300"><img src="http://www.ifamiltravel.com.ve/system/img/galeria/'.$paquete['imagen'].'" style="width:100%;display:block" border="0"></td>
                    <td>'.$paquete['titulo'].'<br>'.$paquete['resumen'].'</td>
                </tr>
                </tbody>
            </table>
            Para mas informacion haga click aqui:<br>http://www.ifamiltravel.com.ve/index.php/Principal/paratodos/'.$_POST['paquete'];
            $this->enviaCorreo($lst->cor,$msj);

        }

        echo "Se envio con exito";
    }
	function listarAfiliados() {
		$this->load->model ( 'reserva/Afiliado', 'Afiliado' );
		$cabecera = array (
				'Id',
				'Nombre',
				'correo',
				'telefono' 
		);
		$rs = $this->Afiliado->listar ();
		foreach ( $rs [0] ['rs'] as $fila ) {
			$cuep [] = array (
					$fila->oid,
					$fila->nom,
					$fila->cor,
					$fila->tel 
			);
		}
		$obj [] = array (
				"cabecera" => $cabecera,
				"cuerpo" => $cuep 
		);
		echo json_encode ( $obj );
	}
	function listarSitios() {
		$this->load->model ( 'reserva/Sitio', 'Sitio' );
		$cabecera = array (
				'Id',
				'Nombre',
				'codigo',
				'Estado' 
		);
		$rs = $this->Sitio->listar ();
		foreach ( $rs [0] ['rs'] as $fila ) {
			$cuep [] = array (
					$fila->oid,
					$fila->nom,
					$fila->cod,
					$fila->est 
			);
		}
		$obj [] = array (
				"cabecera" => $cabecera,
				"cuerpo" => $cuep 
		);
		echo json_encode ( $obj );
	}
	/**
	 * funcion para enviar correo
	 */
	function enviaCorreo($para=null,$msj=null) {
		$this->load->model ( 'utilidades/Correo', 'Correo' );
		$this->Correo->para = $para;
		$this->Correo->asunto = "Ventas IFAMIL";
		$this->Correo->contenido = $msj;
		if($this->Correo->enviar ())return "Se envio Correo con exito..";
        else return $this->Correo->Error;
	}

    function enviaCorreoPaquete($para=null,$msj=null) {
        $this->load->model ( 'utilidades/Correo', 'Correo' );
        $this->Correo->para = $para;
        $this->Correo->asunto = "Ventas IFAMIL";
        $this->Correo->contenido = $msj;
        if($this->Correo->enviar ())return "Se envio Correo con exito..";
        else return $this->Correo->Error;
    }
	
	/**
	 * Cerrar Sesion del sistema
	 */
	function cerrar() {
		session_destroy ();
		redirect ( base_url () . 'index.php/Reserva/Panel' );
	}
	
	/**
	 */
	function listarSolicitud() {
		$cuep = array ();
		$this->load->model ( 'reserva/Solicitud', 'Solicitud' );
		$cabecera = array (
				'ID',
				'Nombre Completo',
				'Telefono',
				'Correo',
				'Origen',
				'Destino',
				'Tipo Solicitud',
				'Estatus',
				'Observacion' 
		);
		$rs = $this->Solicitud->listarPendientes ();
		foreach ( $rs [0] ['rs'] as $fila ) {
			$cuep [] = array (
					$fila->identificador,
					$fila->nom,
					$fila->tel,
					$fila->correo,
					$fila->ori,
					$fila->des,
					$fila->categoria,
					$this->estatus ( $fila->est ),
					"" 
			);
		}
		$obj [] = array (
				"cabecera" => $cabecera,
				"cuerpo" => $cuep 
		);
		echo json_encode ( $obj );
	}
	private function estatus($estatus) {
		$valor = "";
		switch ($estatus) {
			case 0 :
				$valor = "Pendiente";
				break;
			case 1 :
				$valor = "Atendido";
				break;
			default :
				$valor = "Pendiente";
				break;
		}
		return $valor;
	}
	function listarDetalleSolicitud() {
		$json = json_decode ( $_POST ['datos'], true );
		$this->load->model ( 'reserva/Solicitud', 'Solicitud' );
		$this->load->model ( 'reserva/Sitio', 'Sitio' );
		$this->load->model ( 'reserva/Paquete', 'Paquete' );
		
		$this->Solicitud->obtenerID ( $json [0] );
		$this->Sitio->obtenerID ( $this->Solicitud->origen );
		$origen = $this->Sitio->nombre;
		$this->Sitio->obtenerID ( $this->Solicitud->destino );
		$destino = $this->Sitio->nombre;
		$fechaS = $this->Solicitud->fechaSalida;
		$fechaL = $this->Solicitud->fechaLlegada;
		$cantidaNino = $this->Solicitud->cantidadNino;
		$cantidaAdulto = $this->Solicitud->cantidadAdulto;
		$formaPago = $this->Solicitud->formaPago;
		
		echo "Fecha de Partida: $fechaS <br>
				  Fecha de Llegada: $fechaL<br>
				  Cantidad de Adultos: $cantidaAdulto<br>
				  Cantidad de Niños: $cantidaNino<br>
				  Origen: <i>$origen</i><br>
					Destino: <i>$destino</i><br>
					Forma de Pago: <i>" . $this->formaPago ( $formaPago ) . "</i>";
		
		// print_r($this->Sitio);
	}
	function formaPago($forma) {
		switch ($forma) {
			case 0 :
				return "Debito";
				break;
			case 1 :
				return "Efectivo";
				break;
			case 2 :
				return "Cheque";
				break;
			case 3 :
				return "Credito";
				break;
			case 4 :
				return "Transferencia";
				break;
			default :
				return "Err. De Modalidad";
				break;
		}
	}
	/**
	 */
	function listarPaquetes() {
		$this->load->model ( 'reserva/Paquete', 'Paquete' );
		print_r ( $this->Paquete->listarPaquetes () );
	}
	function __destruct() {
	}
}