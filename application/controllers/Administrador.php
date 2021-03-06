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

			$pagina = 'usuario/administrador/vpanel';
			$this->cargarPagina($pagina);
			
		}

	public function perfil()
		//perfil del usuario ya sea administrador o cliente de cualquier tipo
		{
			
			$pagina = 'MasterPage/asideLeft';
			$this->cargarPagina($pagina);
				
		}

/*****************************************Estadisticas*********************************************/

	public function estadisticas_de_facturas()
		//estadisticas de las facturas del los clientes que seleccione el administrador
		{

			$pagina = 'usuario/administrador/estadistica/vfactura';
			$this->cargarPagina($pagina);
				
		}

	public function estadisticas_de_pedidos()
		//estadisticas de los pedidos realizados por los clientes y el administrador 
		{
			$pagina = 'usuario/administrador/estadistica/vpedido';
					$this->cargarPagina($pagina);
		}

	public function estadisticas_de_ventas()
		{

			$pagina = 'usuario/administrador/estadistica/vventa';
					$this->cargarPagina($pagina);
		}


		public function estadisticas_de_productos()
		//estadisticas de las facturas del los clientes que seleccione el administrador
		{

			$pagina = 'usuario/administrador/estadistica/vproductos';
			$this->cargarPagina($pagina);
				
		}

/*****************************************Mantenedores*********************************************/

	public function clientes()
		{

			$pagina = 'usuario/administrador/mantenedor/vcliente';
					$this->cargarPagina($pagina);
		}

	public function encargo()
		//de adminitrador mantenedor pedido
		{

			$pagina = 'usuario/administrador/mantenedor/vencargo';
					$this->cargarPagina($pagina);
		}

	public function facturas()
		{

			$pagina = 'usuario/administrador/mantenedor/vfactura';
					$this->cargarPagina($pagina);
		}

	public function productos()
		{

			$pagina = 'usuario/administrador/mantenedor/vproducto';
					$this->cargarPagina($pagina);
		}

		public function categorias()
		{

			$pagina = 'usuario/administrador/mantenedor/vcategoria';
					$this->cargarPagina($pagina);
		}


		public function nota_credito()
		{

			$pagina = 'usuario/administrador/mantenedor/vnotacredito';
					$this->cargarPagina($pagina);
		}



/*****************************************Mensajeria***********************************************/
	
	public function demanda()
		{

			$pagina = 'usuario/administrador/mensajeria/vdemanda';
					$this->cargarPagina($pagina);
		}

	public function envio_de_ofertas()
		{

			$pagina = 'usuario/administrador/mensajeria/voferta';
					$this->cargarPagina($pagina);
		}

	public function reportes()
		{

			$pagina = 'usuario/administrador/mensajeria/vreporte';
					$this->cargarPagina($pagina);
		}

		public function pedido()
		{
			$pagina = 'usuario/cliente/mensajeria/vpedido';
			$this->cargarPagina($pagina);
		}	

		function cargarPagina($pagina)
		{

		 if(isset($_SESSION['s_idUsuario'])){
  		   		if($this->session->userdata('s_permiso')=='Administrador')
				{
			$data = array('empresa' => $this->session->userdata('s_nombreFantasia'),
						  'nombre' => $this->session->userdata('s_nombreEncargado'),
						  'permiso' => $this->session->userdata('s_permiso'),
						  'nombrePerfil' => $this->session->userdata('s_nombreUsuario'),

						  'idEmpresa' => $this->session->userdata('s_idEmpresa'),
						  'idEncargado' => $this->session->userdata('s_idEncargado'),

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
					}else{redirect('Cliente/cpanel');}
			}else{redirect('Login');}
		}

}
 ?>