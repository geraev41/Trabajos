
<?php
        $servidor ="localhost";
        $usuario = "root";
        $clave = "";
        $base_datos = "crud";
        $conexion= mysqli_connect($servidor, $usuario, $clave, $base_datos);
        return $conexion;
?>