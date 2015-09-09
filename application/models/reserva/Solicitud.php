<?php
class Solicitud extends CI_Model {
	
	/**
	 * Solicitudes Generales del sistema en modulos varios
	 * Implementacion de Conceptos tales como: Viajes y Turismo,
	 * Transporte, Hospedaje y tours.
	 */
	public $correo = '';
	public $origen = '';
	public $destino = '';
	public $fechaSalida;
	public $cantidaAdultos;
	public $cantidaNinos;
	public $formaPago;
	public $categoria;
	public $paquete;
	
	/**
	 * Contructor de la clase
	 * Verificar si la base de datos esta cargada
	 */
	public function __construct() {
	parent::__construct ();
		if (! isset ( $this->db )) {
			$this->load->database ();
		}
	}
	
	/**
	 * Creando un objeto de tipo t_sitio DB
	 *
	 * @return array
	 */
	private function mapearObjeto() {
		$data = array ( //
				'oid' => $this->identificador, //
				'nom' => $this->nombre, //
				'cod' => $this->codigo,
				'est' => $this->estado
		);
		return $data;
	}
	
}