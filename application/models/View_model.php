<?php 
defined('BASEPATH') OR exit('No directs cript access allowed');

class View_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function productos_destacados(){
        $this->db->limit(3);
        $query = $this->db->get('productos');
        return $query->result();
    }
}