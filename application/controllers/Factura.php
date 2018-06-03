<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fatura extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mfacturas');
		$this->load->library('session');
	}


	public function getFacturas()
	{
		echo json_encode($this->mfacturas->listar());
	}

	public function setFaturas()
	{
		
	}
 }
?>