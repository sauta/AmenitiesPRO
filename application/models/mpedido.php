<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedidos extends CI_Model 
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
	   	 	$this->db->select('r.Nombre, d.Cantidad, Valor_Pedido');
	   	 	$this->db->from('producto r');
	   	 	$this->db->join('detalle d','d.PK_idProdcuto= r.idProdcuto');
	   	 	$this->db->join('pedido e','d.PK_idPedido = e.idPedido');
	   	 	$this->db->where('r.idProdcuto',$parametro['idProdcuto']);
			$this->db->where('e.idPedido',$parametro['idPedido']);
			
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
					'PK_idUsusario'   => $parametro['idUsuario']
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
  