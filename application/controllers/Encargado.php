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
		if($encargado['NombreEncargado'] == null || $encargado['NombreEncargado'] == '' )
		{
			$mensaje = "";
			return $mensaje;
		}
		  elseif($encargado['RutEncargado']  == null || $encargado['RutEncargado'] == '' )
		{
			$mensaje = "No ingresó el rut encargado";
			return $mensaje;
		}
		  elseif($encargado['idCargo']  == null || $encargado['idCargo']   == '' )
		{
			$mensaje = "No se encintró al encargado";
			return $mensaje;
		}else{
			return true;
		}
	}
 }
?>