<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecoverPass extends CI_Controller 
{
	

	function __construct()
	{
		parent::__construct();

		$this->load->model('mcontacto');
		$this->load->library('session');
		$this->load->helper('url');

	}

	public function index()
	{
			$data['titulo'] = 'Amenities PRO';
			$titulo['mensaje'] = 'algo';

		$this->load->view('session/Recover',$data);
	}
    
   public function enviar(){
      /*
       * Cuando cargamos una librería
       * es similar a hacer en PHP puro esto:
       * require_once("libreria.php");
       * $lib=new Libreria();
       */
        
       //Cargamos la librería email
       $this->load->library('email');
        
       /*
        * Configuramos los parámetros para enviar el email,
        * las siguientes configuraciones es recomendable
        * hacerlas en el fichero email.php dentro del directorio config,
        * en este caso para hacer un ejemplo rápido lo hacemos 
        * en el propio controlador
        */
        
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.gmail.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'correo@gmail.com';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'contraseña';    
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido  
       $config['validate'] = true;
       
        
      //Establecemos esta configuración
        $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('correo@gmail.com', 'Victor Robles');
         
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('correo@gmail.com', 'Víctor Robles');
         
      //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("asunto"));
         
      //Definimos el mensaje a enviar
        $this->email->message(
                "Email: ".$this->input->post("email").
                " Mensaje: ".$this->input->post("mensaje")
                );
         
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
            $this->session->set_flashdata('envio', 'No se a enviado el email');
        }
         
        redirect(base_url("contacto"));
   }  


	public function recuperar()
	{       
        // $correo = $this->input->post('email');

        // // $this->mcontacto->new_user($correo);

        // $this->email->from('aqui el email que quieres que envíe los datos', 'uno-de-piera.com');
        // $this->email->to($correo);
        // $this->email->subject('Bienvenido/a a uno-de-piera.com');
        // $this->email->message('<h2>' . $correo . ' gracias por registrarte en uno-de-piera.com</h2>');
        // $this->email->send();
    	// }
	}

	
 
// function enviarEmail( $email, $link ){
//    $mensaje = '<html>
//      <head>
//         <title>Restablece tu contraseña</title>
//      </head>
//      <body>
//        <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
//        <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
//        <p>
//          <strong>Enlace para restablecer tu contraseña</strong><br>
//          <a href="'.$link.'"> Restablecer contraseña </a>
//        </p>
//      </body>
//     </html>';
 
//    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
//    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//    $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
//    // Se envia el correo al usuario
//    mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
// }

}

?>