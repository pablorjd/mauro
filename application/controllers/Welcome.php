<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
          parent::__construct();
        $this->load->model('Modelo');
    
    }
	public function index()
	{
		$this->load->view('login/login');
	}
       
        public function login()
	{
                redirect('/Estudiante/', 'refresh');
	}
	public function mensajesAPP(){
            $data["mensajes"]=$this->Modelo->mensajesAlumno(1); 
		$this->load->view('Sistema/estudiante/templates/header');
		$this->load->view('Sistema/estudiante/templates/navbar');
		//$this->load->view('estudiante/templates/menu-lateral');
		$this->load->view('Sistema/estudiante/mensajes',$data);
		$this->load->view('Sistema/estudiante/templates/footer');
		
	}
         public function crearMensajeAlumno()
	{
             $this->load->view('Sistema/estudiante/templates/header');
		$this->load->view('Sistema/estudiante/templates/navbar');
		//$this->load->view('estudiante/templates/menu-lateral');
		$this->load->view('Sistema/estudiante/crearMensaje');
		$this->load->view('Sistema/estudiante/templates/footer');
	}
}
