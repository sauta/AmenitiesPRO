<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mcontacto');
		$this->load->library('session');
	}

	public function ValidarDatos($contacto)
	{
		if($contacto['Celular']    == null || $contacto['Celular']  == '')
		{

		}
		elseif($contacto['Email']      == null || $contacto['Email']    == '')
		{

		}
		elseif($contacto['Telefono']   == null || $contacto['Telefono'] == '')
		{

		}else{

		}
	}

}
?>