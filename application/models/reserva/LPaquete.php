<?php

/**
 * Control de sitios de Origen y Destinos
*
* @author Carlos Peña
*
*/
class LPaquete extends CI_Model {
	
	/**
	 * Planes establecido por empresas proveedores
	 * 
	 */
	
	public $tbl = "t_paquete";
	
	public $identificador = "NULL";
	public $categoria;
	public $descripcion;
	
	
	function __construct() {
		parent::__contruct ();
	}
	
	
	/**
	 * Creando un objeto de tipo t_afiliados DB
	 *
	 * @return array
	 */
	private function mapearObjeto() {
		$data = array ( //
				'oid' => $this->identificador, //
				'categoria' => $this->categoria, //
				'descrip' => $this->descripcion
		);
		return $data;
	}
	
	
	/**
	 * Listar todos los items de la tabla
	 *
	 * @return array
	 */
	function listar() {
		$donde = '';
		$rs = array ();
	
		$lista = 'SELECT * FROM ' . $this->tbl;
		$resultado = $this->db->query ( $lista );
		$rs = $resultado->result ();
	
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', //$this->db->_error_message (),
				'rs' => $rs
		);
		return $arr;
	}
	
	
	function __destruct() {
	}
	
	
	
	
}