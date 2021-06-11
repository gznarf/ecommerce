<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    function __construct() {

	}

	public function crear_usuario($usuario){
		$this->db->insert('usuarios', $usuario);
		return $this->db->insert_id();
	}

	public function obtenerClientes(){
        $consulta = $this->db->get('usuarios');

         if($consulta->num_rows()>0){            
            return $consulta;            
        }else{
            return false;
        } 
     }
}
