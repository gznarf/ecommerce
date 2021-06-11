<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
    
    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    public function login(){
        if($this->session->userdata('logged_in')){
            redirect('dashboard_view');
        }else{
        $data = array('titulo' => "Login");
        $this->load->view('front/header', $data);
        $this->load->view('front/menu');
        $this->load->view('usuario/login_view');
        $this->load->view('front/footer');
        }
    }

    public function ingresar(){
        //Reglas de validación
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
        $this->form_validation->set_rules('password', 'Contraseña','trim|required|callback_valid_login');
        //Mensajes en caso de error
        $this->form_validation->set_message('required', 'el campo %s es requerido');
        $this->form_validation->set_message('valid_login','El usuario o contraseña son incorrectos');
        $this->form_validation->set_message('is_unique', 'El campo %s ya existe');
        //Forma en que muestra los mensajes de error
        $this->form_validation->set_error_delimiters('<ul> <li>', '</li></ul>');
        if ($this->form_validation->run() == FALSE){
        //En caso de que falle la validacion vuelve a cargar la pagina de Login
            $this->login();
        }else{
            redirect('dashboard_view');
        }
        //Pagina que carga despues de loguearse edirect(current_url()); ---> Vuelve a la pagina que estaba antes de loguearse
    }


    public function valid_login($password){
        //Se validaron los campos exitosamente. Se valida con  la base de datos
        $username = $this->input->post('usuario');
        //Consulta a la base$password);
        $result = $this->login_model->valid_user($username, sha1($password));
        if($result){
        //Si el resultado es correcto lo asigna a la variable session
        foreach($result as $row){
            $sess_array = array('id' => $row->id,
            'nombre' => $row->nombre,
            'apellido' => $row->apellido,
            'email' => $row->email,
            'usuario' => $row->usuario,
            'perfil_id' => $row->perfil_id);
            $this->session->set_userdata('logged_in', $sess_array);
        }return TRUE;
            }else{//Sino devuelve que los datos no coinciden
            $this->form_validation->set_message('check_database', '<div class="alert alert-danger">Usuario o Contraseña invalido</div>');
            return false;
            }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}