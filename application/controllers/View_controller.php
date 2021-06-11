<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {
    function __construct() {
		parent::__construct();
		
		}
		public function index(){
			$data = array('titulo' => 'Ferretex');
			$this->load->view('front/header',$data);
			$this->load->view('front/menu');
			$this->load->view('front/body');
			$this->load->view('front/footer');
		}
       
		public function nosotros(){
			$data = array('titulo' => 'Quienes Somos');
			$this->load->view('front/header',$data);
			$this->load->view('front/menu');
			$this->load->view('nosotros');
			$this->load->view('front/footer');
		}

		public function terminos(){
			$data = array('titulo' => 'Términos y condiciones');
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('terminos');
			$this->load->view('front/footer');
		}

		public function comercializacion(){
			$data = array('titulo' => "Comercialización");
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('comercializacion');
			$this->load->view('front/footer');
		}

		public function contacto(){
			$data = array('titulo' => "Contacto");
			$this->load->view('front/header', $data);
			$this->load->view('front/menu');
			$this->load->view('contacto');
			$this->load->view('front/footer');
		}

		public function dashboard_view(){
			$data = array('titulo' => "Dashboard");
			$this->load->view('front/header', $data);
			$this->load->view('usuario/menu');
			$this->load->view('usuario/dashboard_view');
			$this->load->view('front/footer');
		}

		public function productos(){
			$data = array('titulo' => 'productos');
			$this->load->view('front/header');
			$this->load->view('usuario/menu');
			$this->load->view('productos/cargar_productos');
			$this->load->view('front/footer');
		}
}
