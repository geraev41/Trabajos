<?php
    if(isset($_POST['btnOk'])){
        $nombre = $_POST['txtNombre']; 
        $desc = $_POST['txtDescripcion']; 
        if($nombre != "" && $desc != ""){
          guardarCategoria($nombre, $desc);
        } else{
            header('Location: /index.php?status=success&message=Error');
        }
    }

    function guardarCategoria($nombre, $desc){
        $conexion = require ('conexion.php');
        if($conexion){
        $sql = "INSERT INTO `categoria`(`nombre`, `descripcion`) VALUES ('$nombre', '$desc')";
        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        header('Location: /index.php?status=success&message=Se guardo con exitó');
        }else{
            header('Location: /index.php?status=success&message=Error de conexión con la base datos');

        }
    }

   
?>
