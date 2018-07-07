<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mcategoria');
		$this->load->model('mproducto');
		$this->load->model('mcategoria');
		$this->load->library('session');

	}
		
	public function getProducto()
	{
		echo json_encode($this->mproducto->getProductos());
	}

	public function getProductoById()
	{
		$c = $this->input->post('idProductos');
		echo json_encode($this->mproducto->buscarId($c));	
	}

	public function getProductoCategoria()
	{
		$c = $this->input->post('PK_idCategoria');
		echo json_encode($this->mproducto->buscarPorCategoria($c));
	}	

	public function updateProducto()
	{
		$producto['sku'] 		    = $this->input->post('sku');
		$producto['Nombre']     	= $this->input->post('nombre');
		$producto['Descripcion'] 	= $this->input->post('Descripcion');
		$producto['Precio'] 	    = $this->input->post('Precio');
		$producto['idCategoria'] 	= $this->input->post('idCategoria');
		

		$categoria = $this->mcategoria->buscarId($producto['idCategoria']);

		$categoria = strtolower($categoria);

		$config['upload_path'] = './imagenes/'+$categoria+'/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("url_imagen")) {
            $data['error'] = $this->upload->display_errors();
			// $this->load->view('layout/header');
			// $this->load->view('layout/menu');
			// $this->load->view('vupload',$data);
			// $this->load->view('layout/footer');
		   redirect('Adminitrador','refresh');

        } else {

            $file_info = $this->upload->data();

            $this->crearMiniatura($file_info['url_imagen']);

            $producto['url_imagen'] = $file_info['url_imagen'];

            $this->mproducto->guardar($producto);

            redirect('Adminitrador','refresh');

           
        }
    }

    
    

    function crearMiniatura($filename){
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'imagenes/miniatura/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='uploads/imagenes/thumbs/';
        $config['thumb_marker']='';//captura_thumb.png
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

	    public function subirArchivo(){
		$config['upload_path'] = './uploads/archivos/';
        $config['allowed_types'] = 'pdf|xlsx|docx';
        $config['max_size'] = '20048';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
            $data['errorArch'] = $this->upload->display_errors();
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vupload',$data);
			$this->load->view('layout/footer');
        } else {

            $file_info = $this->upload->data();
           
            $titulo = $this->input->post('titImagen');
            $archivo = $file_info['file_name'];
            $subir = $this->mupload->subir($titulo,$archivo);      
            $data['estado'] = "Archivo subido.";
            $data['archivo'] = $archivo;
			$data['error'] = "";
			$data['errorArch'] = "";

            $this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vupload', $data);
			$this->load->view('layout/footer');
            
        }
    }

    public function downloads($name){
         
       $data = file_get_contents('./uploads/archivos/'.$name); 
       force_download($name,$data); 
     
	}

}
?>