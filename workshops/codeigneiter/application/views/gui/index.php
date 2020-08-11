<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<div id="body">
        <h2>Registro de usuario</h2>
		<?php 
			$rutaAction = "index.php/persona/registrar"; 
			if(isset($user)){
				$user = $user[0];
				$rutaAction = "guardar_cambios?id=$user->id"; 
			}
			$nombre = trim((isset($user->nombre)? $user->nombre: ""),""); 
			$apellido= trim((isset($user->apellidos)? $user->apellidos: ""),""); 
			$telefono= trim((isset($user->telefono)? $user->telefono: ""),""); 
			$email = trim((isset($user->correo)? $user->correo: ""),""); 
		?>
        <form method="post"action="<?php echo $rutaAction?>">
            <input required type="text" placeholder="Nombre completo" name="nombre" value="<?php echo($nombre);?>"><br><br>
            <input required type="text" placeholder="Apellidos" name="apellidos"  value="<?php echo($apellido);?>"><br><br>
            <input required type="text" placeholder="Télefono" name="telefono"  value="<?php echo($telefono);?>"><br><br>
            <input required type="text" placeholder="Correo eléctronico" name="email"  value="<?php echo($email);?>"><br><br>
            <input required type="submit" value="Guardar" name="btnGuardar"><br><br>
		</form> 


		<form method="post" action="index.php/persona/datos">
		<?php 
			$vstyle="visibility: visible;";
			if(isset($user)){
				$vstyle="visibility: hidden;";
			}
		?>
			<input type="submit" value="Ver" style="<?php echo($vstyle);?>" >	
		</form>
	</div>
</div>
</body>
</html>