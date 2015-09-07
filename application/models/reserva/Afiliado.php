<?php

/**
 * Control de Clientes afiliados
*
* @author Carlos Peña
*
*/
class Afiliado extends CI_Model {

	/**
	 * Afiliado: Es aquella persona u organización social, que decide 
	 * inscribirse en una obra social, en un partido político, en una 
	 * Administradora de Fondos de Jubilaciones y Pensiones, en una empresa 
	 * prestataria de salud y o en cualquier organización civil o empresarial, 
	 * que requiera la afiliación a la institución, para ejercer derechos y obtener beneficios sobre la misma.
	 * 
	 */
	private $tbl = 't_afiliados';
	public $identificador = NULL;
	public $cedula;
	public $nombre;
	public $fechaNacimiento;
	public $telefono;
	public $correo;
	public $faceBook;
	public $profesion;

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
	 * Creando un objeto de tipo t_afiliados DB
	 *
	 * @return array
	 */
	private function mapearObjeto() {
		$data = array ( //
				'oid' => $this->identificador, //
				'ced' => $this->cedula, //
				'nom' => $this->nombre, //
				'fna' => $this->fechaNacimiento, //
				'tel' => $this->telefono, //
				'cor' => $this->correo, //
				'fac' => $this->faceBook, //
				'pro' => $this->profesion //
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
	 * Obtener afiliado por identificador de elementos...
	 *
	 * @param number $identificador
	 * @return array
	 */
	function obtenerAfiliadoID($identificador = 0) {
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
	 * Obtener afiliado por correo de elementos...
	 *
	 * @param number $correo
	 * @return array
	 */
	function obtenerAfiliadoCorreo($correo = 0) {
		$sCon = 'SELECT * FROM ' . $this->tbl . ' WHERE cor=' . $correo . ' LIMIT 1';
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
	 * Obtener afiliado por nombre de elementos...
	 *
	 * @param string $nombre
	 * @return multitype:number string
	 */
	function obtenerAfiliadoNombre($nombre = '') {
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