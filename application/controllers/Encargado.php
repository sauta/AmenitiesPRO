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
		echo json_encode($this->mencargado->listar());
	}

	public function deleteEncargado()
	{
		$c = $this->input->post('cboEncargados');
		if($this->mencargado->deleteEncargadosId($c))
		{
			redirect('Cliente/encargadado');
		}
	}

	public function setEncargado()
	{
		$encargado['Nombre']  = $this->input->post('nombre');
		$encargado['Rut']     = $this->input->post('rut');
		$encargado['idCargo'] = 1;
		

		$encargado = $this->mencargado->guardar($encargado);
	}

 }
?>