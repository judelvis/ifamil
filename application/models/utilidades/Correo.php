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
        //$mail->Debugoutput = 'html';
        $mail->Host          = "smtp.gmail.com";
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth      = true;                  // enable SMTP authentication
        $mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent

        $mail->Port          = 587;
        $mail->Username      = "ifamilviajesyturismo@gmail.com"; // SMTP account username
        $mail->Password      = "ifamil1515";        // SMTP account password
        $mail->SetFrom('ifamilviajesyturismo@gmail.com', 'Departamento de Ventas');
        $mail->AddReplyTo('ifamilviajesyturismo@gmail.com', 'Despartamento de Ventas');
        $mail->Subject = $this->asunto;


        $mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
        $contenido = $this->formatoPaquetes($this->para,$this->contenido);
        $mail->MsgHTML($contenido);
        $mail->AddAddress($this->para, "Ifamil Viajes y Turismo");
        if(!$mail->Send()) {
            $this -> Error =  "Error al enviar: " . $mail->ErrorInfo;
            return false;

        } else {
            return true;
        }
    }

    function formatoPaquetes($name,$message){

        $txtHTML ='<table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" bgcolor="#f4f4f4" style="background-color:#f4f4f4">
    <tbody>
    <tr>
        <td valign="top">
            <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                <tbody>
                <tr valign="middle">
                    <td width="400"><img src="http://www.ifamiltravel.com.ve/system/img/images/ifamil2.jpg" style="width:100%;display:block" border="0"></td>
                </tr>
                </tbody>
            </table>
            <br><br>
            <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                <tbody>
                <tr valign="top">
                </tr>
                </tbody>
            </table>
            <table cellpadding="0" cellspacing="0" align="center" width="640" border="0px" bgcolor="#ffffff">
                <tbody>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                            <tbody>
                            <tr>
                                <td width="600">
                                    <table cellpadding="0" cellspacing="0" align="center" width="600" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;color:#555555;text-align:left"><b>Mensajes IFAMIL@</b></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                            <tbody>
                            <tr>
                                <td width="600">
                                    <table cellpadding="0" cellspacing="0" align="center" width="600" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;color:#555555;text-align:left">
                                               '.$message.'
                                                <br>
                                                <br><i>Hazlo diferente hazlo con nosotros.</i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                            <tbody>
                            <tr>
                                <td width="600">
                                    <table cellpadding="0" cellspacing="0" align="center" width="600" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;color:#555555;text-align:left"><b>Atentamente DEPARTAMENTO DE VENTAS</b></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <br><br>
            <table cellpadding="0" cellspacing="0" align="center" width="640" border="0" style="background-color:#f4f4f4">
                <tbody>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" align="center" width="640" border="0">
                            <tbody>
                            <tr>
                                <td width="600">
                                    <table cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;line-height:16px;color:#939598;text-align:left;font-weight:normal;font-style:italic">
                                                <br/> Dirección:<br>

IFAMIL - Caracas - Sede Principal:<br>

Av. Los Proceres C.C Los Proceres Nivel 3

área socialista Urb. Santa Monica Caracas

Distrito Capital Zona postal 1040.<br>

Télefono:(0212) 661 56 16<br>

Fax: (0212) 662 41 06
<br><br>
Sucursal IFAMIL - Maracay:<br>

Av. Bolívar, Edif. Almacenes Militares I.P.S.F.A.,

Los Jardines de Maracay. Maracay,

estado Aragua-Venezuela.
<br><br>
Sucursal IFAMIL - Barquisimeto:<br>

Av. Venezuela entre Av. Los Leones y Av.Armiguero

Bracamontes, piso 2 C.C IPSFA Barquisimeto.

Municipio: Iribarren Parroquia: Santa Rosa
<br><br>
Email: ifamilviajesyturismo@gmail.com<br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size:1px;line-height:0px" height="15"><img src="https://jointgroup.es/app/assets/img/spacer.gif" width="1" height="1" alt="" title="" style="display:block" border="0"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="20"><img src="https://jointgroup.es/app/assets/img/spacer.gif" width="1" height="1" alt="" title="" style="display:block" border="0"></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>';

        return $txtHTML;
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