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

		public function generarLinkTemporal($idusuario, $username)
		{
		   // Se genera una cadena para validar el cambio de contraseña
		   $cadena = $idusuario.$username.rand(1,9999999).date('Y-m-d');
		   $token = sha1($cadena);
		 
		   $conexion = new mysqli('localhost', 'root', '', 'amenitiespro');
		   // Se inserta el registro en la tabla tblreseteopass
		   $sql = "INSERT INTO usuario (idUsuario, NombreUsu, Clave) VALUES($idusuario,'$username','$token');";
		   $resultado = $conexion->query($sql);
		   if($resultado){
		      // Se devuelve el link que se enviara al usuario
		      $enlace = $_SERVER["SERVER_NAME"].'/pass/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
		      return $enlace;
		   }
		   else
		      return FALSE;
		}

  }