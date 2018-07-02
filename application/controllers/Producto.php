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

	// public function updateProducto()
	// {
	// 	$producto['sku'] 		    = $this->input->post('sku');
	// 	$producto['Nombre']     	= $this->input->post('nombre');
	// 	$producto['idCategoria'] 	= $this->input->post('categoria');
	// 	$producto['categoria'] 	    = $this->input->post('categoria');
	// 	$producto['categoria'] 	    = $this->input->post('categoria');
	// 	$producto['categoria'] 	    = $this->input->post('categoria');

	// 	'sku'		    => $parametro['sku'],
	// 	'Nombre'	    => $parametro['Nombre'],
	// 	'Descripcion'   => $parametro['Descripcion'],
	// 	'Precio'	    => $parametro['Precio'],
	// 	'PK_idCategoria'=> $parametro['idCategoria'],
	// 	'url_imagen'	=> $parametro['url_imagen'];

	// 	$this->mproducto->
	// }

	public function updateProducto()
	{
		# code...
	}
}
?>