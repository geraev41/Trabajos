
<?php
    session_start();

    $user = $_SESSION['user'];
    if(!$user or ($user[5] != "ad")){
        header('Location: /index.php');

    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
</head>
<body>
<form method="POST" action="signup.php">
    <div class="container">
        <div class="columns">
            <div class="column column is-three-quarters-mobile is-two-thirds-tablet
             is-half-desktop is-one-third-widescreen is-one-quarter-fullhd"><br><Br>
                 <div class="field">
                    <div class="control">
                         <input  class="input is-rounded is-warning" type="text" placeholder="Nombre" name="txtNombre"><br><br>
                    </div>
                </div>
                
                <div class="field">
                    <div class="control">
                         <input  class="input is-rounded is-danger" type="text" placeholder="Apellidos" name="txtApellido"><br><br>
                    </div>
                </div>
                
                <div class="field">
                    <div class="control">
                         <input  class="input is-rounded is-warning" type="text" placeholder="Nombre Usuario" name="txtUsername"><br><br>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                         <input  class="input is-rounded is-danger" type="password" placeholder="Contraseña"name="txtPassword"><br><br>
                    </div>
                </div>
                
                <input  class="button is-primary is-danger is-rounded" name="btnOk" style="margin-left: 50%;" type="submit" value="ok">
                <br><br>
                <input  class="button is-primary is-danger is-rounded" name="btnLogout" style="margin-left: 50%;" type="submit" value="Salir">

            </div>
        </div>
    </div>
    </form>
</body>
</html>