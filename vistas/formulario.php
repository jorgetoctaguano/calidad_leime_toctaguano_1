<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<link rel="stylesheet" href="css/formulario.css">
</head>
<body>
	<form action="formulario.php" method="POST">
		<?php
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email">
		</p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>

