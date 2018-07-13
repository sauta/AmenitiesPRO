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

	public function recuperar()
	{
		$recover['email'] = $this->input->post('email');

		if($this->mcontacto->recuperar($recover))
			{					
				echo '<script>alert("Correo Enviado");</script>"';
				redirect('Recover','refresh');
			}else{
				echo '<script>alert("Email no valido");</script>"';
				redirect('Recover','refresh');
			}
	}

}

?>