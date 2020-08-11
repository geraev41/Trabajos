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
           $this->datos(); 
        }else{
            $this->index(); 
        }
    }

    public function datos(){
        $result= $this->personaModel->mostrar_usuarios(); 
        if($result){
            $info['result'] = $result; 
            $this->load->view("gui/correcto",$info);
        }else{
            $info['result'] = "Algo salio mal"; 
        }
    }

    public function editar(){
        $user = $this->personaModel->obtener_usuario($_GET['id']); 
        if($user){
            $info['user'] = $user; 
		    $this->load->view('gui/index',$info);
        }
    }

    public function guardar_cambios(){
        $id = 0; 
        if(isset($_GET['id'])){
            $id = intval($_GET['id']); 
        }
        $nombre = $this->input->post("nombre");
        $apellidos = $this->input->post("apellidos");
        $telefono = intval($this->input->post("telefono"));
        $email = $this->input->post("email");
        $datos = ["nombre"=>$nombre, "apellidos"=>$apellidos,"telefono"=>$telefono,"correo"=>$email];
        $result = $this->personaModel->modificar($id,$datos);
        if($result){
            $this->datos();
        }else{
            $this->index(); 
        }
    }

    public function eliminar(){
        $result = $this->personaModel->eliminar($_GET['id']);
        if($result){
            $this->datos();
        }
    }
}
?>