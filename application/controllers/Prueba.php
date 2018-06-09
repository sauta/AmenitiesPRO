<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('mproducto');
		$this->load->library('session');
	}

		public function index()
		{
            $this->load->view('prueba/prueba');
		}
	}

?>