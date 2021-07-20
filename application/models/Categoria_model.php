<?php 
defined('BASEPATH') OR exit('No directs cript access allowed');

class Categoria_model extends CI_Model{
    function __construct(){

    }

    public function crear_categoria($categoria){
        $this->db->insert('categorias', $categoria);
        return $this->db->insert_id();
    }

    public function listar_categorias(){
        $query = $this->db->get_where('categorias');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
        }
    }

    public function seleccionar_categoria($id){
        $query = $this->db->get_where('categorias', array('id_categoria' => $id),1);
        if($query->num_rows() == 1){
            return $query;
        }else{
            return FALSE;
        }
    }

    public function eliminar_categoria($id_categoria, $data){
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->update('categorias', $data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function activar_categoria($id_categoria, $data){
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->update('categorias', $data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function actualizar_categoria($id_categoria, $categoria){
        $this->db->where('id_categoria', $id_categoria);
        $query = $this->db->update('categorias', $categoria);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}