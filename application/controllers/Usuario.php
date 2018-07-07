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

	public function Modificar()
	{
		# code...
	}
	

 }
?>