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

		 $producto['Precio']  = $this->input->post('precio');
		 $detalle['Cantidad']       = $this->input->post('txtCantidad');

		 $detalle['valor'] = $detalle['Cantidad'] * $producto['Precio'];

		 
		 $detalle['PK_idProducto']  = $this->input->post('idProducto');

		 $detalle['FechaEmision']   = $this->input->post('txtEmail');
		 $detalle['valor']          = $this->input->post('txtTelefono');
		 $detalle['PK_idUsuario']   = $this->input->post('txtCelular');

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
