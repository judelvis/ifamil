<?php

class Solicitud extends CI_Model{

	/** 
	 * Solicitudes Generales del sistema en modulos varios
	 * Implementacion de Conceptos tales como: Viajes y Turismo,
	 * Transporte, Hospedaje y tours. 
	 */
	
	private $correo = '';
	private $origen = '';
	private $destino = '';
	private $fecha;
	private $cantida;
	private $categoria;
	private $paquete;
	
	public function __construct(){
		parent::__construct();
	}
	
	
}