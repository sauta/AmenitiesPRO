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

			// $nombre = $parametro['nombre'];
			// $clave  = $parametro['clave'];

			// = $this->db->call_function('login', $nombre, $clave);

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

	  //   public function getClientes()
	  //   {

	  //   	<th>Usuario</th>
   //          <th>Empresa</th>
   //          <th>Contacto</th>
   //          <th>Region</th>




//buenaaaaaaa

		public function getCliente()
		{
				$this->db->select(' u.NombreUsu, u.Clave , en.Nombre, en.Rut, ca.Cargo, cn.Telefono, cn.Email, cn.Celular, em.NombreFantasia, em.Rut, em.RazonSocial, em.Descripcion, re.Region, pr.Provincia, cm.Comuna, pe.Permiso, td.Tipo');

                $this->db->from('usuario u');
                $this->db->join('encargado en ', 'en.PK_idUsuario = u.idUsuario');
                $this->db->join('permiso pe ', ' pe.idPermiso = u.PK_idPermiso');
                $this->db->join('cargo ca ', ' ca.idCargo = en.PK_idCargo');
                $this->db->join('contacto cn ', ' cn.PK_idEncargado = en.idEncargado');
                $this->db->join('empresa em', ' cn.PK_idEmpresa = em.idEmpresa');
                $this->db->join('asignar_direccion ad ', ' ad.PK_idEmpresa = em.idEmpresa');
                $this->db->join('tipo_direccion td ', ' td.idTipoDireccion = ad.PK_idTipoDireccion');
                $this->db->join('direccion d ', ' d.idDireccion  = ad.PK_idDireccion');
                $this->db->join('comuna cm ', ' cm.idComuna = d.PK_idComuna');
                $this->db->join('provincia pr ', ' pr.idProvincia = cm.PK_idProvincia');
                $this->db->join('region re ', ' re.idRegion = pr.PK_idRegion');
                $this->db->where('pe.idPermiso', 2);

                $query = $this->db->get();

               	return $query->result();


		}
				

	  // //   	$this->db->select('u.NombreUsu, e.Nombre, m.NombreFantasia',
	  // //   '','','','','');

	 	//  //   	$this->db->from('usuario u');
			// // $this->db->join('encargado e', 'e.PK_idUsuario = u.idUsuario');
	  // //  	 	$this->db->join('contacto c', 'c.PK_idEncargado = e.idEncargado');
	  // //  	 	$this->db->join('empresa m', 'm.idEmpresa = c.PK_idEmpresa');						
	  // //  	 	$this->db->join('permiso p', 'p.idPermiso = u.PK_idPermiso');
	  // 	//   	$this->db->where('p.idPermiso',2);

	  // //   	$usuarios = $this->db->get();

	  // //   	return $usuarios;
	  //   }
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
					'Foto'=> $parametro['url_foto_perfil'],

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
	    /********************************************Extraer Clientes*****************************************/
	 
  }