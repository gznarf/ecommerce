<?php 
defined('BASEPATH') OR exit('No directs cript access allowed');

class Producto_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function insertar_producto($producto){
        $this->db->insert('productos', $producto);
    }

    public function seleccionar_categoria(){
        $this->db->select('*');
        $this->db->from('categorias');
        $categorias = $this->db->get();
        return $categorias->result(); 
    }

    public function seleccionar_producto($id){
        $query = $this->db->get_where('productos', array('id_producto' => $id),1);
        if($query->num_rows() == 1){
            return $query;
        }else{
            return FALSE;
        }
    }

    public function mostrar_productos(){
        $query = $this->db->get_where('productos', array('estado_producto' => 1));
        if($query->num_rows() > 0){
            return $query;
        }else{
            FALSE;
        }
    }

    public function numero_productos(){
        $query = $this->db->count_all('productos');
        return intval($query);
    }

    public function pagination($per_page){
        return $this->db->get('productos', $per_page, $this->uri->segment(3));
    }

    public function listar_productos(){
        $this->db->get('productos');
		$this->db->join('categorias', 'categorias.id_categoria = productos.id_categoria');
		$query = $this->db->get('productos');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }

    public function actualizar_producto($id_producto, $producto){
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->update('productos', $producto);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminar_producto($id_producto, $data){
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->update('productos', $data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function activar_producto($id_producto, $data){
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->update('productos', $data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function actualizar_productos($data,$id_producto){
        $this->db->where('id_producto',$id_producto);
        $query = $this->db->update('productos',$data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function edit_producto($id){
        $query = $this->db->get_where('productos', array('id_producto' => $id),1);                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

}
/*  

$this->db->select('*');
        $this->db->from('categorias');
        $this->db->join('productos', 'categorias.id_categoria = productos.id_categoria');
        $result = $this->db->get();
        foreach ($result->result() as $row){
            $categorias[$row->id_categoria] = $row->categoria_prod;
            }
        return $categorias; 







foreach ($result->result() as $row){
            $categorias[$row->id_categoria] = $row->categoria_prod;
            }
        return $categorias; 
        
        function detalle($id = NULL){
   $this->db->select('*');
   $this->db->from('usuarios');
   $this->db->join('ficha', 'usuarios.id = ficha.id');
   $this->db->where('usuarios.id',$id);
   return $this->db->get()->row_array();
}

        */ 