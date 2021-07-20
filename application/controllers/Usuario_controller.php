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
				'estado_usuario' =>1);
				$this->load->model('Usuario_model');
				$this->Usuario_model->crear_usuario($usuario);
				redirect('login');
		}

		public function listado_usuarios(){
            
            $usuarios['usuarios'] = $this->Usuario_model->listar_usuarios();
            $data = array('titulo' => 'Listado de usuarios');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
			$this->load->view('usuario/dashboard_view');  
            $this->load->view('usuario/listado_usuarios', $usuarios);
            $this->load->view('front/footer');
        }

		public function editar_perfil(){
            
            $id = $this->uri->segment(2);
            $usuario = $this->Usuario_model->seleccionar_usuario($id);

            if($usuario != FALSE){
				foreach($usuario->result() as $row){
                $id_usuario = $row->id_usuario;
				$apellido = $row->apellido;
				$nombre = $row->nombre;
				$telefono = $row->telefono;
			}

            $data = array(
                'id_usuario' => $id_usuario,
				'apellido' => $apellido,
				'nombre' => $nombre,
				'telefono' => $telefono,
            );
            
            }else{
                return FALSE;
            }
            
            
            $titulo = array('titulo' => 'Editar Perfil');
            $this->load->view('front/header', $titulo);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/editar_perfil', $data);
            $this->load->view('front/footer');
        }

		public function verificar_perfil(){
			
			$this->form_validation->set_rules('apellido', 'apellido', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_rules('nombre', 'Ingrese su nombre', 'required');
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_rules('telefono', 'Ingrese su teléfono', 'required|integer');
			$this->form_validation->set_message('integer', 'El campo %s debe poser solo números enteros');

				if($this->form_validation->run() == FALSE){
					$this->editar_perfil();
				}else{
					$this->actualizar_perfil();
				}
		}

		public function actualizar_perfil(){

            $id = $this->uri->segment(2);

            $usuario = array(

                'apellido'      => $this->input->post('apellido'),
                'nombre'            => $this->input->post('nombre'),
                'telefono'      => $this->input->post('telefono'),
                
            );

            $this->Usuario_model->actualizar_perfil($id, $usuario);
                        $this->modificado();
                    
        
        }

		public function perfil(){
			$usuarios['usuarios'] = $this->Usuario_model->listar_usuarios();
            $data = array('titulo' => 'Perfil');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/perfil', $usuarios);
            $this->load->view('front/footer');
		}

		public function eliminar_perfil(){
            $id_usuario = $this->uri->segment(2);
            $usuario = array(
                'estado_usuario' => 0
            );
            $this->Usuario_model->eliminar_perfil($id_usuario, $usuario);
            $this->session->sess_destroy();
        	redirect(base_url());
        }

		public function modificado(){
			$data = array('titulo' => 'Perfil');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/modificado');
            $this->load->view('front/footer');
		}
}