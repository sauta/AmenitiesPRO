<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mencargado extends CI_Model 
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
	    	$parametro = $this->db->get('encargado');

	        return $parametro->result();
	    }
	    public function guardar($parametro)
	    {
	    	 $campos = array(
					'Nombre'	  => $parametro['NombreEncargado'],
					'Rut'		  => $parametro['RutEncargado'],
					'PK_idCargo'  => $parametro['idCargo'],
					'PK_idUsuario'=> $parametro['idUsuario']
					 );
			$this->db->insert('encargado',$campos);

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
