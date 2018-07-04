<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mprueba extends CI_Model 
{

  		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
        }

        public function listarEmpresa()
	    {
	    	$this->db->select('NombreFantasia');
	    	$this->db->from('empresa');

	    	$empresas = $this->db->get();

	    	return $empresas;
	    }
}