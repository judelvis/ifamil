<?php
class Solicitud extends CI_Model {
	
	/**
	 * Solicitudes Generales del sistema en modulos varios
	 * Implementacion de Conceptos tales como: Viajes y Turismo,
	 * Transporte, Hospedaje y tours.
	 */
	private $tbl = 't_solicitud';
	public $identificar = "NULL";
	public $correo = '';
	public $origen = '';
	public $destino = '';
	public $fechaSalida;
	public $fechaLlegada;
	public $detalle = '';
	public $cantidaAdultos = 0;
	public $cantidaNinos = 0;
	
	/**
	 * Forma de pago del Cliente
	 * 0: Debito, 1: Efectivo, 2: Cheque, 3: Tarjeta de Credito
	 *
	 * @var integer
	 */
	public $formaPago;
	
	/**
	 *
	 * @var string
	 */
	public $tipo;
	public $hospedaje;
	public $transporte;
	public $paquete;
	
	/**
	 * Lugar que ubica el estatus en el sistema
	 *
	 * @var integer
	 */
	public $estatus;
	
	/**
	 * 
	 * @var Boolean
	 */
	private $activarCorreo = FALSE;
	
	/**
	 * 
	 * @var Correo
	 */
	private $correoElectronico;
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
				'cor' => $this->correo, //
				'ori' => $this->origen,
				'des' => $this->destino,
				'fes' => $this->fechaSalida,
				'fel' => $this->fechaLlegada,
				'det' => $this->detalle,
				'caa' => $this->cantidaAdultos,
				'can' => $this->cantidaNinos,
				'tip' => $this->tipo,
				'fpa' => $this->formaPago,
				'hos' => $this->hospedaje,
				'tra' => $this->transporte,
				'paq' => $this->paquete,
				'est' => $this->estatus 
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
		if ($this->correo != '') {
			$this->db->insert ( $this->tbl, $this->mapearObjeto () );
			if($this->correoActivo == TRUE)
			$bVal = true;
		}
		return $bVal;
	}
	
	
	function activarEnvioCorreo(){
		$this->load->model('utilidades/Correo', 'Correo');
		$this->correoElectronico = $this->Correo;
		$this->correoActivo = TRUE;
	}
	/**
	 * Obtener afiliado por identificador de elementos...
	 *
	 * @param number $identificador        	
	 * @return array
	 */
	function obtenerSolicitudID($identificador = 0) {
		$sCon = 'SELECT * FROM ' . $this->tbl . ' WHERE oid=' . $identificador . ' LIMIT 1';
		$rs = $this->db->query ( $consulta );
		if ($this->db->_error_number () == 0) {
			foreach ( $rs->result () as $clv => $val ) {
				$this->identificador = $val->oid;
				$this->correo = $val->cor; //
				$this->origen = $val->ori;
				$this->destino = $val->des;
				$this->fechaSalida = $val->fes;
				$this->fechaLlegada = $val->fel;
				$this->detalle = $val->det;
				$this->cantidaAdultos = $val->caa;
				$this->cantidaNinos = $val->can;
				$this->tipo = $val->tip;
				$this->formaPago = $val->fpa;
				$this->hospedaje = $val->hos;
				$this->transporte = $val->tra;
				$this->paquete = $val->paq;
				$this->estatus = $val->est;
			}
		}
		$arr [] = array (
				'err' => 0,
				'msj' => '' 
		);
		return $arr;
	}
	
	/**
	 *
	 * @param Categoria $categoria        	
	 * @param number $estatus        	
	 * @return multitype:number string unknown
	 */
	private function listar($categoria = 0, $estatus = 0, $fecha = NULL) {
		$rs = array ();
		if ($categoria == 0) {
			$lista = 'SELECT * FROM ' . $this->tbl . ' WHERE est=' . $categoria;
		} else {
			$lista = 'SELECT * FROM ' . $this->tbl . ' WHERE cat=' . $categoria . ' AND est=' . $estatus;
		}
		if (isset ( $fecha )) {
		}
		
		$resultado = $this->db->query ( $lista );
		$rs = $resultado->result ();
		
		$arr [] = array (
				'err' => 0,
				'msj' => '',
				'rs' => $rs 
		);
		return $arr;
	}
	
	/**
	 * 
	 */
	function listarTodo() {
		return $this->listar();
	}
	
	/**
	 * 
	 */
	function listarPendientes() {
		return $this->listar ( 0, 1 );
	}
	
	/**
	 * 
	 */
	function listarAtendidos(){
		return $this->listar ( 0, 2 );
	}
	
	/**
	 */
	function listarPorFecha($desde, $hasta) {
	}
}