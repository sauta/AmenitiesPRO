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
					'usuario'  		    => $parametro['FK_descripcion'],
					
					 );
			$this->db->insert('reporte',$campos);

	   		return $this->db->insert_id();
	    }
		
>>>>>>> 9d96a9a6815155b69869bdff92d3050290a36699
	}

?>