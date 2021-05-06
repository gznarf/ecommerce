<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    function __construct() {
		parent::__construct();
		
	}
	//Preparo los datos para guardar en la base, en caso de que pase la validacion
	public function add_user($data){
	$data = array(
		'nombre'=>$this->input->post('nombre',true),
		'apellido'=>$this->input->post('apellido',true),
		'email'=>$this->input->post('email',true),
		'perfil_id'=>$this->input->post('perfil_id',true),
		'username'=>$this->input->post('username',true),
		'password'=>($pass));
		$this->db->insert(‘usuarios', $data);
	}
}
