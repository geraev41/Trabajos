

<?php
 
 eliminarCategoria();
 
 function eliminarCategoria(){
    $id = $_GET['id']; 
    $conexion= require ('conexion.php'); 
    if($conexion){
       $sql = "DELETE FROM categoria WHERE id= ".$id;
        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        header('Location: /index.php?status=success&message=Se elimino con exitó');
    }else{
        header('Location: /index.php?status=success&message=Error de conexión con la base datos');
    }
}


?>