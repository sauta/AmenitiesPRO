<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Encargado extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mempresa');
		$this->load->library('session');
		$this->load->model('mencargado');
	}

	public function getEncargado()
	{
		echo json_encode($this->mencargado->getEncargados());
	}

	public function deleteEncargado()
	{
		$c = $this->input->post('cboEncargados');
		echo json_encode($this->mencargado->deleteEncargadosId($c));
	}

	public function setEncargado()
	{
		$encargado['Nombre'] = $this->input->post('nombre');
		$encargado['Rut']    = $this->input->post('rut');

		$encargado = $this->mencargado->guardar($encargado);
	}

 }
?>