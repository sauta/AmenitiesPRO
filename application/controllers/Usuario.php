<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('musuario');
		$this->load->library('session');
	}

	public function Agregar()
	{
		
	}
	
	public function Eliminar($value='')
	{
		# code...
	}

	public function Buscar($value='')
	{
		# code...
	}

	public function updatePerfil()
	{
		$parametro['idUsuario']     = $this->session->userdata('s_idUsuario');

		$parametro['NombreUsuario'] = $this->input->post('nombre');
		$parametro['Clave']     	= md5($this->input->post('clave'));
		$parametro['repClave']     	= md5($this->input->post('repClave'));
		// $parametro['foto'] 	    = $this->input->post('#InputFile');

		
		if(!$parametro['Clave'] == '' || !$parametro['repClave'] == '' || !$parametro['NombreUsuario'] == '')
		{

			if($parametro['Clave'] == $parametro['repClave']){


						if($this->musuario->editarCliente($parametro))
						{
							if($this->session->userdata('s_permiso')=='Cliente')
							{
								echo '<script type="text/javascript">alert("El nombre no se encuentra disponible");</script>';
								
								redirect('/Cliente/perfil', 'refresh');

							}else{		
								echo '<script type="text/javascript">alert("El nombre no se encuentra disponible");</script>';
								redirect('/Administrador/perfil', 'refresh');
							}
						}

			}else{
				
				
				if($this->session->userdata('s_permiso')=='Cliente'){
				echo '<script type="text/javascript">alert("Las claves no coinsiden");</script>';
				
				redirect('/Cliente/perfil', 'refresh');

				}else{
					echo '<script type="text/javascript">alert("Las claves no coinsiden");</script>';
					redirect('/Administrador/perfil', 'refresh');
				}

			}
		}else{

		
				if($this->session->userdata('s_permiso')=='Cliente'){

					echo '<script type="text/javascript">alert("Rellene los campos");</script>';
					redirect('/Cliente/perfil', 'refresh');

				}else{
					echo '<script type="text/javascript">alert("Rellene los campos");</script>';
					redirect('/Administrador/perfil', 'refresh');
				}
		}
		
	}
	

 }
?>