<?php
    function mostrar_estudiantes($filas){
        shell_exec('conexion.php'); 
        //include ('conexion.php'); 
        $con = getConexion(); 
        $sql = "SELECT COUNT(*)nombre from students"; 
        $result= $con->query($sql); 
        $fila = mysqli_fetch_assoc($result);
        $cant = $fila['nombre']; 
        if($cant < $filas || $filas < 0){
            return false;    
        }

        $sql2 = "SELECT * FROM students LIMIT 0, $filas"; 
        $res= $con->query($sql2); 

        if($con->connect_errno){
            $con->close(); 
            return false; 
        }
        $con->close();
        return $res->fetch_all(); 

    }

?>