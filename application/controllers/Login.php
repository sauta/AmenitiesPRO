<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('musuario');
		$this->load->library('session');
	}

	public function index()
	{
		 if(isset($_SESSION['s_idUsuario']))
		 {
		     if($this->session->userdata('s_permiso')=='Cliente')
		     {
		     	redirect('Cliente/cpanel');
		     }
		 else if($this->session->userdata('s_permiso')=='Administrador')
		 {
			 	redirect('Administrador/cpanel');
		 }
		}else{
		// $titulo = array('titulo' => 'Amenities PRO');
		// $this->load->view('MasterPage/head');
		$data = array('titulo' => 'Amenities PRO',
					  'mensaje' => 'Bienvenido a Amenities PRO');
		$this->load->view('session/login',$data);
		}
		 
	}

	public function logearse()
	{
		$login['clave'] = $this->input->post('clave');
		$login['nombre'] = $this->input->post('nombre');

		//se ve que la clave se haya ingresado correctamente
		 if($login['nombre'] != 0 || $login['nombre'] != "" || $login['nombre'] != null) 
		 { //se ve que el nombre se haya ingresado correctamente
		 	if($login['clave'] != 0 || $login['clave'] != "" || $login['clave'] != null)	
		 	{	//se confirma que la clave  y el nombre

		 	 	$login['clave'] = md5($login['clave']); //esto está para qu compare realmente si no se ingresó la clave ya que si no s epone nada igualmente  ensripa el campo vacio

			 	if($this->musuario->login($login))
					{					
						// Se crea la session del usuario
						// if($this->session->userdata('s_permiso')=='Cliente')
							redirect('Cliente/cpanel');
						// else if($this->session->userdata('s_permiso')=='Adminitrador')
						// 	redirect('cadministrador/cpanel');

					}else{
						echo '<script>alert("nombre o clave incorrectos");</script>"';
						redirect('Login','refresh');
					}
			}else{
					echo '<script>alert("no ingresó la clave");</script>"';
					redirect('Login','refresh');
			}
	   	 }else{
	   	 	echo '<script>alert("no ingresó el nombre");</script>"';
			redirect('Login','refresh');
		}
	}

	public function destruirSession()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>