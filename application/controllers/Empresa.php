<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mempresa');
		$this->load->library('session');
	}
	public function getEmpresa()
	{
		$parametro = $this->mempresa->getEmpresas();
		echo json_encode($parametro);
	}

 }
?>