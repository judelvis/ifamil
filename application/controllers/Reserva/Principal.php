<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

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
	

	
	function logout() {
		session_destroy();
		return true;
	}
	
	/**
	 * Salida del sistema
	 */
	function __destruct() {
		
	}
}