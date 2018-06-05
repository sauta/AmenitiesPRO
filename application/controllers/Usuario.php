<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('musuarios');
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

	public function Modificar($value='')
	{
		# code...
	}
	

 }
?>