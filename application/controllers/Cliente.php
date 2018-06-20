<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('musuario');
		$this->load->library('session');
	}

    public function index()
		{
			if($this->session->userdata() != null){
	    	$data = array('empresa' => $this->session->userdata('s_nombreFantasia'));

	    	$this->load->view('MasterPage/head');
	    	$this->load->view('usuario/cliente/vpanel',$data);

	    	}else{redirect('Login');}
		}

    public function cpanel()
		{

			if(isset($_SESSION['s_idUsuario'])){
				if($this->session->userdata('s_permiso')=='Cliente')
				{
					$data = array('empresa' => $this->session->userdata('s_nombreFantsia'),
									'nombre' => $this->session->userdata('s_nombreEncargado'),
									 'permiso' => $this->session->userdata('s_permiso')
										);
					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/vpanel'); //cambiar solamente esto  para cambiar de pagina
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');

				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function perfil()
		//perfil del usuario ya sea administrador o cliente de cualquier tipo
		{
		   
		   if(isset($_SESSION['s_idUsuario'])){
		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

			$this->load->view('MasterPage/head');
			$this->load->view('MasterPage/header',$data);
			$this->load->view('MasterPage/asideLeft',$data);
			$this->load->view('usuario/vperfil');
			$this->load->view('MasterPage/footer');
			$this->load->view('MasterPage/asideRight');
			$this->load->view('MasterPage/script');
			}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

/*****************************************Estadisticas*********************************************/
    public function consumo()
		{
			if(isset($_SESSION['s_idUsuario'])){

				if($this->session->userdata('s_permiso')=='Cliente')
				{
					$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
									'nombre' => $this->session->userdata('s_nombreEncargado'),
									 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/estadistica/vconsumo');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
					}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function facturas()
		{
  		   if(isset($_SESSION['s_idUsuario'])){
  		   	if($this->session->userdata('s_permiso')=='Cliente')
				{
					$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
									'nombre' => $this->session->userdata('s_nombreEncargado'),
									 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/estadistica/vfactura');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
		    }else{redirect('Login');}
		}

	public function estadisticas_de_pedidos()
		{
  		   if(isset($_SESSION['s_idUsuario'])){
			if($this->session->userdata('s_permiso')=='Cliente')
				{
					$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

						$this->load->view('MasterPage/head');
						$this->load->view('MasterPage/header',$data);
						$this->load->view('MasterPage/asideLeft',$data);
						$this->load->view('usuario/cliente/estadistica/vpedido');
						$this->load->view('MasterPage/footer');
						$this->load->view('MasterPage/asideRight');
						$this->load->view('MasterPage/script');
					}else{redirect('Administrador/cpanel');}	
			}else{redirect('Login');}
		}

/*****************************************Mantenedores*********************************************/
	public function encargadado()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mantenedor/vencargado');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function encargar()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mantenedor/vencargar');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function productos()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mantenedor/vproducto');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

/*****************************************Mensajeria***********************************************/
	public function compra()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mensajeria/vcompra');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function factura()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mensajeria/vfactura');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function ofertas()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mensajeria/voferta');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

	public function pedidos()
		{

  		   if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
							'nombre' => $this->session->userdata('s_nombreEncargado'),
							 'permiso' => $this->session->userdata('s_permiso'));

					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view('usuario/cliente/mensajeria/vpedido');
					$this->load->view('MasterPage/footer');
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script');
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

/********************************************Prueba************************************************/

	public function prueba()
		{

			$this->load->view('prueba/prueba');

		}

	}

?>