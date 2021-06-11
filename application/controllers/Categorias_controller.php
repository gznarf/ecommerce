<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->model('Categoria_model');

		}

        public function categorias(){
			$data = array('titulo' => "categorias");
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
			$this->load->view('productos/categorias');
			$this->load->view('front/footer');
		}

        public function registrar_categoria(){
            $this->form_validation->set_rules('categoria_prod', 'categoria_prod', 'required');
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_rules('categoria_prod', 'categoria_prod', 'required|max_length[50]');
			$this->form_validation->set_message('max_length', 'El campo %s debe contener como máximo %d caracteres');
        
            if($this->form_validation->run() == FALSE){
                $this->categorias();
            }else{
                $this->insertar_categoria();
            }
        }

        public function insertar_categoria(){
            $categoria = array(
                'categoria_prod'=>$this->input->post('categoria_prod'),
                'estado_categoria'=>1,
            );
            $this->Categoria_model->crear_categoria($categoria);
            $this->form_validation->set_message('alert' ,'Categoria agregada con exito');
        }
}