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
			$parametro = $this->mproducto->listar();
			echo json_encode($parametro);
		}

}
?>