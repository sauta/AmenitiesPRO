<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontacto extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}
		/********************************************Buscadores******************************************/
	   	public function buscar($parametro)
		{
			 $query = $this->db->get_where('contacto',array('idContacto'=>$parametro));

			 return $query->result();
		}

	    public function listar()
	    {
	    	# code...
	    }
	    /********************************************Guardadores******************************************/
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
	    /********************************************Eliminadores******************************************/
	    public function eliminar()
	    {
	    	# code...
	    }
	    /********************************************Editores******************************************/
	    public function editar()
	    {
	    	# code...
	    }
	    /********************************************Recuperar Email******************************************/
		public function recuperar($parametro)
	    {
	    	$campos = array('Email'=> $parametro['email']);
			$this->db->select('contacto',$campos);

			return true;
	    }
//ojoooo //$this->session->userdata('s_permiso') == 'Cliente'
	    
	// 	function new_user($correo)
	// {
 //       $data = array(
 //            'Email' => $correo,
 //            'PK_idEmpresa' => session->userdata('s_idEmpresa'),
 //            'PK_idEncargado' => session->userdata('s_idEncargado')
 //        );
 //        return $this->db->insert('contacto', $data);	
 //    }

  }