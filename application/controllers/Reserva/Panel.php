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

    function registrarSitio(){
        $this->load->model ( 'reserva/Sitio', 'Sitio' );
        //echo "hola";
        //print_R($_POST);
        $this ->Sitio -> nombre = $_POST['nom'];
        $this ->Sitio -> codigo = $_POST['cod'];
        $this ->Sitio -> estado = $_POST['est'];
        $resp = $this -> Sitio -> Salvar();
        if($resp) echo "Se registro con exito";
        else echo "Error al registrar";
    }

    function enviarRespuesta(){
        print("<pre>");
        print_R($_POST);
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
	function enviaCorreo() {
		$this->load->model ( 'utilidades/Correo', 'Correo' );
		$this->Correo->para = "gesaodin@gmail.com";
		$this->Correo->asunto = "Prueba de IFAMIL";
		$this->Correo->contenido = "Que locura";
		$this->Correo->enviar ();
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
					$this->estatus($fila->est),
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
	
	function listarDetalleSolicitud(){
		//print_r($_POST);
		echo 'Hola Mundo';
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