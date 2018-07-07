<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mempresa extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}
		/********************************************Buscadores******************************************/
	    public function buscar()
	    {
	    	# code...
	    }

	    public function listar()
	    {
	    	# code...
	    }
	    /********************************************Guardadores******************************************/
	    public function guardar($parametro)
	    {
	    	$campos = array(
					'NombreFantasia'     => $parametro['NombreFantasia'],
					'Rut'       	     => $parametro['RutEmpresa'],
					'RazonSocial'		 => $parametro['RazonSocial'],
					'Descripcion' 		 => $parametro['Descripcion'],
					'PK_idTipoCliente' 	 => $parametro['idTipoCliente']
					 );

			$this->db->insert('empresa',$campos);

	   		return $this->db->insert_id();
	    }
	    /********************************************Eliminadores******************************************/
	    public function eliminar()
	    {
	    	# code...
	    }
	    /********************************************Editadores******************************************/
	    public function editar()
	    {
	    	# code...
	    }
	    /********************************************Validadores******************************************/
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