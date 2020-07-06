
<?php
  session_start();
if ($_SESSION && $_SESSION['user']){
    //user already logged in
    if($_SESSION['user'][5]=="ad"){
         header('Location: /admin.php');
    }else{
        header('Location: /cliente.php');
    }
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sección</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
</head>
<body>
<form method="POST" action="login.php">
    <div class="container">
        <div class="columns">
            <div class="column column is-three-quarters-mobile is-two-thirds-tablet
             is-half-desktop is-one-third-widescreen is-one-quarter-fullhd"><br><Br>
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
            </div>
        </div>
    </div>
    </form>
</body>
</html>