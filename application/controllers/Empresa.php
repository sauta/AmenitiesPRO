<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mempresa');
		$this->load->library('session');
	}


	public function ValidarDatos($empresa)
	{
		if($empresa['NombreFantasia']      == null && $empresa['NombreFantasia']  == '')
		{
			$mensaje = "No ingresó un nombre de Fantasia";
			return $mensaje;
		}
		elseif($empresa['RutEmpresa']      == null && $empresa['RutEmpresa']      == '')
		{
			$mensaje = "No ingresó el rut de la empresa";
			return $mensaje;
		}
		elseif($empresa['RazonSocial']     == null && $empresa['RazonSocial']     == '')
		{
			$mensaje = "No ingresó la razón social de la empresa";
			return $mensaje;
		}
		elseif($empresa['Descripcion']     == null && $empresa['Descripcion']     == '')
		{
			$mensaje = "La descripción de la emresa es obligatoria";
			return $mensaje;
		}
		elseif($empresa['idTipoCliente']   == null && $empresa['idTipoCliente']   == '')
		{
			$mensaje = "hubo un problema con listar el tipo de Cliente";
			return $mensaje;
		}else{

			return 1;
		}
	}

	public function validarRut($rut)
	{
		
	}
 }
?>