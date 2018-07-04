<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mreporte extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}
<<<<<<< HEAD




=======
		
		
		public function guardar($parametro)
	    {
	    	$campos = array(
					'asunto'		    => $parametro['asunto'],
					'descripcion'	    => $parametro['descripcion'],
					'FK_usuario'  		    => $parametro['nombre']			
					 );
			$this->db->insert('reporte',$campos);

	   		return $this->db->insert_id();
		}
		
		public funcion listarNombre($nombre)
		{
			$parametro = $this->db->get_where('reporte',array('FK_usuario'=>$nombre));

	        return $parametro->result();
		}
		
>>>>>>> 9d96a9a6815155b69869bdff92d3050290a36699
	}

?>