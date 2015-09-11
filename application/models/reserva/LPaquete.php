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
	
	public $tbl = "t_portafolio";
	
	public $identificador = "NULL";
	public $idCategoria;
	public $titulo;
	public $descripcion;
	public $resumen;
	public $fecha;
	public $modificado;
	public $estatus;
	
	function __construct() {
		parent::__contruct ();
		if (! isset ( $this->db )) {
			$this->load->database ();
		}
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
	private function listar($categoria, $titulo, $resumen, $fecha) {
		$donde = '';
		$rs = array ();
	
		$lista = 'SELECT * FROM ' . $this->tbl . 'WHERE oidcat=' . $categoria;
		$resultado = $this->db->query ( $lista );
		$rs = $resultado->result ();
	
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', //$this->db->_error_message (),
				'rs' => $rs
		);
		return $arr;
	}
	
	/**
	 * 
	 * @return Ambigous <multitype:, multitype:number string unknown >
	 */
	function listarPaquetes(){
		return $this->listar(4);
	}
	
	
	function __destruct() {
		
	}
	
	
	
	
}