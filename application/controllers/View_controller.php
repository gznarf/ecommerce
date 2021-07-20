<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		$this->load->model('View_model');
		
		}
		public function index(){
			$session_data = $this->session->userdata('logged_in');
			$destacados['destacados'] = $this->View_model->productos_destacados();

			if($session_data){
			$data = array('titulo' => 'Ferretex');
			$this->load->view('front/header',$data);
			$this->load->view('usuario/menu');
			$this->load->view('front/body', $destacados);
			$this->load->view('front/footer');
			}else{
			$data = array('titulo' => 'Ferretex');
			$this->load->view('front/header',$data);
			$this->load->view('front/menu');
			$this->load->view('front/body', $destacados);
			$this->load->view('front/footer');
			}
		}
       
		public function nosotros(){
			$session_data = $this->session->userdata('logged_in');

			if($session_data){
			$data = array('titulo' => 'Quienes Somos');
			$this->load->view('front/header',$data);
			$this->load->view('usuario/menu');
			$this->load->view('nosotros');
			$this->load->view('front/footer');
		}else{
			$data = array('titulo' => 'Quienes Somos');
			$this->load->view('front/header',$data);
			$this->load->view('front/menu');
			$this->load->view('nosotros');
			$this->load->view('front/footer');
		}
	}

		public function terminos(){
			$session_data = $this->session->userdata('logged_in');

			if($session_data){
			$data = array('titulo' => 'Términos y condiciones');
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
			$this->load->view('terminos');
			$this->load->view('front/footer');
		}else{
			$data = array('titulo' => 'Términos y condiciones');
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('terminos');
			$this->load->view('front/footer');
		}
	}

		public function comercializacion(){
			$session_data = $this->session->userdata('logged_in');
			if($session_data){
			$data = array('titulo' => "Comercialización");
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
			$this->load->view('comercializacion');
			$this->load->view('front/footer');
		}else{
			$data = array('titulo' => "Comercialización");
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('comercializacion');
			$this->load->view('front/footer');
		}
	}

		public function contacto(){
			$session_data = $this->session->userdata('logged_in');

			if($session_data){
			$data = array('titulo' => "Contacto");
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
			$this->load->view('contacto');
			$this->load->view('front/footer');
		}else{
			$data = array('titulo' => "Contacto");
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('contacto');
			$this->load->view('front/footer');
		}
	}

	public function dashboard(){
		$session_data = $this->session->userdata('logged_in');
		if($session_data['perfil_id'] == 1){
		$data = array('titulo' => 'Administrar');
		$this->load->view('front/header', $data);
		$this->load->view('usuario/menu');
		$this->load->view('usuario/dashboard_view', $data);
		$this->load->view('usuario/dashboard');
		$this->load->view('front/footer');
	}else{
		redirect('mostrar_productos');
	}
}

}
