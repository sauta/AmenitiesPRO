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
		 $usuario['idPremiso']     = 2; //usuario
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

	
		 if($usuario['Clave'] == $usuario[''] ) {

		 	if(!$this->musuario->validarExistencia($usuario)){

		 		$idUsuario = $this->musuario->guardar($usuario); //guardar Usuario
		 		
		 	 if ($idUsuario > 0) 
		 	 { 
		 	 //se valida que la se haya traido la Id del usuario
			 		$encargado['idUsuario'] = $idUsuario;
			 		$idEncargado = $this->mencargado->guardar($encargado); //guardar Encargado
			 		$idEmpresa   = $this->mempresa->guardar($empresa); //guardar Empresa
			 		$idDireccion = $this->mdireccion->guardar($direccion); //guardar Direccion

			 		if ($idEmpresa > 0)
			 			{ if ($idDireccion > 0) 
			 				{ if ($idEncargado > 0) 
			 					{
					 			//se guarda en un array las Id's empresa y encargado que necesita contacto
					 			$contacto['idEmpresa'] = $idEmpresa;
					 			$contacto['idEncargado'] = $idEncargado;
					 			//se guarda en un array las Id's empresa, direccion y tipo de direccion que necesita la asociación de la direccion especifica que existe.
					 			$asociacion['idEmpresa'] = $idEmpresa;
					 			$asociacion['idDireccion']= $idDireccion;
					 			$asociacion['idTipoDireccion'] = 2; // Facturacion por defecto

					 			$idContacto = $this->mcontacto->guardar($contacto); //guardar contacto
					 			$this->mdireccion->generarAsociacion($asociacion); //guardar asociacion
						 			if ($idContacto > 0) {
						 				//se guardó correctamente todo el formulario
						 				$data = array('$mensaje' => 'Se guardó correctamente todo el formulario puede ingresar');
						 				redirect('login',$data);
						 			} else {
						 				//el contacto no se pudo guardar correctamente
						 				$data = array('$mensaje' => 'El contacto no se pudo guardar');
						 				redirect('Registro','refresh', $data);
						 			}
					 		 } else {
					 			$data = array('$mensaje' => 'No se pudo guardar el encargado');
					 			redirect('Registro','refresh', $data);
			 				}
			 			} else {
			 			  	$data = array('$mensaje' => 'No se pudo guardar la direcio');
			 				redirect('Registro','refresh', $data);
			 			}
			 		} else {
			 			//No se pudo guardar la empresa ni/o el encargardo ni/o la direccion
			 			$data = array('$mensaje' => 'No se pudo guardar la empres');
			 			redirect('Registro','refresh', $data);
			 		}

			 	} else  {
			 		//enviar mensaje de que no las clave y repclave son inocrrectas	
			 		$data = array('$mensaje' => 'No se logró registrar el usuario correctamente');
			 		redirect('Registro','refresh', $data);
			 	}

	 		  } else  {
			 		//enviar mensaje de que no las clave y repclave son inocrrectas	
			 		$data = array('$mensaje' => 'No se logró registrar el usuario correctamente por que ya existe uno igual');
			 		redirect('Registro','refresh', $data);
			 	}


			 } else {
		 		//enviar mensaje de que la clave y la reclave son diferentes
		 		$data = array('$mensaje' => 'Clave y reclave diferentes');
		 		redirect('Registro','refresh', $data);
		 	}

	}
}


?>