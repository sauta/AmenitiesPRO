<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mempresa extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}

	    public function buscar()
	    {
	    	# code...
	    }
	    public function listar()
	    {
	    	# code...
	    }
	    public function guardar($parametro)
	    {
	    	$campos = array(
					'NombreFantasia'     => $parametro['NombreFantasia'],
					'Rut'         => $parametro['RutEmpresa'],
					'RazonSocial'=> $parametro['RazonSocial'],
					'Descripcion' => $parametro['Descripcion'],
					'PK_idTipoCliente' => $parametro['idTipoCliente']
					 );

			$this->db->insert('empresa',$campos);

	   		return $this->db->insert_id();
	    }
	    public function eliminar()
	    {
	    	# code...
	    }
	    public function editar()
	    {
	    	# code...
	    }
	}
?>