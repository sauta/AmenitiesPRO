<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('musuarios');
		$this->load->library('session');
	}

	public function Agregar()
	{
		
	}
	
	public function Eliminar($value='')
	{
		# code...
	}

	public function Buscar($value='')
	{
		# code...
	}

	public function Modificar($value='')
	{
		# code...
	}

	public function ValidaRegistro($usuario)
	{

		if ($usuario['NombreUsuario'] == null || $usuario['NombreUsuario'] == '')
		{
			echo '<script type="text/javascript>alert("Nombre del usuario Vacio");</script>';
			return false;
		}
		 elseif ($usuario['Clave'] == null || $usuario['Clave']== '')
		{
			echo '<script type="text/javascript>alert("No ingresó una calve");</script>';
		 	return false;
		}
		 elseif ($usuario['RepClave']  == null || $usuario['RepClave']== '')
		{
			echo '<script type="text/javascript>alert("El campo re-clave se ecuentra vacio");</script>';
		  	return false;
		}
		 elseif ($usuario['idPremiso'] == null || $usuario['idPremiso']== '')
		{
			echo '<script type="text/javascript>alert("No se pudo ingresar el permiso por alguna razón");</script>';
		   	return false;
		}
		 elseif($usuario['Clave'] != $usuario['RepClave']) 
		{
			echo '<script type="text/javascript>alert("Las calves no coinciden");</script>';
			return false;
		}else{
			return true;
		}
	}


 }
?>