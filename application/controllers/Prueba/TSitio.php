<?php
require_once (APPPATH . '/controllers/Prueba/Toast.php');
class TSitio extends Toast {
	function __construct() {
		parent::__construct ( __FILE__ );
		$this->load->model ( 'reserva/Sitio', 'Sitio' );
	}
	
	/**
	 * OPTIONAL; Anything in this function will be run before each test
	 * Good for doing cleanup: resetting sessions, renewing objects, etc.
	 */
	function _pre() {
	}
	
	/**
	 * OPTIONAL; Anything in this function will be run after each test
	 * I use it for setting $this->message = $this->My_model->getError();
	 */
	function _post() {
	}
	
	function test_mapearObjeto() {
	//	$this -> _assert_equals_array($this -> Sitio -> mapearObjeto());
	}
	
	/* TESTS BELOW */
	function test_Mapear() {
		$TSitio = new Sitio ();
		$data = "Hola";
		
		$this->_assert_true ( $TSitio->obtenerSitioNombre ( $data ) );
	}

/**
 * function test_Listar(){
 * $this->_assert_equals($this->db->_error_number(), 0);
 * $this->message = $this->db->_error_message();
 *
 * $obj = $this->Plantel->GUI();
 * $this->_assert_equals_object($obj);
 * }
 */
}

// End of file example_test.php */
// Location: ./system/application/controllers/test/example_test.php */