<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_Model {
    function __construct() {

	}

	public function insertar_consultas($consulta){
		$this->db->insert('consultas', $consulta);
		return $this->db->insert_id();
	}

	public function listar_consultas(){
        $consulta = $this->db->get('consultas');

         if($consulta->num_rows()>0){            
            return $consulta;            
        }else{
            return false;
        } 
     }
     
     public function seleccionar_usuario($id){
        $query = $this->db->get_where('usuarios', array('id_usuario' => $id),1);
        if($query->num_rows() == 1){
            return $query;
        }else{
            return FALSE;
        }
    }
}
