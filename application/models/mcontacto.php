<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontacto extends CI_Model 
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
					'Email'         => $parametro['Email'],
					'Telefono'      => $parametro['Telefono'],
					'Celular'       => $parametro['Celular'],
					'PK_idEncargado'=> $parametro['idEncargado'],
					'PK_idEmpresa'  => $parametro['idEmpresa']
					 );
			$this->db->insert('contacto',$campos);
	   		
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