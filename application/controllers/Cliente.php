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

	    	$pagina = 'usuario/cliente/vpanel';
			$this->cargarPagina($pagina);

		}

    public function cpanel()
		{

			$pagina = 'usuario/cliente/vpanel';
			$this->cargarPagina($pagina);
		}

	public function perfil()
		//perfil del usuario ya sea administrador o cliente de cualquier tipo
		{
		   
			$pagina = 'usuario/vperfil';
			$this->cargarPagina($pagina);
		}

/*****************************************Estadisticas*********************************************/
    public function consumo()
		{
			$pagina = 'usuario/cliente/estadistica/vconsumo';
			$this->cargarPagina($pagina);
		}

	public function facturas()
		{
		    $pagina = 'usuario/cliente/estadistica/vfactura';
			$this->cargarPagina($pagina);

		}

	public function estadisticas_de_pedidos()
		{
			$pagina = 'usuario/cliente/estadistica/vpedido';
			$this->cargarPagina($pagina);
		}

/*****************************************Mantenedores*********************************************/
	public function encargadado()
		{

			$pagina = 'usuario/cliente/mantenedor/vencargado';
			$this->cargarPagina($pagina);

		}

	public function encargar()
		{

				$pagina = 'usuario/cliente/mantenedor/vencargar';
				$this->cargarPagina($pagina);

		}

	public function productos()
		{

				$pagina = 'usuario/cliente/mantenedor/vproducto';
				$this->cargarPagina($pagina);

		}

/*****************************************Mensajeria***********************************************/
	public function compra()
		{

				$pagina = 'usuario/cliente/mensajeria/vcompra';
				$this->cargarPagina($pagina);

		}

	public function factura()
		{

				$pagina = 'usuario/cliente/mensajeria/vfactura';
				$this->cargarPagina($pagina);				

		}

	public function ofertas()
		{					

					$pagina = 'usuario/cliente/mensajeria/voferta';
					$this->cargarPagina($pagina);

		}

	public function pedidos()
		{

					$pagina = 'usuario/cliente/mensajeria/vpedido';
					$this->cargarPagina($pagina);
					
		}

////Cambiar al controlador correspondiente
	


/********************************************Prueba************************************************/


	function cargarPagina($pagina)
	{
		 if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
						  'nombre' => $this->session->userdata('s_nombreEncargado'),
						  'permiso' => $this->session->userdata('s_permiso'),
						  'nombrePerfil' => $this->session->userdata('s_nombreUsuario'),
						  // 'clave' => $this->session->userdata('s_clave'),

						  'email' => $this->session->userdata('s_email'),
						  'direccion' => $this->session->userdata('s_direccion'),
						  'region' => $this->session->userdata('s_region'),
						  'provincia' => $this->session->userdata('s_provincia'),
						  'comuna' => $this->session->userdata('s_comuna'),

						  'foto' => $this->session->userdata('s_foto'),
						  'rut' => $this->session->userdata('s_rut'),
						  'celular' => $this->session->userdata('s_celular'),
						  'telefono' => $this->session->userdata('s_telefono'));


					$this->load->view('MasterPage/head');
					$this->load->view('MasterPage/header',$data);
					$this->load->view('MasterPage/asideLeft',$data);
					$this->load->view($pagina,$data);
					$this->load->view('MasterPage/footer',$data);
					$this->load->view('MasterPage/asideRight');
					$this->load->view('MasterPage/script',$data);
				}else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
		}

		public function imprimirFactura()
		{
			if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Cliente')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
						  'nombre' => $this->session->userdata('s_nombreEncargado'),
						  'permiso' => $this->session->userdata('s_permiso'),
						  'nombrePerfil' => $this->session->userdata('s_nombreUsuario'),
						  'clave' => $this->session->userdata('s_clave'),
						  'email' => $this->session->userdata('s_email'),
								   'foto' => $this->session->userdata('s_foto'));

					$this->load->view('MasterPage/head');
					$this->load->viewi('usuario/imprimirFactura',$data);
				   }else{redirect('Administrador/cpanel');}
			}else{redirect('Login');}
			# code...
		}
	
	public function prueba()
		{

			$this->load->view('prueba/prueba');

		}

	}

?>