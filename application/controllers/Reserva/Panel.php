<?php

/**
 * Administracion de Solicitudes
 *
 * @package application.controller.Reserva.Panel
 * @author mamonsoft.ca-crash (Carlos Peña)
 * @date 2015-09-04
 */
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
	function principal() {
		if (! isset ( $_SESSION ['usuario_ifamil'] )) {
			session_destroy ();
			redirect ( base_url () . 'index.php/Reserva/Panel' );
		} else {
			$this->load->model ( 'panel/Mpanel', 'MPanel' );
			$data ['js'] = 'servicio';
			$data ['titulo'] = 'Reservaciones';
			$data ['formulario'] = 'reservaciones';
			$this->load->view ( 'reserva/panel/incluir/cabecera', $data );
			$this->load->view ( 'reserva/panel/incluir/menu' );
			$this->load->view ( 'reserva/panel/principal', $data );
		}
	}
	function validarUsuario() {
		$this->load->model ( 'usuario/Iniciar', 'Iniciar' );
		echo $this->Iniciar->validarCuenta ( $_POST );
	}
	
	
	
	function listarVuelos(){
		$this->load->model('reserva/Sitio', 'Sitio');
		$cabecera = array ('Id','Nombre','codigo','Estado');
		$rs = $this->Sitio->listar();		
		foreach ( $rs[0]['rs'] as $fila ) {
			$cuep[] = array ($fila->oid,$fila->nom,$fila->cod,$fila->est);
		}
		$obj[] = array ("cabecera" => $cabecera,"cuerpo" => $cuep);
		echo json_encode($obj);
	}
	/**
	 * funcion para enviar correo
	 */
	function Envia_Correo() {
	}
	
	/**
	 * Cerrar Sesion del sistema
	 */
	function cerrar() {
		session_destroy ();
		redirect ( base_url () . 'index.php/Reserva/Panel' );
	}
	function __destruct() {
	}
}