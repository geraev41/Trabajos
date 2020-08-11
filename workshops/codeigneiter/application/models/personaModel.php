<?php
    class PersonaModel extends CI_model{
        public function __construct(){
            $this->load->database(); 
        }

        public function registro($arrayDatos){
            return $this->db->insert("persona",$arrayDatos); 
        }
        public function mostrar_usuarios(){
            return $this->db->get("persona")->result(); 
        }

        public function obtener_usuario($id){
            $this->db->select('*');
            $this->db->from('persona');
            $this->db->where('id', $id);
            $result = $this->db->get();
            return $result->result(); 
        }

        public function modificar($id,$arrayDatos){
            $this->db->where('id',$id);
           return $this->db->update('persona',$arrayDatos);
        }

        public function eliminar($id){
            $this->db->where('id',$id);
            return $this->db->delete('persona'); 
        }
    }

?>