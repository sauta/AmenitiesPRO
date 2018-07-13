<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller 
{
	

	function __construct()
	{
		parent::__construct();

		$this->load->model('musuario');
		$this->load->model('mempresa');
		$this->load->model('mdireccion');
		$this->load->model('mcontacto');
		$this->load->model('mencargado');
		$this->load->library('session');
	}

	public function index()
	{
	/*	$idRegion    = false;
		$idProvincia = false;
		$idComuna    = false;
		Estas variables existian antes para la busqueda de las regiones, provincias y comunas ahora e encuentra en el archovo js/Direccion.js
		$data = array(
			'regiones'   =>$idRegion   ,
			'provincias' =>$idProvincia,
			'comunas'    =>$idComuna  ,
			'titulo'     => 'Amenities PRO');*/

			$data['titulo'] = 'Amenities PRO';
			$titulo['mensaje'] = 'algo';

		$this->load->view('session/Registro',$data);
	}

	public function registro()
	{

		 $data['titulo'] = 'Amenities PRO';
		//Usuario; entrega de los datos de la vista Rgistro
		 $usuario['NombreUsuario'] = $this->input->post('txtNombreUsuario');
		 $usuario['Clave']         = md5($this->input->post('txtClave'));
		 $usuario['RepClave']      = md5($this->input->post('txtRepClave'));
		 $usuario['idPermiso']     = 2; //usuario
		//Encargado ; entrega de los datos de la vista Rgistro
		 $encargado['NombreEncargado'] = $this->input->post('txtNombreEncargado');
		 $encargado['RutEncargado']    = $this->input->post('txtRutEncargado');
		 $encargado['idCargo']         = 1; //comprador por defecto
		//Empresa; entrega de los datos de la vista Rgistro
		 $empresa['NombreFantasia']     = $this->input->post('txtNombreFantasia');
		 $empresa['RutEmpresa'] 	    = $this->input->post('txtRutEmpresa');
		 $empresa['RazonSocial'] 		= $this->input->post('txtRazonSocial');
		 $empresa['Descripcion']	    = $this->input->post('txtDescripcion');
		 $empresa['idTipoCliente'] 		= 1;
		//Contacto; entrega de los datos de la vista Rgistro
		 $contacto['Email']      = $this->input->post('txtEmail');
		 $contacto['Telefono']   = $this->input->post('txtTelefono');
		 $contacto['Celular']    = $this->input->post('txtCelular');
		//Direccion de faturacion; entrega de los datos de la vista Rgistro
		 $direccion['idComuna']  = $this->input->post('txtComuna');
		 $direccion['Direccion'] = $this->input->post('txtDireccion');

	/********************************validadores****************************************/	
				// $value = '';
				// $determinador = true; //determina si la variable de algun campo está vacio

				// foreach ($usuario as $value) {
				// 	if($value == '' || $value == 0 || $value == null){

				// 		$determinador = false;

				// 	}else{

				// 		$determinador;
				// 	}
				//  }
			// 1.- valida claves
		 	if($usuario['Clave'] == $usuario['RepClave']) 
		 		{
		 	$resultado = $this->musuario->validarExistencia($usuario);
			// 2.- valida existencia
		 	if(!$resultado)
		 		{
		 	$resultado = $this->mencargado->valudarRut($encargado['RutEncargado']);
		 	// 3.- valida rut encargado
			if(!$resultado)
				{
			$resultado = $this->mempresa->validarRut($empresa['RutEmpresa']);
			// 4.- valida rut empresa
			if(!$resultado)
				{
		 	$idUsuario = $this->musuario->guardar($usuario); //guardar Usuario
		 	// 5.- valida si se guardó el usuario	
		 	if ($idUsuario > 0) 
		 		{ 
			$encargado['idUsuario'] = $idUsuario;

			$idEncargado = $this->mencargado->guardar($encargado); //guardar Encargado
			// 6.- valida si se guardó el encargado
			if ($idEncargado > 0)
			 	{
			$contacto['idEncargado'] = $idEncargado;

			$idEmpresa   = $this->mempresa->guardar($empresa); 	   //guardar Empresa
			// 7.- valida si se guardó la empresa
			if ($idEmpresa > 0)
			 	{ 
			$contacto['idEmpresa'] = $idEmpresa;

			$idDireccion = $this->mdireccion->guardar($direccion); //guardar Direccion
			 // 8.- valida si se guardó la direccion
			if ($idDireccion > 0)
				{ 
			//se guarda en un array las Id's empresa, direccion y tipo de direccion que necesita la asociación de la direccion especifica que existe.
			$asociacion['idEmpresa'] = $idEmpresa;
			$asociacion['idDireccion']= $idDireccion;
			$asociacion['idTipoDireccion'] = 2; // Facturacion por defecto

			$idContacto = $this->mcontacto->guardar($contacto); //guardar contacto
			$this->mdireccion->generarAsociacion($asociacion); //guardar asociacion
			// 9.- valida si se guardó el contacto
			if ($idContacto > 0) {
			//se guardó correctamente todo el formulario
			
			$data = array('mensaje' => 'Se guardó correctamente todo el formulario, puede ingresar '+$encargado['NombreEncargado']);
			
			redirect('login',$data);
			// 9.- valida si se guardó el contacto
			} else {
			//el contacto no se pudo guardar correctamente
			$data = array('mensaje' => 'El contacto no se pudo guardar');
			
			redirect('Registro','refresh', $data);
			}
			// 8.- valida si se guardó la direccion
			} else {
			$data = array('mensaje' => 'ERROR! No se pudo guardar la direccion');
			
			redirect('Registro','refresh', $data);
			}
			// 7.- valida si se guardó la empresa
			} else {
			$data = array('mensaje' => 'ERROR! No se pudo guardar la empresa');
			
			redirect('Registro','refresh', $data);
			}
			// 6.- valida si se guardó el encargado
			} else {
			$data = array('mensaje' => 'ERROR! No se pudo guardar el encargado');
			
			redirect('Registro','refresh', $data);
			}
			// 5.- valida si se guardó el usuario
			} else {
			$data = array('mensaje' => 'ERROR! El Usuario no se pudo guardar');
			
			redirect('Registro','refresh', $data);
			}
			// 4.- valida el rut de la empresa
			} else  {
			$data = array('mensaje' => 'ERROR! El rut de la empresa ya existe');
			
			redirect('Registro','refresh', $data);
			}
			//3.- valida el rut del encargado
			} else  {
			$data = array('mensaje' => 'ERROR! El rut del encargado ya existe');

			redirect('Registro','refresh', $data);
			}
			//2.- el usuario ya existe
	 		} else  {
			$data = array('mensaje' => 'ERROR! Ya existe un usuario con ese nombre');

			redirect('Registro','refresh', $data);
			}
			//1.- la clave y reclave son diferentes
			} else {
		 	$data = array('mensaje' => 'ERROR! La clave y re clave no son iguales');
		 	
		 	redirect('Registro','refresh', $data);
		 	}

	}
}


?>