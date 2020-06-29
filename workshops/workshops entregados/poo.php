<?php
echo("Esto es una prueba");
class Persona{
    public $nombre;
    public $apellidos; 
    public $telefono; 

       
    public function ____construct($nombre, $apellidos, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellidos= $apellidos;
        $this->telefono = $telefono;
    }

    function __get($propieda){
        if(property_exists($this, $propieda)){
            return $this->$propieda; 
        }
    }

}
$persona = new Persona;

    $p=new Persona("Gerardo", "Espinoza Vargas", 12132); 
    echo $persona->nombre;
?>