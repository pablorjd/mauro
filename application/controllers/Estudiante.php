<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Sistema/Estudiante/templates/header');		
                $this->load->view('Sistema/Estudiante/templates/navbar');		
                //$this->load->view('Sistema/Estudiante/templates/menu-lateral');		
		$this->load->view('Sistema/Estudiante/index');
                $this->load->view('Sistema/Estudiante/templates/footer');
                
	}
         public function redirigir($pagina)
	{
		$this->load->view('Sistema/Estudiante/'.$pagina);
	}
         public function mensajesPorAlumno($idAlumno)
	{
             $data["mensajes"]=$this->Modelo->mensajesPorAlumno($idAlumno);                
		return $this->load->view('Sistema/Estudiante/mensajes',$data);
	}
        public function anunciosPorAlumno(/*$idAlumno*/)
	{
             $data["anuncios"]=$this->Modelo->anunciosPorAlumno();                
		return $this->load->view('Sistema/Estudiante/anuncios',$data);
	}
        public function citacionesPorAlumno($idAlumno)
	{
             $data["citaciones"]=$this->Modelo->citacionesPorAlumno($idAlumno);                
		return $this->load->view('Sistema/Estudiante/citaciones',$data);
	}
        
}
