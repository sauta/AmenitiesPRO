<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('mproducto');
		$this->load->library('session');
	}

		public function getProducto()
		{

			echo json_encode($this->mproducto->getProductos());
		}
	
	public function getCategorias()
	{
		$parametro = $this->mproducto->getCategoria();
		echo json_encode($parametro);
	}

	public function setProducto()
	{
		$producto[''] = $this->input->post('sku');
		$producto[''] = $this->input->post('nombre');
		$producto[''] = $this->input->post('categoria');
		$producto[''] = $this->input->post('#InputFile');
	}
}
?>