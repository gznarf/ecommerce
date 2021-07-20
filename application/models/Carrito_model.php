<?php
class Carrito_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	public function insert_venta($data){
		$this->db->insert('cabecera_ventas', $data);
		$id = $this->db->insert_id();
		//isset — Determina si una variable está definida y no es NULL
		return (isset($id)) ? $id : FALSE;
	}
		
	public function insert_venta_detalle($data){
			$this->db->insert('detalle_ventas', $data);
	}

	public function mostrar_detalles(){
		$this->db->get('detalle_ventas');
		$this->db->join('productos', 'detalle_ventas.id_producto = productos.id_producto');
		$this->db->join('cabecera_ventas', 'cabecera_ventas.id_ventas = detalle_ventas.id_ventas');
		$query = $this->db->get('detalle_ventas');
		return $query->result();
	}

	public function insertar_cliente($cliente){
		$this->db->insert('clientes', $cliente);
		return $this->db->insert_id();
	}

	public function mostrar_compra($id){
		$this->db->join('productos', 'detalle_ventas.id_producto = productos.id_producto');
		$this->db->join('cabecera_ventas', 'cabecera_ventas.id_ventas = detalle_ventas.id_ventas');
		$this->db->join('clientes', 'clientes.id_cliente = detalle_ventas.id_cliente');
		$query = $this->db->get('detalle_ventas' ,$id);
		return $query->result();
	}

	public function mostrar_cliente(){
		$this->db->get('clientes');
		return $query->result();
	}
}
