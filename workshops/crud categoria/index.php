
<?php
        $conexion = include ('conexion.php'); 
        if($conexion){
            $sql = 'SELECT * FROM categoria';
            $result = $conexion->query($sql);
            $categorias = $result->fetch_all();
        }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>


</head>
<body>
<section class="section">
    <form name="Tarea" action="categoria_guardar.php" method="POST">
        <div class="container">
            <div class="columns">
                <div class="column is-half
                is-offset-one-quarter">
                <input  class="input is-medium" type="text" placeholder="Nombre"  name="txtNombre"><br><br>
                <input  class="input is-medium" type="text" placeholder="Descripción" name="txtDescripcion"><br><br>
                <input  class="button is-medium is-danger is-rounded" value="ok" name="btnOk" style="margin-left: 50%;" type="submit" value="ok">
            </div>
            </div>
            <div class="column is-half is-offset-one-quarter">
            <br>
            <h2 class="h2">Lista Categorias </h2>
            <br>
            <table class="table" name="tblCategorias">
               <tr> 
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Eliminar</th>
                   <th style='visibility: hidden;'>id</th>
                </tr>
                <tbody>
                    <?php
                    if(isset($categorias) && !empty($categorias)){
                     foreach($categorias as $categoria){
                             echo "<tr>
                                        <td>".$categoria[1]."</td>
                                        <td>".$categoria[2]."</td>
                                        <td>
                                            <a href='categoria_eliminar.php?id=$categoria[0]'>Eliminar</a>
                                        </td>
                                        <td style='visibility: hidden;'>".$categoria[0]."</td>
                                    </tr>";

                        }
                    }else{
                        echo"<tr>
                            <td>Sin registros</td>
                        </tr>";
                    }
                    ?>                
                </tbody>
            <table>
            </div>
        </div>
    </form>
</section>  
</body>
</html>