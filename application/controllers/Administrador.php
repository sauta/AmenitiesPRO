<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function cpanel()
		//panel del adminitrador
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/vpanel');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

	public function perfil()
		//perfil del usuario ya sea administrador o cliente de cualquier tipo
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							   'nombre' => $this->session->userdata('s_nombreEncargado'),
							   'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/vperfil');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

/*****************************************Estadisticas*********************************************/

	public function estadisticas_de_facturas()
		//estadisticas de las facturas del los clientes que seleccione el administrador
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/estadistica/vfactura');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
					}else{redirect('Login');}
		}

	public function estadisticas_de_pedidos()
		//estadisticas de los pedidos realizados por los clientes y el administrador 
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/estadistica/vpedido');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

	public function estadisticas_de_ventas()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							   'nombre' => $this->session->userdata('s_nombreEncargado'),
							   'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/estadistica/vventa');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');

					}else{redirect('Login');}
		}

/*****************************************Mantenedores*********************************************/

	public function clientes()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mantenedor/vcliente');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('ccliente/login');}
		}

	public function encargo()
		//de adminitrador mantenedor pedido
		{
			  
			   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mantenedor/vencargo');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

	public function facturas()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mantenedor/vfactura');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
					}else{redirect('Login');}
		}

	public function productos()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mantenedor/vproducto');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
					}else{redirect('Login');}
		}

/*****************************************Mensajeria***********************************************/
	
	public function demanda()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mensajeria/vdemanda');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

	public function envio_de_ofertas()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							  'nombre' => $this->session->userdata('s_nombreEncargado'),
							  'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mensajeria/voferta');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
					}else{redirect('Login');}
		}

	public function reportes()
		{
	  		   if(isset($_SESSION['s_idUsuario'])){

				$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
								'nombre' => $this->session->userdata('s_nombreEncargado'),
								 'permiso' => $this->session->userdata('s_permiso'));

				$this->load->view('MasterPage/head');
				$this->load->view('MasterPage/header',$data);
				$this->load->view('MasterPage/asideLeft',$data);
				$this->load->view('usuario/administrador/mensajeria/vreporte');
				$this->load->view('MasterPage/asideRight');
				$this->load->view('MasterPage/footer');
				$this->load->view('MasterPage/script');
				}else{redirect('Login');}
		}

}
 ?>