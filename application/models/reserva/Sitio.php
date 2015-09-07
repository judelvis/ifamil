<?php

/**
 * Control de sitios de Origen y Destinos
 * 
 * @author Carlos Peña
 *
 */
class Sitio extends CI_Model {
	
	/**
	 * Sitio: El lugar que ocupa una cosa.
	 * Definicion de elementos del Origen y Destino del sistema
	 */
	private $tbl = 't_sitios';
	private $identificador = NULL;
	private $nombre;
	private $codigo;
	private $estado;
	
	
	/**
	 * Carga inicial del modelo por reflexion
	 */
	function __construct() {
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
	
	/**
	 * Proceso de Insercion de un elemento general
	 * calse por mapeo inicial recibiendo un arreglo DataBase
	 *
	 * @return boolean
	 */
	function salvar() {
		$bVal = false;
		if ($this->nombre != '') {
			$this->db->insert ($this->tbl, $this->mapearObjeto () );
			$bVal = true;
		}
		return $bVal;
	}
	
	/**
	 * Obtener sitio por identificador de elementos...
	 *
	 * @param number $identificador        	
	 * @return array
	 */
	function obtenerSitioID($identificador = 0) {
		$sCon = 'SELECT * FROM ' . $this->tbl . ' WHERE oid=' . $identificador . ' LIMIT 1';
		$rs = $this->db->query ( $consulta );
		if ($this->db->_error_number () == 0) {
			foreach ( $rs->result () as $clv => $val ) {
				$this->identificador = $val->oid;
				$this->nombre = $val->nom;
				$this->descripcion = $val->des;
			}
		}
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', // $this->db->_error_message ()
		);
		return $arr;
	}
	
	/**
	 * Obtener sitio por nombre de elementos...
	 *
	 * @param string $nombre        	
	 * @return multitype:number string
	 */
	function obtenerSitioNombre($nombre = '') {	
		$sCon = 'SELECT * FROM  ' . $this->tbl . ' WHERE nom=\'' . $nombre . '\' LIMIT 1;';
		$rs = $this->db->query ( $consulta );
		if ($this->db->_error_number () == 0) {
			foreach ( $rs->result () as $clv => $val ) {
				$this->identificador = $val->oid;
				$this->nombre = $val->nom;
				$this->descripcion = $val->des;
			}
		}
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', // $this->db->_error_message ()
		);
		return $arr;
	}
	
	/**
	 * Listar todos los items de la tabla
	 *
	 * @return array
	 */
	function listar($contenido = "") {
		$donde = '';
		$rs = array ();
		
		$lista = 'SELECT * FROM ' . $this->tbl . ' 
				WHERE cod LIKE \'%' . $contenido . '%\' AND nom LIKE \'%' . $contenido . '%\' AND est 
						LIKE \'%' . $contenido . '%\'';
		$resultado = $this->db->query ( $lista );		
		$rs = $resultado->result ();
		
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', //$this->db->_error_message (),
				'rs' => $rs 
		);
		return $arr;
	}
	
	
	function actualizar() {
		$data = $this->mapearObjeto ();
		$this->db->where ( 'oid', $data ['oid'] );
	
		$this->db->update ( $this->tbl, $data );
		$arr [] = array (
				'err' => 0, // $this->db->_error_number (),
				'msj' => '', //$this->db->_error_message ()
		);
		return $arr;
	}
	
	/**
	 * Eliminar un registro de la base de datos
	 * 
	 * @return boolean
	 */
	function eliminar(){
		$sCon = 'DELETE FROM ' . $this->tbl . ' WHERE oid=' . $this->identificador . ' LIMIT 1';
		$this -> db -> query($sCon);
		return true;
	}
	
	/**
	 * Cierra la clase...
	 */
	function __destruct() {
		$this->db->close ();
		unset ( $this->db );
	}
}