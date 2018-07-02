<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mproducto extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}

	  /******************************** Buscar y Listar productos ***********************************/		
	    public function buscarSKU($sku) //busca el producto por el codigo SKU
	    {
	    	$parametro = $this->db->get_where('producto',array('sku'=>$sku));

	        return $parametro->result();
	    }

	    public function buscarNom($nombre) //busca el producto por Nombre
	    {
	    	$parametro = $this->db->get_where('producto',array('Nombre'=>$nombre));

	        return $parametro->result();
	    }

	    public function buscarDis($dispo) //busca el producto por Disponibilidad
	    {
	    	$parametro = $this->db->get_where('producto',array('Disponibilidad'=>$dispo));

	        return $parametro->result();
	    }
 
	    public function getProductos()// Lista todos los productos
	    {

			$this->db->select('p.sku, p.Nombre, p.Precio, p.url_imagen');
			$this->db->from('producto p');

	    	$parametro = $this->db->get('producto');

	    	return $parametro->result();
	    }


	  /**********************************Guardar producto*********************************/
	    public function guardar($parametro)
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->insert('producto',$campos);

	   		return $this->db->insert_id();
	    }

	   /******************************Eliminar el producto******************************/
	    public function eliminarId($idProducto)
	    {
			 $this->db->delete('producto', array('idProducto' => $idProducto));
			 return true;
	    }

	    public function eliminarSku($SKU)
	    {
			 $this->db->delete('producto', array('sku' => $SKU));
			
	    }

	    /******************************Modificar el producto******************************/
	    public function editarSKU($parametro) // ediatar po SKU
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->update('producto', $campos, array('sku' => $parametro['sku']));

	   		return $this->db->insert_id();
	    }
	    public function editarId($parametro) //editar por Id
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Nombre'	    => $parametro['Nombre'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'=> $parametro['url_imagen']
					 );
			$this->db->update('producto', $campos, array('idProducto' => $parametro['idProducto']));

	   		return $this->db->insert_id();
	    }
	    public function editar($parametro) // Editar por nombre
	    {
	    	$campos = array(
					'sku'		    => $parametro['sku'],
					'Descripcion'   => $parametro['Descripcion'],
					'Precio'	    => $parametro['Precio'],
					'PK_idCategoria'=> $parametro['idCategoria'],
					'url_imagen'	=> $parametro['url_imagen']
					 );
			$this->db->update('producto', $campos, array('Nombre' => $parametro['Nombre']));
	   		return $this->db->insert_id();
	    }
  }