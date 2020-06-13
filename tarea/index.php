<?php
// Se conecta al servidor
    $servidor ="localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "tarea";
    
    $enlace = mysqli_connect($servidor, $usuario, $clave, $base_datos);
    if(!$enlace){
        echo("Error de conexión con el servidor"); 
    }else{
        echo("Conexión con el servidor<br>"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
</head>
<body>
    <section class="section">
        <form name="Tarea"  action="index.php" method="POST">
        <div class="container">
            <div class="columns">
                <div class="column is-half
                is-offset-one-quarter">
                <input  class="input is-medium" type="text" placeholder="Nombre"  name="txtNombre"><br><br>
                <input  class="input is-medium" type="text" placeholder="Apellido" name="txtApellido"><br><br>
                <input  class="input is-medium" type="text" placeholder="Télefono" name="txtTelefono"><br><br>
                <input  class="input is-medium" type="text" placeholder="Correo electronico" name="txtCorreo"><br><br>
                <input  class="button is-medium is-danger is-rounded" value="ok" name="btnOk" style="margin-left: 50%;" type="submit" value="ok">
            </div>
            </div>
        </form>
        </div>
    </section>  
</body>
</html>

<?php
    //Extrae los datos
        if(isset($_POST['btnOk'])){
                $id = rand(1, 200); 
                $nombre = $_POST["txtNombre"];
                $apellidos = $_POST["txtApellido"]; 
                $telefono= $_POST["txtTelefono"]; 
                $correo = $_POST["txtCorreo"]; 
                $insertDatos = "INSERT INTO persona VALUES('$id', '$nombre','$apellidos','$telefono','$correo')";
                $ejecutarInsert= mysqli_query($enlace, $insertDatos);

                if(!$ejecutarInsert){
                     echo "Error al insertar los datos";
                }else{
                     echo "Inserción completada con éxito";
                }
        }

?>