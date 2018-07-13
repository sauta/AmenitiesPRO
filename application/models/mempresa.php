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

	    public function validarRut($rut) //valida si ya existe el rut
	    {
	        $query = $this->db->get_where('empresa',array('Rut'=>$rut));
	     //  $query = $this->db->get();
			if ($query->num_rows() == 1)
			{
				return true; //el rut existe :D

			}else{

				return false; //el rut no existe D:
			}
	        	
	    }

	}
?>