<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model("personaModel"); 
        $this->load->helper(array('form','url')); 

    }
	
	public function index()
	{
		$this->load->view('gui/index');
    }
    public function registrar(){
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $telefono = intval($this->input->post("telefono"));
        $email = $this->input->post("email");
        $datos = ["nombre"=>$nombre, "apellidos"=>$apellidos,"telefono"=>$telefono,"correo"=>$email];
        $result = $this->personaModel->registro($datos);
        if($result){
            $info["msj"] = "Se guardó con exitó";
            $this->load->view("gui/correcto",$info);
        }else{
            $this->index(); 
        }
    }

    public function ver(){
        $info["msj"] = "Ver datos";
        $this->load->view("gui/correcto",$info);
    }
}
?>