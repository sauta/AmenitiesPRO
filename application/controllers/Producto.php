<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mprodcuto');
		$this->load->library('session');
	}

}
	?>