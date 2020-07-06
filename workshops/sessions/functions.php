
<?php

    include ('conexion.php'); 
    function authenticate($username, $password){
        $conn = getConexion();
        $sql = "SELECT * FROM user WHERE `usuario` = '$username' AND `password` = '$password'";
        $result = $conn->query($sql);
      
        if ($conn->connect_errno) {
          $conn->close();
          return false;
        }
        $conn->close();
        return $result->fetch_array();
      }
      
      function guardarUser($user) {
        $conn = getConexion();
        $sql = "INSERT INTO user( `usuario`, `nombre`, `password`,`apellido`,`rol`)
                VALUES ('$user->usuario', '$user->nombre', '$user->password', '$user->apellido', '$user->rol')";
        $conn->query($sql);
      
        if ($conn->connect_errno) {
          $conn->close();
          return false;
        }
        $conn->close();
        return true;
      }
?>