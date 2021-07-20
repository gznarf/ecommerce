<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->model('Consultas_model');

		}

		public function contacto(){
				$data = array('titulo' => 'Consultas');
				$this->load->view('front/header', $data);
				$this->load->view('front/menu');
				$this->load->view('contacto');
				$this->load->view('front/footer');
		}

		public function verificar_contacto(){
			$this->form_validation->set_rules('apellido', 'Ingrese su apellido', 'required');
			$this->form_validation->set_rules('nombre', 'Ingrese su nombre', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('telefono', 'Ingrese su teléfono', 'required|integer');
            $this->form_validation->set_rules('consulta', 'Ingrese su consulta', 'required');

			$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
            $this->form_validation->set_message('integer', 'El campo %s debe poser solo números enteros');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');

				if($this->form_validation->run() == FALSE){
					$this->contacto();
				}else{
					$this->insertar_contacto();
				}
		}

		public function insertar_contacto(){
			$consulta = array (
				'nombre'	=>$this->input->post('nombre'),
                'apellido'  =>$this->input->post('apellido'),
				'email'		=>$this->input->post('email'),
				'telefono'	=>$this->input->post('telefono'),
                'consulta'	=>$this->input->post('consulta'),
				'fecha' 	=> date('Y-m-d H:i:s'),
				'estado_consulta' => 1,
				'registrado' => 'NO'
				);
				$this->Consultas_model->insertar_consultas($consulta);
				redirect('gracias');
            }


		public function verificar_consulta(){
			$this->form_validation->set_rules('apellido', 'Ingrese su apellido', 'required');
			$this->form_validation->set_rules('nombre', 'Ingrese su nombre', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('telefono', 'Ingrese su teléfono', 'required|integer');
            $this->form_validation->set_rules('consulta', 'Ingrese su consulta', 'required');

			$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
            $this->form_validation->set_message('integer', 'El campo %s debe poser solo números enteros');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');

				if($this->form_validation->run() == FALSE){
					$this->consultas();
				}else{
					$this->insertar_consultas();
				}
		}

		public function insertar_consultas(){
			$consulta = array (
				'nombre'	=>$this->input->post('nombre'),
				'apellido'  =>$this->input->post('apellido'),
				'email'		=>$this->input->post('email'),
				'telefono'	=>$this->input->post('telefono'),
				'consulta'	=>$this->input->post('consulta'),
				'fecha' 	=> date('Y-m-d H:i:s'),
				'estado_consulta' => 1,
				'registrado'	=> 'SI'
				);
				$this->Consultas_model->insertar_consultas($consulta);
				redirect('gracias');
			}
			
		public function gracias(){
			$session_data = $this->session->userdata('logged_in');

				if($session_data){
				$data = array('titulo' => 'Gracias por su consulta');
				$this->load->view('front/header',$data);
				$this->load->view('usuario/menu');
				$this->load->view('usuario/gracias');
				$this->load->view('front/footer');
			}else{
				$data = array('titulo' => 'Consultas');
				$this->load->view('front/header', $data);
				$this->load->view('front/menu');
				$this->load->view('usuario/gracias');
				$this->load->view('front/footer');
			}
		}
		
		public function listado(){
            $data['consulta'] = $this->Consulta_model->obtener_consultas();
        }

		public function listado_consultas(){
            
            $consultas['consultas'] = $this->Consultas_model->listar_consultas();
            $data = array('titulo' => 'Listado de consultas');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
			$this->load->view('usuario/dashboard_view');  
            $this->load->view('usuario/listado_consultas', $consultas);
            $this->load->view('front/footer');
        }

		public function listado_consulta(){
            
            $consultas['consultas'] = $this->Consultas_model->listar_consultas();
            $data = array('titulo' => 'Listado de consultas');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
			$this->load->view('usuario/dashboard_view');  
            $this->load->view('usuario/listado_consulta', $consultas);
            $this->load->view('front/footer');
        }

		public function consultas(){
            
            $id = $this->uri->segment(2);
            $usuario = $this->Consultas_model->seleccionar_usuario($id);

            if($usuario != FALSE){
				foreach($usuario->result() as $row){
                $id_usuario = $row->id_usuario;
				$apellido = $row->apellido;
				$nombre = $row->nombre;
				$email = $row->email;
				$telefono = $row->telefono;
				$estado_consulta = 1;
			}

            $data = array(
                'id_usuario' => $id_usuario,
				'apellido' 	 => $apellido,
				'nombre' 	 => $nombre,
				'email'		 => $email,
				'telefono' 	 => $telefono,
            );
            
            }else{
                return FALSE;
            }

            $titulo = array('titulo' => 'Consultas');
            $this->load->view('front/header', $titulo);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/contacto', $data);
            $this->load->view('front/footer');
        }


}