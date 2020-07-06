<?php
  require ('functions.php');
  include  ('User.php'); 



  if(isset($_POST['btnOk'])) {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $user = authenticate($username, $password);
    if($user) {
      session_start();
      $_SESSION['user'] = $user;
      if($user[5]=="ad"){
        header('Location: /admin.php');
      }elseif ($user[5]=="cl"){
        header('Location: /cliente.php');
      }
    } else {
     header('Location: /index.php?status=login');

    }
  }

?>