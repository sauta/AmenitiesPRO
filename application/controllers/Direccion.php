<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdireccion');
		$this->load->library('session');
	}
	public function getComuna()
	{
		$c = $this->input->post('PK_idProvincia');
		$parametro = $this->mdireccion->listarComuna($c);
		echo json_encode($parametro);
	}
	public function getProvincia()
	{
		$c = $this->input->post('PK_idRegion');
		$parametro = $this->mdireccion->listarProvincia($c);
		echo json_encode($parametro);
	}
	public function getRegion()
	{
		$parametro = $this->mdireccion->listarRegion();
		echo json_encode($parametro);
	}
	public function ValidarDatos($usuario)
	{
		
	}
 }
?>