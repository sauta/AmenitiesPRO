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
	}

?>