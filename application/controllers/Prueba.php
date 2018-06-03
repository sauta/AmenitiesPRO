<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    //  $this->load->model('musuario');
	//	$this->load->library('session');
	}

    public function index()
	{
        $data = array('mensaje1' => 'Con mayo!!!');
		$this->load->view('prueba/juan',$data);
	    
    }
    
    public function guardar()
    {
        data
    }
}
?>