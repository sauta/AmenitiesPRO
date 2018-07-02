<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategoria extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

    public function getCategoria()
    {
    	$parametro = $this->db->get('categoria');
    	
    	return $parametro->result();
    }

    public function guardar($parametro)
	    {
	    	$campos = array('categoria'=>$parametro['Categoria']);$this->db->insert('categoria',$campos);

	   		return $this->db->insert_id();
	    }

    public function eliminarId($idCategoria)
    {
		 $this->db->delete('categoria', array('idCategoria' => $idProducto));
		 return true;
    }
 
}
?>