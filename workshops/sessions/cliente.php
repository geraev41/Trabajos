

<?php
session_start();
$user = $_SESSION['user'];
if (!$user or ($user[5]!= "cl")) {
    header('Location: /index.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
</head>
<body>
<form method="POST" action="cliente.php">

   <?php
        echo ("Bienvenido $user[2] $user[4]");
   ?> 
<br>
<input  class="button is-primary is-danger is-rounded" name="btnLogout" style="margin-left: 50%;" type="submit" value="Salir">

</form>
</body>
</html>

<?php
include ('logout.php'); 
      if(isset($_POST['btnLogout'])){
        destruir_session();
      }
?>