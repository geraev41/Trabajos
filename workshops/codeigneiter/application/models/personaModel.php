<?php
    class PersonaModel extends CI_model{
        public function __construct(){
            $this->load->database(); 
        }

        public function registro($arrayDatos){
            return $this->db->insert("persona",$arrayDatos); 
        }
        public function mostrar_datos(){
            return $this->db->get("persona"); 
        }
    }

?>