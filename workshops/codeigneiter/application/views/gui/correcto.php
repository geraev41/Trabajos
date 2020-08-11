<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correcto</title>
</head>
<body>
    <label><?php 
    if(isset($msj)){
        echo($msj);}?>
    </label>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tbdoy>
            <?php
                if(isset($result)){
                    if(is_array($result)){
                        foreach($result as $r){
                            ?>
                             <tr>
                                <td><?php echo($r->nombre);?></td>
                                <td><?php echo($r->apellidos); ?></td>
                                <td> <?php echo($r->telefono);?></td>
                                <td> <?php echo($r->correo);?></td>
                                <td><a href='/index.php/persona/editar?id=<?php echo($r->id)?>'>Editar</a></td>
                                <td><a href='/index.php/persona/eliminar?id=<?php echo($r->id)?>'>Eliminar</a></td>
                            </tr>
                        <?php
                        }
                    }
                }
                ?>
        </tbody>
    </table>
</body>
</html>