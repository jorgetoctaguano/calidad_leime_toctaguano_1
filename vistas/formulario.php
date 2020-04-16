<?php
         if(isset ($_POST['submit']))
             { 
                 $cedula = $_POST['cedula'];            
                 $nombre = $_POST['nombre'];
                 $apellidos = $_POST['apellidos'];
                 $celular = $_POST['celular'];
		 $email = $_POST['email'];
                 $ciudad = $_POST['ciudad'];
		 $direccion = $_POST['direccion'];
                 $fecha = $_POST['fechaN'];
                 $edad = $_POST['edad'];
		 $estado = $_POST['estadoC'];
             
             }
				
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <title>Validar formulario</title>
	<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/formulario.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="POST">
                <p>Cedula:<br/><input type="text" name="cedula" value="<?php if(isset($cedula))echo $cedula?>"></p>
		<p> Nombres:<br/> <input type="text" name="nombre" value="<?php if(isset($nombre))echo $nombre?>"></p>
                <p> Apellidos:<br/> <input type="text" name="apellidos" value="<?php if(isset($apellidos))echo $apellidos?>"> </p>
                <p>Ciudad:<br/><input type="text" name="ciudad" value="<?php if(isset($ciudad))echo $ciudad?>">></p>
		<p> Tel Celular:<br/> <input type="text" name="celular" value="<?php if(isset($celular))echo $celular?>"></p>
                <p> Dirección:<br/> <input type="text" name="direccion" value="<?php if(isset($direccion))echo $direccion?>"> </p>
                <p>correo electrónico:<br/><input type="text" name="email" value="<?php if(isset($email))echo $email?>"></p>
                <p> Fecha Nacimiento:<br/> <input type="text" name="fechaN"></p>
                <p> Edad:<br/> <input type="text" name="edad"> </p>
                <p>Estado Civil:<br/><input type="text" name="estadoC"></p>
                
                <p><input type="submit" value="enviar datos" name="submit"></p> 
                
                <?php
                include("../includes/validar_formulario.php");
                ?>
	</form>
</body>
</html>

