<?php 
class Carrito_controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		//cargo el modelo pertinente, en este caso el modelo de producto
		$this->load->model('Carrito_model');
		$this->load->model('Producto_model');
		//contrrola que haya una sesión iniciada y que el perfil sea 1 que corresponde a un usuario no administrador
		if(!$this->session->userdata('logged_in') ) {
				redirect(base_url());
			}
	}

	public function mostrar_carrito(){
			$titulo = array('titulo' => 'Carrito');
			$this->load->view('front/header',$titulo);
			$this->load->view('usuario/menu');
			$this->load->view('carrito/mostrar_carrito');
			$this->load->view('front/footer');
		}
		

	public function agregar(){
		$data = array(
			'id'      => $this->input->post('id_producto'),
			'qty'     => 1,
			'price'   => $this->input->post('precio'),
			'name'    => $this->input->post('titulo'),
			'coupon'  => $this->input->post('copete'),
			'imagen'  => $this->input->post('imagen'),
		);
	
		$this->cart->insert($data);
		redirect('mostrar_carrito');
	}


	public function actualizar_carrito(){
		$data = $this->input->post();

		$this->cart->update($data); 
		redirect('mostrar_carrito','refresh');
	}

	public function eliminar_carrito(){
		$this->cart->destroy();
		redirect('mostrar_carrito');
	}

	public function quitar_carrito($rowid){
		$this->cart->remove($rowid);
		redirect('mostrar_carrito');
	}


	public function comprar_carrito(){
		$session_data = $this->session->userdata('logged_in');
		$data['id_usuario'] = $session_data['id_usuario'];
		$total = $this->cart->total();		
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'id_usuario' 	=> $data['id_usuario'],
			'total_ventas'	=> $total
		);	

		$cliente = array(
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'direccion' => $this->input->post('direccion'),
			'ciudad' => $this->input->post('ciudad'),
			'cod_postal' => $this->input->post('cod_postal')
		);
		$orden = $this->Carrito_model->insertar_cliente($cliente);	
		

		$venta_id = $this->Carrito_model->insert_venta($venta); //inserta en la tabla venta_cabecera	
	
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$detalle_venta = array(
					'id_ventas' 		=> $venta_id,
					'id_cliente'	=> $orden,
					'id_producto' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);
            
            	$cust_id = $this->Carrito_model->insert_venta_detalle($detalle_venta); //inserta en la tabla venta_detalle

            	//Descuenta del stock y lo guarda en la base de datos
            	$producto = $this->Producto_model->edit_producto($item['id']);
            	foreach ($producto->result() as $row) 
				{
					$stock = $row->stock;
				}

            	$stock_edit = $stock - 	$item['qty'];

            	$stock_nuevo = array(
            		'stock'	=> $stock_edit
            		);

            	$modifica = $this->Producto_model->actualizar_productos($stock_nuevo,$item['id']);

			endforeach;
		endif;
	    

		$data = array('titulo' => 'Compra Finalizada');
		$id_venta = $this->uri->segment(2);
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$detalles['detalles'] = $this->Carrito_model->mostrar_compra($id_venta);
        $this->load->view('front/header', $data);
		$this->load->view('usuario/menu', $data); 
		$this->load->view('carrito/compra_realizada',$detalles);
		$this->load->view('front/footer');

		$final = $this->cart->destroy();
	}


	public function finalizar_compra(){
		$this->load->view('front/header');
		$this->load->view('usuario/menu'); 
		$this->load->view('carrito/finalizar_compra');
		$this->load->view('front/footer');
	}

	public function verificar_compra(){
		$this->form_validation->set_rules('email', 'Ingrese el código del producto', 'required');
		$this->form_validation->set_rules('telefono', 'Ingrese nombre del producto', 'required|numeric');
		$this->form_validation->set_rules('nombre', 'Seleccione una categoria', 'required');
		$this->form_validation->set_rules('apellido', 'Ingrese una breve ddescripción', 'required');
		$this->form_validation->set_rules('direccion', 'Ingrese descripción', 'required');
		$this->form_validation->set_rules('ciudad', 'Ingrese la marca del producto', 'required');
		$this->form_validation->set_rules('cod_postal', 'Ingrese el precio del producto', 'required|numeric');

		$this->form_validation->set_message('required', ' %s *campo obligatorio');
		$this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');


				if($this->form_validation->run() == FALSE){
                    $this->finalizar_compra();
				}else{
					$this->comprar_carrito();
				}
	}

	public function compra_detalles(){
		$session_data = $this->session->userdata('logged_in');
		$data['id_usuario'] = $session_data['id_usuario'];
		$data = array('titulo' => 'Detalles de venta');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$detalles['detalles'] = $this->Carrito_model->mostrar_detalles();
        $this->load->view('front/header', $data);
		$this->load->view('usuario/menu', $data); 
		$this->load->view('usuario/dashboard_view'); 
		$this->load->view('carrito/compra_detalles',$detalles);
		$this->load->view('front/footer');
	}


}
/*	function muestra_compra(){
		
		$data = array('titulo' => 'Confirmar compra');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['apellido'] = $session_data['apellido'];
		$data['email'] = $session_data['email'];
		$this->load->view('front/head_view', $data);
		$this->load->view('front/menu_view2', $data);
		$this->load->view('front/navbar_view');
		$this->load->view('partes/compra_view', $data);
		$this->load->view('front/footer_view');
	} */