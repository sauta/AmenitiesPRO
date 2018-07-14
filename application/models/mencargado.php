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
	    
	    public function listarId($id)
	    {
	    	$this->db->select('en.Nombre, en.Rut');
	    	$this->db->from('encargado en');
	    	$this->db->join('contacto c', 'c.PK_idEncargado = en.idEncargado');
	   	 	$this->db->join('empresa em', 'em.idEmpresa = c.PK_idEmpresa');
	    	$this->db->where('em.idEmpresa', $id );

	    	$query = $this->db->get();
			
	        return $query->result();
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

	    public function valudarRut($rut) //valida si ya existe el rut
	    {

	       $query = $this->db->get_where('encargado',array('Rut'=>$rut));
	     //  $query = $this->db->get();
			if ($query->num_rows() == 1)
			{
				return true; // el rut existe :D

			}else{

				return false; //no existe D:
			}
	        	
	    }

		public function ValidarDatos($encargado)
		{
			if($encargado['NombreEncargado'] == null || $encargado['NombreEncargado'] == '' )
			{
				$mensaje = "No ingresó el nombre el encargado";
				return $mensaje;
			}
			  elseif($encargado['RutEncargado']  == null || $encargado['RutEncargado'] == '' )
			{
				$mensaje = "No ingresó el rut del encargado";
				return $mensaje;
			}
			  elseif($encargado['idCargo']  == null || $encargado['idCargo']   == '' )
			{
				$mensaje = "No se encintró al encargado";
				return $mensaje;
			}else{
				return true;
			}
		}
	}
?>
