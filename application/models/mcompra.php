<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mcompra extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}

		public function getCompras()
	    {
			$parametro = $this->db->get('encargado');
	    	$this->db->where('PK_idUsuario',$this->session->userdata('s_idUsuario'));
			
	        return $parametro->result();
	    }

	    public function setCompras()
	    {
			$campos = array(
					'mes'		    	=> $parametro['mes'],
					'valor_total_neto'  => $parametro['neto'],
					'valor_total_bruto' => $parametro['bruto'],
					'PK_idUsuario'	    => $this->session->userdata('s_idUsuario')
					 );
			$this->db->insert('compra',$campos);

	   		return $this->db->insert_id();
	    }
	}