<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
    public function __construct(){

        parent::__construct();
    }

    public function buscar_usuario($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$resultados = $this->db->get('usuarios');
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

    function valid_user($username, $password){
        $query = $this->db->get_where('usuarios', array('usuario'=>$username,'password'=>$password), 1);
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;}
    }

    public function getUsuarios(){
		$this->db->where('estado','1');
		$resultados = $this->db->get('usuarios');
		return $resultados->result();
	}
	public function getUsuario($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get('usuarios');
		return $resultado->row();

	}

}