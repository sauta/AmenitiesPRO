<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpedidos');
		$this->load->library('session');
	}


	public function guardarPedidos()
	{

		echo json_encode($this->mpedidos->listar());

	}
	public function listarPedidos()
	{

		echo json_encode($this->mpedidos->listar());

	}
	public function buscarPedidos()
	{
		$p = $this->input->post('idPedido');
		echo json_encode($this->mpedidos->busar($p));

	}

	public function editarPedido()
	{
		$p = $this->input->post('idPedido');
		$p = $this->input->post('idPedido');
		$p = $this->input->post('idPedido');
		$p = $this->input->post('idPedido');

		echo json_encode($this->mpedidos->editar($p));

	}
 }
?>