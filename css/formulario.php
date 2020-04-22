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
		 $estado = $_POST['estadoC'];
             
             }
				
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <title>Validar formulario</title>
	<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/formulario.css"> 
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
</head>
<body>
    
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="POST">
        
                <p>Cedula:<br/><input type="text" name="cedula" title="Cedula con 10 digitos" value="<?php if(isset($cedula))echo $cedula?>"> </p>
		<p> Nombres:<br/> <input type="text" name="nombre" title="Nombres Completos" value="<?php if(isset($nombre))echo $nombre?>"></p>
                <p> Apellidos:<br/> <input type="text" name="apellidos" title="Apellidos Completos" value="<?php if(isset($apellidos))echo $apellidos?>"> </p>
                <p>Ciudad:<br/><input type="text" name="ciudad" title="Ciudad de Residencia" value="<?php if(isset($ciudad))echo $ciudad?>"></p>
		<p> Tel Celular:<br/> <input type="text" name="celular" title="Numero Celular" value="<?php if(isset($celular))echo $celular?>"></p>
                <p> Dirección:<br/> <input type="text" name="direccion" title="Direccion de Residencia" value="<?php if(isset($direccion))echo $direccion?>"> </p>
                <p>correo electrónico:<br/><input type="text" name="email" title="Correo Electronico" value="<?php if(isset($email))echo $email?>"></p>
                <p> Fecha Nacimiento:<br/> <input type="text" id="calendario" name="fechaN" title="Fecha de Nacimiento" readonly=""></p>
                <label>Edad: (+18)</label><br/><br/><span class="label label-success"><span id="edadCalculada"></span></span>
                <p>Estado Civil:<br/><input type="text" name="estadoC" title="Estado Civil"></p>
                <p><input type="submit" value="enviar datos" name="submit"></p> 
               
                <?php
                include("../includes/validar_formulario.php");
                ?>
            
                
	</form>
    
   
</body>
</html>
//script calendario y calcular edad
 <script type="text/javascript">
	$(document).ready(function(){
		$("#calendario").datepicker({
                    firstDay: 1,
                    dateFormat: "yy-mm-dd",
                    minDate: '-60Y',
                    maxDate: '-18Y',
                    changeMonth: true,
                    changeYear: true
                    
		});

		
	});
 </script>
 
 //script para mostrar comentario 
        <script>
          $( function() {
            $( document ).tooltip();
          } );
          </script>
          <style>
          label {
            display: inline-block;
            width: 5em;
          }
          </style>
