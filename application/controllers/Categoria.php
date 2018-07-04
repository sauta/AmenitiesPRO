<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('mcategoria');
		$this->load->library('session');
	}

	public function getCategorias()
	{
		$parametro = $this->mcategoria->getCategoria();
		echo json_encode($parametro);
	}

	public function deleteCategoria()
	{
		$id = $this->input->post('idCategoria');
		if($this->mcategoria->eliminarId($id))
		{
			redirect('Adminitrador/categoria');
		}
	}

	public function setCategoria()
	{
		echo '<script language="javascript">alert("report noob ql");</script>'; 
	}
}
?>