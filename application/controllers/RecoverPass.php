<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecoverPass extends CI_Controller 
{
	

	function __construct()
	{
		parent::__construct();

		$this->load->model('mcontacto');
		$this->load->library('session');
	}

	public function index()
	{
			$data['titulo'] = 'Amenities PRO';
			$titulo['mensaje'] = 'algo';

		$this->load->view('session/Recover',$data);
	}

	// public function recuperar()
	// {
	// 	$recover['email'] = $this->input->post('email');

	// 	if($this->mcontacto->recuperar($recover))
	// 		{					
	// 			echo '<script>alert("Correo Enviado");</script>"';
	// 			redirect('Recover','refresh');
	// 		}else{
	// 			echo '<script>alert("Email no valido");</script>"';
	// 			redirect('Recover','refresh');
	// 		}
	// }

	
 
function enviarEmail( $email, $link ){
   $mensaje = '<html>
     <head>
        <title>Restablece tu contraseña</title>
     </head>
     <body>
       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="'.$link.'"> Restablecer contraseña </a>
       </p>
     </body>
    </html>';
 
   $cabeceras = 'MIME-Version: 1.0' . "\r\n";
   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
   // Se envia el correo al usuario
   mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
}

}

?>