<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Musuario extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
			$this->load->library('session');

		}
	/********************************************Login*****************************************/
		public function login($parametro)
	   	 {  
	   	 	$this->db->select('u.idUsuario, u.NombreUsu, e.Nombre, c.Telefono, c.Email, c.Celular, m.NombreFantasia, p.Permiso, a.Cargo');
	   	 	$this->db->from('usuario u');
	   	 	$this->db->join('encargado e', 'e.PK_idUsuario = u.idUsuario');
	   	 	$this->db->join('cargo a', 'e.PK_idCargo = a.idCargo');
	   	 	$this->db->join('contacto c', 'c.PK_idEncargado = e.idEncargado');
	   	 	$this->db->join('empresa m', 'm.idEmpresa = c.PK_idEmpresa');
	   	 	$this->db->join('permiso p', 'p.idPermiso = u.PK_idPermiso');
			$this->db->where('NombreUsu',$parametro['nombre']);
			$this->db->where('Clave',$parametro['clave']);

			$query = $this->db->get();

			if ($query->num_rows() == 1) {

				$r = $query->row();

				$s_usuario = array(
					's_idUsuario' => $r->idUsuario,
					's_nombreUsuario' => ''+$r->NombreUsu,
					's_nombreUsuarioSaludo' => 'Bienvenido '+$r->NombreUsu,
					's_nombreEncargado' => $r->Nombre,
					's_permiso' => $r->Permiso,
					's_cargo' => $r->Cargo,
					// 's_idTipoCliente' => $r->PK_idTipoCliente,
					// 's_idCargo' => $r->PK_idCargo,
					's_nombreFantasia' => $r->NombreFantasia,
					's_email' => $r->Email,
					's_telefono' => $r->Telefono,
					's_celular' => $r->Celular);

				$this->session->set_userdata($s_usuario);
				return true;

				} else {

				return false;
			 }
	     }
		/********************************************Validadores*****************************************/
	    public function validarExistencia($parametro) //valida si el usuario existe
	    {
	       $query = $this->db->get_where('usuario',array('NombreUsu'=>$parametro['NombreUsuario']));

			if ($query->num_rows() == 1)
			{
				return true; //el usuario existe :D

			}else{

				return false; //el usuario no existe D:
			}
	    }

	    /********************************************Buscadores*****************************************/
		public function buscar($parametro)
		{
			 $query = $this->db->get_where('usuario',array('NombreUsuario'=>$parametro));

			 return $query->result();
		}

	    public function listar()
	    {
	    	$this->db->select('u.NombreUsu, e.Nombre, m.NombreFantasia');
	    	$this->db->from('usuario u');
			$this->db->join('encargado e', 'e.PK_idUsuario = u.idUsuario');
	   	 	$this->db->join('contacto c', 'c.PK_idEncargado = e.idEncargado');
	   	 	$this->db->join('empresa m', 'm.idEmpresa = c.PK_idEmpresa');
	   	 	$this->db->join('permiso p', 'p.idPermiso = u.PK_idPermiso');
	    	$this->db->where('p.idPermiso',2);

	    	$usuarios = $this->db->get();

	    	return $usuarios;
	    }
	    /********************************************Guardar*****************************************/
	    public function guardar($parametro) //guarda un usuario en la BDD retornando la ID para darsela al encargado
	    {
		 $campos = array(
					'NombreUsu'=> $parametro['NombreUsuario'],
					'Clave'=> $parametro['Clave'],
					'PK_idPermiso'=> $parametro['idPremiso']
					 );
		 	$this->db->insert('usuario',$campos);

	   		return $this->db->insert_id();
	    }
	    /********************************************Eliminar*****************************************/
	    public function eliminar($idUsuario)
	    {
	         $this->db->delete('usuario', array('idUsuario' => $idUsuario));
	    }
	    public function editarCliente($parametro) // funcion que edita los parametros de un mismo cliente
	    {
	    	$campos = array(
					'NombreUsu'=> $parametro['NombreUsuario'],
					'Clave'=> $parametro['Clave'],
					 );
		 	$this->db->update('usuario', $campos, array('idUsuario' => $parametro['idUsuario']));
	    }
	    /********************************************Editadores*****************************************/
	    public function editarAdmin($parametro) //funcion que edita los parametros del usuario seleccionado por el administrador
	    {
	    	$campos = array(
					'NombreUsu'=> $parametro['NombreUsuario'],
					'Clave'=> $parametro['Clave'],
					'PK_idPermiso'=> $parametro['idPremiso']
					 );
			$this->db->update('usuario', $campos, array('idUsuario' => $parametro['idUsuario']));
	    }
  }