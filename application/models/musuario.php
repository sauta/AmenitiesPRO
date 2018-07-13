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
	   	 	$this->db->select('u.idUsuario, u.NombreUsu, u.Clave, u.url_foto_perfil, e.Nombre, c.Telefono, c.Email, c.Celular, em.NombreFantasia, p.Permiso, a.Cargo, em.Rut, em.RazonSocial, em.Descripcion, re.Region,
	   	 		d.Direccion, pr.Provincia, cm.Comuna, td.Tipo, pr.Provincia');
	   	 	
	   	 	$this->db->from('usuario u');
	   	 	$this->db->join('encargado e', 'e.PK_idUsuario = u.idUsuario');
	   	 	$this->db->join('cargo a', 'e.PK_idCargo = a.idCargo');
	   	 	$this->db->join('contacto c', 'c.PK_idEncargado = e.idEncargado');
	   	 	$this->db->join('empresa em', 'em.idEmpresa = c.PK_idEmpresa');
	   	 	$this->db->join('permiso p', 'p.idPermiso = u.PK_idPermiso');
	   	 	$this->db->join('asignar_direccion ad ', ' ad.PK_idEmpresa = em.idEmpresa');
            $this->db->join('tipo_direccion td ', ' td.idTipoDireccion = ad.PK_idTipoDireccion');
            $this->db->join('direccion d ', ' d.idDireccion  = ad.PK_idDireccion');
            $this->db->join('comuna cm ', ' cm.idComuna = d.PK_idComuna');
            $this->db->join('provincia pr ', ' pr.idProvincia = cm.PK_idProvincia');
            $this->db->join('region re ', ' re.idRegion = pr.PK_idRegion');
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
					's_nombreEncargado' => $r->Nombre,
					's_permiso' => $r->Permiso,
					's_cargo' => $r->Cargo,
					's_direccion' => $r->Direccion,
					's_region' => $r->Region,
					's_provincia' => $r->Provincia,
					's_comuna' => $r->Comuna,
					's_rut' => $r->Rut,
					// 's_idTipoCliente' => $r->PK_idTipoCliente,
					// 's_idCargo' => $r->PK_idCargo,
					's_nombreFantasia' => $r->NombreFantasia,
					's_email' => $r->Email,
					's_telefono' => $r->Telefono,
					's_celular' => $r->Celular,
					's_foto' => $r->url_foto_perfil,

//ojo arreglar vulneravilidad
					's_clave' => $r->Clave);

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
	     //  $query = $this->db->get();
			if ($query->num_rows() == 1)
			{
				return true; //el usuario existe :D

			}else{

				return false; //el usuario no existe D:
			}
			///
			// $parametro = $this->db->get_where('provincia',array('PK_idRegion'=>$parametro));

	  //       return $parametro->result();
	    }

	    /********************************************Buscadores*****************************************/
		public function buscar($parametro)
		{
			 $query = $this->db->get_where('usuario',array('NombreUsuario'=>$parametro));

			 return $query->result();
		}

		public function guardarPerfil($perfil)
		{
			$campos = array(
					'NombreUsu'=> $parametro['NombreUsuario'],
					'Clave'=> $parametro['Clave'],
					'PK_idPermiso'=> $parametro['idPremiso']
					 );
			$this->db->update('usuario', $campos, array('idUsuario' => $parametro['idUsuario']));
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
				$this->db->select('em.idEmpresa, u.NombreUsu, u.Clave , en.Nombre, en.Rut, ca.Cargo, cn.Telefono, cn.Email, cn.Celular, em.NombreFantasia, em.Rut, em.RazonSocial, em.Descripcion, re.Region, pr.Provincia, cm.Comuna, pe.Permiso, 
					td.Tipo, pr.Provincia, cm.Comuna');

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
					'PK_idPermiso'=> $parametro['idPermiso']
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
				'Clave'=> $parametro['Clave']
	    			);
	    
		    	if(!$this->validarExistencia($parametro))
		    	{
		    		echo "wea 1";
		    		return true;

	    		}else{
	    		echo '<script type="text/javascript">alert("'+print_r(array_values($parametro));+'");</script>';
	    		$this->db->update('usuario', $campos, array('idUsuario' => $parametro['idUsuario']));
	   			return false;
	    		echo "wea 2";
	    	}
	    }

	    /********************************************Editadores*****************************************/
	    public function editarAdmin($parametro) //funcion que edita los parametros del usuario seleccionado por el administrador
	    {
	    	$campos = array(
					'NombreUsu'   => $parametro['NombreUsuario'],
					'Clave'		  => $parametro['Clave'],
					'PK_idPermiso'=> $parametro['idPremiso']
					 );
			$this->db->update('usuario', $campos, array('idUsuario' => $parametro['idUsuario']));
	    }
	    /********************************************Extraer Clientes*****************************************/

	    public function recuperarClave()
	    {
	    	
	    }
		//recuperar contraseña econtrado por ahí a ver si funciona 
	    public function invia_password($mail){
			    $data = array();
			    $query = $this->db->get('impostazioni');
			    if ($query->num_rows() > 0) {
			        $data = $query->result_array();
			        $this->send_email('xxxxxxxxxxxx@hotmail.it', $data[0]['admin_password']);
			    }

			    return 1;
		}

	    public function ingreoUsuario() //cuando ingrsó el usuario
	    {
	    	# code...
	    }

	    public function salidaUsuario() //cuando salió el usuario 
	    {
	    	# code...
	    }
	 
  }