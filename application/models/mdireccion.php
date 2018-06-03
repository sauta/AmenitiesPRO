<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mdireccion extends CI_Model 
  {
//NOTA IMPORTANTE  "Parametro" es la variable que entra a la funcion, puede ser array o una variable simple tipo int o string así funciona PHP.
  		function __construct()
		{
			parent::__construct();
		}
	    public function buscar()
	    {
	    	# code...
	    }
	    public function guardar($parametro)
	    {
	    	$campos = array(
					'direccion'=> $parametro['Direccion'],
					'PK_idComuna'=> $parametro['idComuna']
					 );

			$this->db->insert('Direccion',$campos);
			
	   		return $this->db->insert_id();
	    }

	    public function generarAsociacion($parametro)
	    {
	    	$campos = array(
					'PK_idEmpresa'      => $parametro['idEmpresa'],
					'PK_idTipoDireccion'=> $parametro['idTipoDireccion'],
					'PK_idDireccion'    => $parametro['idDireccion']
			 );
			$this->db->insert('asignar_direccion',$campos);
	   		$q = $this->db->get('asignar_direccion');
	    }

	    public function eliminar()
	    {
	    	# code...
	    }
	    public function editar()
	    {
	    	# code...
	    }
	    public function listarComuna($parametro)
	    {
	      $parametro = $this->db->get_where('comuna',array('PK_idProvincia'=>$parametro));

	      return $parametro->result();

	    }
	    public function listarProvincia($parametro)
	    {
	    	$parametro = $this->db->get_where('provincia',array('PK_idRegion'=>$parametro));

	        return $parametro->result();
	    }
	    public function listarRegion()
	    {
	    	$parametro = $this->db->get('region');

	        return $parametro->result();
	    }
  }