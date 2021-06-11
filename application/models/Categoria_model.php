<?php 
defined('BASEPATH') OR exit('No directs cript access allowed');

class Categoria_model extends CI_Model{
    function __construct(){

    }

    public function crear_categoria($categoria){
        $this->db->insert('categorias', $categoria);
        return $this->db->insert_id();
    }

}