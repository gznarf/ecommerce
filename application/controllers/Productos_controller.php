<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->model('Producto_model');
        $this->load->library('pagination');
        $this->load->config('pagination');

		}

		public function cargar_productos(){
            $categorias['categorias'] = $this->Producto_model->seleccionar_categoria();
			$data = array('titulo' => 'Agregar productos');
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('productos/cargar_productos', $categorias);
			$this->load->view('front/footer');
		}

		public function registrar_producto(){
			$this->form_validation->set_rules('cod_producto', 'Ingrese el código del producto', 'required|is_unique[productos.cod_producto]');
			$this->form_validation->set_rules('titulo', 'Ingrese nombre del producto', 'required');
            $this->form_validation->set_rules('categoria', 'Seleccione una categoria', 'required');
            $this->form_validation->set_rules('copete', 'Ingrese una breve ddescripción', 'required');
            $this->form_validation->set_rules('descripcion', 'Ingrese descripción', 'required');
            $this->form_validation->set_rules('marca', 'Ingrese la marca del producto', 'required');
            $this->form_validation->set_rules('precio', 'Ingrese el precio del producto', 'required|numeric');
            $this->form_validation->set_rules('stock', 'Ingrese el stock disponible', 'required|numeric');
            $this->form_validation->set_rules('filename', 'Ingrese la imagen', 'callback_image_upload');

			$this->form_validation->set_message('required', ' %s *campo obligatorio');
            $this->form_validation->set_message('is_unique', 'El código de producto ya existe');
            $this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');


				if($this->form_validation->run() == FALSE){
                    $this->cargar_productos();
				}else{
					$this->agregar_producto();
				}
		}

		public function image_upload(){

            if(empty($_FILES['filename']['name'])){
                $this->form_validation->set_message('image_upload', 'Debe seleccionar una imagen');
                    return false;
                }else{
                    return true;
            }

        }
        
        public function agregar_producto(){

            $config = 
            [
                'upload_path'   => './uploads/',
                'allowed_types' => 'jpg|jpeg|png',
                'remove_spaces' => TRUE,
                'max_size'      => 2048, 
            ];

            $this->load->library('upload', $config);

            
            if($this->upload->do_upload('filename')){
                
                $producto = array (
                'cod_producto'  =>$this->input->post('cod_producto'),
                'titulo'        =>$this->input->post('titulo'),
                'id_categoria'  =>$this->input->post('categoria'),
                'copete'        =>$this->input->post('copete'),
                'descripcion'   => $this->input->post('descripcion'),
                'marca'         => $this->input->post('marca'),
                'precio'        => $this->input->post('precio'),
                'stock'         => $this->input->post('stock'),
                'imagen'         => $_FILES['filename']['name'],
                'estado_producto' => 1
                );
                    $this->Producto_model->insertar_producto($producto);
                        echo 'El producto fue dado de alta con exito';
                        return TRUE;
                    }else{
                        $this->form_validation->set_message('filename', 'Debe seleccionar una imagen');
                        $this->cargar_productos();
                        return false;
                    }
        }

        public function listado_productos(){
            
            $productos['productos'] = $this->Producto_model->listar_productos();
            $data = array('titulo' => 'Listado de productos');
            $this->load->view('front/header',$data);
            $this->load->view('front/menu');
            $this->load->view('productos/listado_productos', $productos);
            $this->load->view('front/footer');
        }

        public function mostrar_productos(){
            
            $config['base_url'] = base_url().'productos_controller/mostrar_productos';
            $config['total_rows'] = $this->Producto_model->numero_productos(); 
            $config['uri_segment'] = 3;
            $config['num_links'] = 5;
            $this->pagination->initialize($config);

            $productos['productos'] = $this->Producto_model->mostrar_productos();
            $productos['row'] = $this->Producto_model->pagination($config);
            $productos['pagination'] = $this->pagination->create_links();
            $data = array('titulo' => 'Productos');

            $this->load->view('front/header',$data);
            $this->load->view('front/menu');
            $this->load->view('productos/mostrar_productos', $productos);
            $this->load->view('front/footer');
        }

        public function editar_producto(){
            
            $id = $this->uri->segment(2);
            $producto = $this->Producto_model->seleccionar_producto($id);

            if($producto != FALSE){

            foreach($producto->result() as $row){
                $id_producto    = $row->id_producto;
                $cod_producto   = $row->cod_producto;
                $titulo         = $row->titulo;
                $id_categoria   = $row->id_categoria;
                $copete         = $row->copete;
                $descripcion    = $row->descripcion;
                $marca          = $row->marca;
                $precio         = $row->precio;
                $stock          = $row->stock;
                $imagen         = $row->imagen;
            }

            $data = array(
                'id_producto' => $id_producto,
                'cod_producto' => $cod_producto,
                'titulo' => $titulo,
                'id_categoria' => $id_categoria,
                'copete' => $copete,
                'descripcion' => $descripcion,
                'marca' => $marca,
                'precio' => $precio,
                'stock' => $stock,
                'imagen' => $imagen
            );
            
            }else{
                return FALSE;
            }
            
            $data['categorias'] = $this->Producto_model->seleccionar_categoria();
            $titulo = array('titulo' => 'Editar Productos');
            $this->load->view('front/header', $titulo);
            $this->load->view('front/menu');
            $this->load->view('productos/editar_producto', $data);
            $this->load->view('front/footer');


        }

        public function verifica_actualizar(){

            $this->form_validation->set_rules('cod_producto', 'Ingrese el código del producto', 'required');
			$this->form_validation->set_rules('titulo', 'Ingrese nombre del producto', 'required');
            $this->form_validation->set_rules('categoria', 'Seleccione una categoria', 'required');
            $this->form_validation->set_rules('copete', 'Ingrese una breve ddescripción', 'required');
            $this->form_validation->set_rules('descripcion', 'Ingrese descripción', 'required');
            $this->form_validation->set_rules('marca', 'Ingrese la marca del producto', 'required');
            $this->form_validation->set_rules('precio', 'Ingrese el precio del producto', 'required|numeric');
            $this->form_validation->set_rules('stock', 'Ingrese el stock disponible', 'required|numeric');
            $this->form_validation->set_rules('filename', 'Ingrese la imagen', 'callback_image_reupload');

			$this->form_validation->set_message('required', ' %s *campo obligatorio');
            $this->form_validation->set_message('is_unique', 'El código de producto ya existe');
            $this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');


				if($this->form_validation->run() == FALSE){
                    $this->editar_producto();
				}else{
					$this->actualizar_producto();
				}
		}

        public function image_reupload(){

            if(empty($_FILES['filename']['name'])){
                $this->form_validation->set_message('image_reupload', 'Debe seleccionar una imagen');
                    return false;
                }else{
                    return true;
            }

        }

        public function actualizar_producto(){

            $id = $this->uri->segment(2);

            $config = 
            [
                'upload_path'   => './uploads/',
                'allowed_types' => 'gif|jpg|JPEG|png',
                'remove_spaces' => TRUE,
                'max_size'      => 2048, 
            ];

            $this->load->library('upload', $config);

            
            if($this->upload->do_upload('filename')){

            $producto = array(

                'cod_producto'      => $this->input->post('cod_producto'),
                'titulo'            => $this->input->post('titulo'),
                'id_categoria'      => $this->input->post('categoria'),
                'copete'            => $this->input->post('copete'),
                'descripcion'       => $this->input->post('descripcion'),
                'marca'             => $this->input->post('marca'),
                'precio'            => $this->input->post('precio'),
                'stock'             => $this->input->post('stock'),
                'imagen'            => $_FILES['filename']['name'],
                'estado_producto'   => 1
            );

            $this->Producto_model->actualizar_producto($id, $producto);
                        echo 'El producto fue dado de alta con exito';
                        return TRUE;
                    }else{
                        $this->form_validation->set_message('filename', 'Debe seleccionar una imagen');
                        $this->editar_producto();
                        return false;
                    }
        
        }
		
        public function eliminar_producto(){
            $id_producto = $this->uri->segment(2);
            $data = array(
                'estado_producto' => 0
            );
            $this->Producto_model->eliminar_producto($id_producto, $data);
            redirect('listado_productos', 'refresh');
        }

        public function activar_producto(){
            $id_producto = $this->uri->segment(2);
            $data = array(
                'estado_producto' => 1
            );
            $this->Producto_model->activar_producto($id_producto, $data);
            redirect('listado_productos', 'refresh');
        }


}
