<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedido extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}


	    /********************************************Buscadores*****************************************/
	    public function buscar($id)
	    {
	    	# code...
	    }
	    public function buscarDeta($parametro) //busca el detalle la id pedido y la id producto con join
	    {
	   	 	$this->db->select('r.Nombre,r.sku ,  d.Cantidad, d.Subtotal, d.Cargos, d.Descuentos, r.Precio, c.Denominacion ');
	   	 	$this->db->from('producto r');
	   	 	$this->db->join('detalle_pedido d','d.PK_idProducto= r.idProducto');
	   	 	$this->db->join('pedido e','d.PK_idPedido = e.idPedido');
	   	 	$this->db->join('categoria c','r.PK_idCategoria = c.idCategoria');
	   	 	$this->db->where('r.idProducto',$parametro['idProducto']);
			$this->db->where('e.idPedido',$parametro['idPedido']);
			
	        return $parametro->result();
	    }


	    public function buscarDetalle($idProducto,$idPedido)
	    {
	    	$this->db->select('p.Nombre, p.sku ,  dp.Cantidad, dp.Subtotal, dp.Cargos, dp.Descuentos, p.Precio, c.Denominacion ');
	   	 	$this->db->from('producto p');
	   	 	$this->db->join('detalle_pedido dp','dp.PK_idProductos = p.idProductos');
	   	 	$this->db->join('categoria c','p.PK_idCategoria = c.idCategoria');
	   	 	$this->db->join('pedido e','dp.PK_idPedido = e.idPedido');
	   	 	$this->db->where('p.idProductos',$idProducto);
	   	 	$this->db->where('e.idPedido',$idPedido);
			
	        return $parametro->result();
	    }

	    public function listar()
	    {
	    	$parametro = $this->db->get('pedido');

	        return $parametro->result();
	    }
		/********************************************Guardadores******************************************/
		public function guardar($parametro) //se guarda el pedido hecho por le cliente
	    {
	    	$campos = array(
					'Fecha_Emicion'   => $parametro['FechaEmicion'],
					'Valor_Pedido'	  => $parametro['ValorPedido'],
					'PK_idUsuario'   => $parametro['idUsuario']
					 );
		 	$this->db->insert('usuario',$campos);

	   		return $this->db->insert_id();
	    }
		/********************************************Eliminadores******************************************/
	    public function eliminar()
	    {
	    	# code...
	    }
		/********************************************Editadores******************************************/
	    public function generarDetalle_Pedido($parametro)
	    {
	    	$campos = array(
					'Cantidad'        => $parametro['Cantidad'],
					'PK_idPedido'	  => $parametro['idPedido'],
					'PK_idProdcuto'   => $parametro['idfProdcuto']
					 );
		 	$this->db->insert('usuario',$campos);

	   		return $this->db->insert_id();
	   	}
		public function editar()
	    {
	    	# code...
	    }
		/********************************************Validadores******************************************/
	}
  