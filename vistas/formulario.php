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
                 $usuario = $_POST['usuarior'];
                 $clave=$_POST['clave'];
             }
				
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <title>Validar formulario</title>
	<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/formulario.css"/>
         <script 
                 src="http://code.jquery.com/jquery-3.2.1.min.js" 
                 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                 crossorigin="anonymous">
         </script>
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
         <script 
                 src="http://code.jquery.com/jquery-1.9.1.js">
         </script>
         <script 
                 src="http://code.jquery.com/ui/1.10.1/jquery-ui.js">
         </script>
        <script type="text/javascript">
                 $(document).ready(function()
                 {
                 $("input#idnombre" && "input#idapellido" ).on("keyup",function(){
                 var valor=document.getElementById("idnombre").value;
                 var valor1=document.getElementById("idapellido").value;
                 document.getElementById("iduser").value=valor.substr(0,3)+"MC"+valor1.substr(0,3);
                     });
                 });
         </script>
<script type="text/javascript">
	$(document).ready(function()
        {
		$("#calendario").datepicker
                ({
                    firstDay: 1,
                    dateFormat: "yy-mm-dd",
                    minDate: '-60Y',
                    maxDate: '-18Y',
                    changeMonth: true,
                    changeYear: true
                    
		});
                $('#calendario').change(function(){
			$.ajax({
				type:"POST",
				data:"fecha=" + $('#calendario').val(),
				url:"../includes/calcularEdad.php",
				success:function(r){
					$('#edadCalculada').text(r + " años");
				}
			});
		});
         });
 </script>
         
      
</head>·
<body>
    
    <h2><center><font color="red">SUPERMECADO EL MERCADITO</font></center></h2>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="POST">
        <table>
          
                <thead>
                    <tr>
                        <th> <img src="../imagenes/logo.PNG" width="100" height="100" alt="logo" />
                        </th>
                    <th>INGRESO DE DATOS PARA USUARIOS</th>
                    </tr>
                </thead>
               
           <tbody>
                <tr>
                    <td>
                         <p>Cedula:<br/><input type="text" name="cedula" value="<?php if(isset($cedula))echo $cedula?>"></p>
                         <p> Nombres:<br/> <input type="text"  id="idnombre" name="nombre" value="<?php if(isset($nombre))echo $nombre?>"></p>
                         <p> Apellidos:<br/> <input type="text" id="idapellido" name="apellidos" value="<?php if(isset($apellidos))echo $apellidos?>"> </p>
                         <p>Ciudad:<br/><input type="text" name="ciudad" value="<?php if(isset($ciudad))echo $ciudad?>"></p>
                         <p> Tel Celular:<br/> <input type="text" name="celular" value="<?php if(isset($celular))echo $celular?>"></p>
                         <p> Dirección:<br/> <input type="text" name="direccion" value="<?php if(isset($direccion))echo $direccion?>"> </p></td>
                     <td>
                         <p>correo electrónico:<br/><input type="text" name="email" value="<?php if(isset($email))echo $email?>"></p>
                         <p> Fecha Nacimiento:<br/> <input type="text" id="calendario" name="fechaN" value="<?php if(isset($fecha))echo $fecha?>" readonly=""></p>
                         <label>Edad: (+18)</label><br/><br/><span class="label label-success"><span id="edadCalculada"></span></span>
                         <p>Estado Civil:<br/>
                                 <select  style="width:400px " name="estadoC">
                                 <option>Soltero/a</option>
                                 <option>Casado/a</option>
                                 <option>Divorciado/a</option>
                                 <option>Viudo/a</option>
                                 </select></p> 
                         
                         <p>Usuario Recomendado:<br/> <input type="text" id="iduser" name="usuarior" id="rec" value="<?php if(isset($usuario))echo $usuario?>"> </p>
                         <p>Clave Usurio:<br/><input type="text" name="clave"></p> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><center><input type="submit" value="enviar datos" name="submit"></center></p> 
                    </td>
                </tr>
            </tbody>
        </table>

                <?php
                include("../includes/validar_formulario.php");
                ?>
	</form>
</body>
</html>


 

       


