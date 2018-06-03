<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

class Mfactura extends CI_Model 
  {

  		function __construct()
		{
			parent::__construct();
		}
	    public function buscar($id)
	    {
	    	$parametro = $this->db->get_where('factura',array('idFactura'=>$id));

	        return $parametro->result();
	    }
	    public function listar() //lista la tabla factura
	    {
	    	$parametro = $this->db->get('factura');

	        return $parametro->result();
	    }

	    public function ver() //ve la factura completa con toda lainformación que describe una fatura
	    {
	    		$this->db->select('u.NombreUsu, e.Nombre, m.NombreFantasia');
				$this->db->from('factura fac');
				$this->db->join('detalle_factura dfa','fac.idFactura = dfa.PK_idFactura');
				$this->db->join('pedido ped','ped.idPedido = dfa.PK_idPedido');
				$this->db->join('detalle_pedido dpe','dpe.Pk_idPedido = ped.idPedido');
				$this->db->join('producto pro','pro.idProductos = dpe.PK_idProductos');
				$this->db->join('categoria cat','cat.idCategoria = pro.PK_idCategoria');
				$this->db->join('usuario usu','usu.idUsuario = ped.PK_idUsuario');
				$this->db->join('encargado enc','enc.PK_idUsuario = usu.idUsuario');
				$this->db->join('contacto con','con.PK_idEncargado = enc.idEncargado');
				$this->db->join('empresa emp','emp.idEmpresa = con.PK_idEmpresa');
				$this->db->join('asignar_direccion adi ','adi.PK_idEmpresa = emp.idEmpresa');
				$this->db->join('direccion dir','dir.idDireccion = adi.PK_idDireccion');
				$this->db->join('tipo_direccion tdi','tdi.idTipoDireccion = adi.PK_idTipoDireccion');
			    $this->db->where('tdi.Tipo',"Factura");


			$parametro = $this->db->get('factura');

	        return $parametro->result();
	    }

	    public function guardar($parametro)
	    {
	    	$campos = array(
					'fecha_entrega'		    => $parametro['FechaEntrega'],
					'fecha_facturacion'	    => $parametro['FechaFacuracion'],
					'valorNeto'  		    => $parametro['ValorNeto']
					 );
			$this->db->insert('factura',$campos);

	   		return $this->db->insert_id();
	    }

	    public function generarAsociacion($parametro) // Se genera el detalle de la factura con el pedido 
	    {
	    	$campos = array(
					'fecha_entrega'		    => $parametro['FechaEntrega'],
					'fecha_facturacion'	    => $parametro['FechaFacuracion'],
					'valorNeto' 		    => $parametro['ValorNeto']
					 );
			$this->db->insert('encargado',$campos);

	   		return $this->db->insert_id();
	    }

	    public function eliminar()
	    {
	    	# code...
	    }
	    public function editar()
	    {
	    	# code...
	    }
  }
  ?>