<?php

/**
 * Control de sitios de Origen y Destinos
 * 
 * @author Carlos Peña
 *
 */
class Correo extends CI_Model {
	
	/**
	 * Correo electrónico (en inglés: e-mail), es un servicio de red que permite a los 
	 * usuarios enviar y recibir mensajes (también denominados mensajes electrónicos o cartas digitales) 
	 * mediante sistemas de comunicación electrónica. Principalmente se usa este nombre para denominar al 
	 * sistema que provee este servicio en Internet, mediante el protocolo SMTP, aunque por extensión también 
	 * puede verse aplicado a sistemas análogos que usen otras tecnologías.
	 */
	public $de;
	public $para;
	public $asunto;
	public $contenido;
	public $archivo;
	public $Error = "";
	
	/**
	 * Carga inicial del modelo por reflexion
	 */
	function __construct() {
		parent::__construct ();
		
	}
	
	/**
	 * Enviar correo electronico
	 */
	function enviar(){
		
		require_once('application/libraries/PHPMail/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		 
		$mail->SMTPDebug  = 1;
		$mail->Host          = "smtp.gmail.com";
		$mail->SMTPSecure = "tls";
		$mail->SMTPAuth      = true;                  // enable SMTP authentication
		$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
		 
		$mail->Port          = 587;
		$mail->Username      = "ifamilviajesyturismo@gmail.com"; // SMTP account username
		$mail->Password      = "ifamilviajes";        // SMTP account password
		$mail->SetFrom('ifamilviajesyturismo@gmail.com', 'Departamento de Ventas');
		$mail->AddReplyTo('ifamilviajesyturismo@gmail.com', 'Despartamento de Ventas');
		$mail->Subject = $this->asunto;
			 
		
		 
		 
		 
		$mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
		$mail->MsgHTML($this->contenido);
		$mail->AddAddress($this->para, "Ifamil Viajes y Turismo");
		if(!$mail->Send()) {
			$err =  "Error al enviar: " . $mail->ErrorInfo;
			$this->obtenerError($err);
			
		} else {
			$err =  "Mensaje enviado a:  " .  $address . "!";
			$this->obtenerError($err);
		}
		return true;
	}
	
	/**
	 * Manejo del control de error
	 */
	function activarError(){
		error_reporting(E_STRICT);
	}
	
	function obtenerError($err){
		
	}
	
}