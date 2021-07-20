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
            $this->load->view('usuario/dashboard_view');
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

        public function listado_categorias(){
            
            $categorias['categorias'] = $this->Categoria_model->listar_categorias();
            $data = array('titulo' => 'Listado de categorias');
            $this->load->view('front/header',$data);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/dashboard_view');
            $this->load->view('productos/listado_categorias', $categorias);
            $this->load->view('front/footer');
        }

        public function eliminar_categoria(){
            $id_categoria = $this->uri->segment(2);
            $data = array(
                'estado_categoria' => 0
            );
            $this->Categoria_model->eliminar_categoria($id_categoria, $data);
            redirect('listado_categorias', 'refresh');
        }

        public function activar_categoria(){
            $id_categoria = $this->uri->segment(2);
            $data = array(
                'estado_categoria' => 1
            );
            $this->Categoria_model->activar_categoria($id_categoria, $data);
            redirect('listado_categorias', 'refresh');
        }
        
        public function editar_categoria(){

            $id = $this->uri->segment(2);
            $categoria = $this->Categoria_model->seleccionar_categoria($id);

            if($categoria != FALSE){

            foreach($categoria->result() as $row){
                $id_categoria = $row->id_categoria;
                $categoria_prod   = $row->categoria_prod;
            }

            $data = array(
                'id_categoria' => $id_categoria,
                'categoria_prod' => $categoria_prod,
            );
            
            }else{
                return FALSE;
            }
            
            $data['categorias'] = $this->Categoria_model->seleccionar_categoria($id);

            $titulo = array('titulo' => 'Editar Categoria');
            $this->load->view('front/header', $titulo);
            $this->load->view('usuario/menu');
            $this->load->view('usuario/dashboard_view');
            $this->load->view('productos/editar_categoria', $data);
            $this->load->view('front/footer');
            
        }
        
        public function verificar_editar($id){
            $id_categoria = $this->uri->segment(2);
            $this->form_validation->set_rules('categoria_prod', 'Modifique la categoria', 'required');

			$this->form_validation->set_message('required', ' %s *campo obligatorio');

				if($this->form_validation->run() == FALSE){
                    $this->editar_categoria();
				}else{
                    $id_categoria = $this->uri->segment(2);

            $categoria = array(
                'categoria_prod' => $this->input->post('categoria_prod'),
               );
                 
                $this->Categoria_model->actualizar_categoria($id_categoria, $categoria);
                        echo 'La categoria fue modificada con exito';
				}
        }

        public function editar_categorias(){

            $id_categoria = $this->uri->segment(2);

            $categoria = array(
                'categoria_prod' => $this->input->post('categoria_prod'),
               );
                 
                $this->Categoria_model->actualizar_categoria($id_categoria, $categoria);
                       redirect('gracias');
        }


        public function gracias(){
            $data = array('titulo' => 'Categoria agregada');
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
            $this->load->view('usuario/dashboard_view');
			$this->load->view('gracias');
			$this->load->view('front/footer');
        }

}