<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mcategoria');
		$this->load->model('mproducto');
		$this->load->model('mcategoria');
		$this->load->library('session');
		$this->load->model('mcompra');

	}
		
	public function getCompra()
	{
		echo json_encode($this->mcompra->getCompras());
	}

}
?>