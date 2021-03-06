<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
date_default_timezone_set("America/Caracas");
/**
 *
 * @author Carlos Pena
 * @copyright MamonSoft C.A
 * @package ifamil.controller.Reservas
 */

session_start();
class Principal extends CI_Controller {
	
	/**
	 * Reservación es la acción mediante la cuál una persona en su nombre, cliente o 
	 * en nombre de otra, solicita el alquiler de una o más habitaciones, de características 
	 * determinadas durante unas fechas concretas, contándose las mismas por módulos de 24 horas,
	 * bajo un precio determinado de antemano.
	 */
	
	public function __construct() {
		parent::__construct();
		
	}
	
	/**
	 * Control de inicio de session
	 */
	function index() {
		echo "Hola Mundo";
	}

	function registrarAfiliado(){
		if(isset($_POST["cedula"])) {
			$e='Su proceso ha sido exitoso';
			if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i'){
				$e='His trial has been successful';
			}
			$this->load->model("reserva/Afiliado", "Afiliado");
			$this->Afiliado->cedula = $_POST["cedula"];
			$this->Afiliado->nombre = $_POST["nombre"];
			$this->Afiliado->telefono = $_POST["codTel"] . '-' . $_POST["telefono"];
			$this->Afiliado->correo = $_POST["correo"];
			$this->Afiliado->fechaNacimiento = $_POST["fechaNacimiento"];
			$this->Afiliado->faceBook = $_POST["faceBook"];
			$this->Afiliado->profesion = $_POST["profesion"];
			$this->Afiliado->salvar();
			echo $e;
		}
		else{
			echo "Esta intentando acceder a una area restringida.";
		}
	}
	
	function registrarSolicitud(){
		$e='Su proceso ha sido exitoso';
		if (isset($_SESSION['idioma']) && $_SESSION['idioma'] == '_i'){
			$e='His trial has been successful';
		}
		$this->load->model("reserva/Solicitud", "Solicitud");
		if(isset($_POST["correo"])) {
			$this->Solicitud->correo = $_POST["correo"];
			$this->Solicitud->nombre = $_POST["nombre"];
			$this->Solicitud->origen = $_POST["origen"];
			$this->Solicitud->destino = $_POST["destino"];
			$this->Solicitud->fechaSalida = $_POST["fechaSalida"];
			$this->Solicitud->fechaLlegada= $_POST["fechaLlegada"];
			$this->Solicitud->detalle = $_POST["detalle"];
			$this->Solicitud->cantidadAdulto = $_POST["cantidadAdulto"];
			$this->Solicitud->cantidadNino = $_POST["cantidadNino"];
			$this->Solicitud->tipo = $_POST["categoria"];
			$this->Solicitud->formaPago = $_POST["formadePago"];
			$this->Solicitud->hospedaje = $_POST["hospedaje"];
			$this->Solicitud->transporte = $_POST["transporte"];
			$this->Solicitud->paquete = $_POST["paquete"];
			$this->Solicitud->salvar();
			echo $this->enviaCorreo($_POST["correo"],"Su solicitud fue recibida con exito.");
			echo '<br>'.$e;
		}
		else{
			echo "Esta intentando acceder a una area privada.";
		}
	}

	/**
	 * funcion para enviar correo
	 */
	function enviaCorreo($para=null,$msj=null) {
		$this->load->model ( 'utilidades/Correo', 'Correo' );
		$this->Correo->para = $para;
		$this->Correo->asunto = "Solicitud IFAMIL";
		$this->Correo->contenido = $msj;
		if($this->Correo->enviar ())return $msj;
		else return $this->Correo->Error;
	}
	
	function logout() {
		session_destroy();
		return true;
	}
	
	function info(){
		phpinfo();
	}
	/**
	 * Salida del sistema
	 */
	function __destruct() {
		
	}
}