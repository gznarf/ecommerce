<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->model('Usuario_model');

		}

		public function registrarse(){
			$data = array('titulo' => 'Registrarse');
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('usuario/registrar_view');
			$this->load->view('front/footer');
		}


		public function registrar(){
			$this->form_validation->set_rules('apellido', 'apellido', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_rules('nombre', 'Ingrese su nombre', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuarios.email]');
			$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
			$this->form_validation->set_message('is_unique', 'cliente se encuentra registrado');
			$this->form_validation->set_rules('telefono', 'Ingrese su teléfono', 'required|integer');
			$this->form_validation->set_message('integer', 'El campo %s debe poser solo números enteros');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
			$this->form_validation->set_message('min_length', 'El campo %s de contener como mínimo %d caracteres');
			$this->form_validation->set_rules('passconf', 'Confirmar password', 'trim|required|matches[password]');
			$this->form_validation->set_message('matches','Las contraseñas no coinciden');

				if($this->form_validation->run() == FALSE){
					$this->registrarse();
				}else{
					$this->insertar_usuario();
				}
		}

		public function insertar_usuario(){
			$usuario = array (
				'apellido'=>$this->input->post('apellido'),
				'nombre'=>$this->input->post('nombre'),
				'email'=>$this->input->post('email'),
				'usuario'=>$this->input->post('email'),
				'telefono'=>$this->input->post('telefono'),
				'password'=> sha1($this->input->post('password')),
				'perfil_id'=>2,
				'estado' =>1);
				$this->load->model('Usuario_model');
				$this->Usuario_model->crear_usuario($usuario);
				redirect('login');
		}

		function listado(){
            $data['usuarios'] = $this->Usuario_model->obtenerClientes();
            
        }


}