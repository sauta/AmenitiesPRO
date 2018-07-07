<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategoria extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	/********************************************Buscadores******************************************/
    public function getCategoria()
    {
    	$parametro = $this->db->get('categoria');
    	
    	return $parametro->result();
    }
    
    public function buscarId($idCategoria)
    {
		$_categoria $this->db->select('categoria', array('idCategoria' => $idCategoria));
		 return $_categoria;
    }

    public function buscarNombre($categoria)
    {
		 $this->db->select('categoria', array('Categoria' => $categoria));
		 return true;
    }

    /********************************************Guardadores******************************************/
    public function guardar($parametro)
	    {
	    	$campos = array('categoria'=>$parametro['Categoria']);$this->db->insert('categoria',$campos);

	   		return $this->db->insert_id();
	    }

	/********************************************Eliminadores******************************************/
    public function eliminarId($idCategoria)
    {
		 $this->db->delete('categoria', array('idCategoria' => $idCategoria));
		 return true;
    }
 
}
?>