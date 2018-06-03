<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Encargado extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mempresa');
		$this->load->library('session');
	}


	public function ValidarDatos($encargado)
	{
		
	}
 }
?>