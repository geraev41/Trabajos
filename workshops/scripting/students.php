
<?php
    include ("functions.php"); 
    $filas = $argv[1]; 
    cargarDatos($filas); 
    function cargarDatos($filas){
    $students = mostrar_estudiantes($filas); 
    if(!$students){
        echo ("Datos insuficientes en la base datos o error de conexión..!");
        die(); 
    }else{
    $txt = ""; 
    foreach($students as $student){
        foreach($student as $dato){
            $txt.="$dato,"; 
        }
        $txt.=substr(trim($dato.","), 0, 1)."\n"; 
    }
    echo $txt; 
}
   // xampp\php\php.exe C:web1\Trabajos\workshops\scripting\students.php 2
   //xampp/php/php.exe c/web1/Trabajos/workshops/scripting/students.php 2  git

}

?>