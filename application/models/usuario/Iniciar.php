<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
/**
 *
 * @subpackage Ifamil
 * @author Judelvis Rivas
 * @since Version 1.0
 *
 */

//session_start();

class Iniciar extends CI_Model {

  var $token = null;

  function __construct() {
    $this -> load -> model('usuario/Usuario', 'Usuario');
  }

  function validarCuenta($arg = null) {
  	
    $this -> Usuario -> sobreNombre = $arg['txtUsuario'];
    $this -> Usuario -> clave = $arg['txtClave'];
    if ($this -> Usuario -> validar() == TRUE) {  
      $this -> _entrar($this -> Usuario);
        return 1;
    } else {
        session_destroy();
        return 0;
      //$this -> _salir();
    }
  }

  private function _entrar($usuario) {
    $_SESSION['usuario_ifamil'] = $usuario -> sobreNombre;
    $_SESSION['oid_ifamil'] = $usuario -> identificador;
    $_SESSION['nombre_ifamil'] = $usuario -> nombre;
    //print_R($_SESSION);
    //redirect(base_url() . 'index.php/panel/Panel');
    
  }

  private function _salir() {
    session_destroy();
    redirect(base_url());
  }

  function __destruct() {
    unset($this -> Usuario);
  }

}
