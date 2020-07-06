
<?php
  require ('functions.php');
  include  ('User.php'); 
  include ('logout.php'); 



  if(isset($_POST['btnOk'])) {
    $user = new User();
    $user->nombre = $_POST['txtNombre']; 
    $user->apellido = $_POST['txtApellido']; 
    $user->usuario = $_POST['txtUsername'];
    $user->password = $_POST['txtPassword'];
    $user->rol = 'cl'; 

    if(guardarUser($user)){
      header('Location: /admin.php?status=Registro con exito');
    }
  }

  if(isset($_POST['btnLogout'])){
    destruir_session();
  }

?>