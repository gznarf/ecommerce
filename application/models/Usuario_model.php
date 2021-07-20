<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    function __construct() {

	}

	public function crear_usuario($usuario){
		$this->db->insert('usuarios', $usuario);
		return $this->db->insert_id();
	}

    function obtener_usuarios(){
		$query = $this->db->get_where('usuarios', array('estado_usuario' => 1));

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }

     public function listar_usuarios(){
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return FALSE;
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

    public function actualizar_perfil($id_usuario, $usuario){
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->update('usuarios', $usuario);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function eliminar_perfil($id_usuario, $usuario){
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->update('usuarios', $usuario);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

/*
	function obtener_usuarios(){
		$query = $this->db->get_where('usuarios', array('estado_usuario' => 1));

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	} */