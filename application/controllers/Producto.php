<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mcategoria');
		$this->load->model('mproducto');
		$this->load->library('session');
	}
		
	public function getProducto()
	{
		echo json_encode($this->mproducto->getProductos());
	}

	public function getProductoCategoria()
	{
		$c = $this->input->post('PK_idCategoria');
		echo json_encode($this->mproducto->buscarPorCategoria($c));
	}	

	public function updateProducto()
	{
		$producto['sku'] 		    = $this->input->post('sku');
		$producto['Nombre']     	= $this->input->post('nombre');
		$producto['Descripcion'] 	= $this->input->post('Descripcion');
		$producto['Precio'] 	    = $this->input->post('Precio');
		$producto['idCategoria'] 	    = $this->input->post('idCategoria');
		$producto['url_imagen'] 	    = $this->input->post('url_imagen');

		$this->mproducto->guardar($producto);
	}

	public function updateProducto()
	{
		# code...
	}
}
?>