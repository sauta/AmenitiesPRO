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
	
	public function Eliminar()
	{
		# code...
	}

	public function getUsuario()
	{
		# code...
	}


	public function getCliente()
	{
		$parametro = $this->musuario->getCliente();
		echo json_encode($parametro);
	}

	public function Modificar(){

	}

	public function updatePerfil()

	{
		$parametro['idUsuario']     = $this->session->userdata('s_idUsuario');
		$parametro['repNombre']     = $this->session->userdata('s_nombreUsuario');
		$parametro['NombreUsuario'] = $this->input->post('nombre');
		$parametro['Clave']     	= md5($this->input->post('clave'));
		$parametro['repClave']     	= md5($this->input->post('repClave'));

		$_parametro = "hey";

		// $parametro['foto'] 	    = $this->input->post('#InputFile');
		
		
		if(!$parametro['Clave'] == '' || !$parametro['repClave'] == '' || !$parametro['NombreUsuario'] == '')
		{
			echo '<script type="text/javascript">alert("hey listen");</script>';
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
						}else{

							if($this->session->userdata('s_permiso')=='Cliente')
							{
								echo '<script type="text/javascript">alert("Cliente Edicion Correcta");</script>';
								
								redirect('/Cliente/perfil', 'refresh');

							}else{		
								echo '<script type="text/javascript">alert("Adminitrador Edicion Correcta");</script>';
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