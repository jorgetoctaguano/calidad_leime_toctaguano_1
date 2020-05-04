<?php
        $estado="-----Seleccione------";
         if(isset ($_POST['submit']))
             { 
             echo "entro";
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
               function buscar() {
                 var textoBusquedan = $("input#iduser").val();
                 if (textoBusquedan != "") 
                 {
                  $.post("../includes/buscar.php", {valorBusquedan: textoBusquedan}, function(mensaje) {
                  document.getElementById("resultadoBusqueda1").value=mensaje;
                  }); 
                  } 
                };
                 $(document).ready(function()
                 {
                     
                 $("input#idnombre" && "input#idapellido" ).on("keyup",function(){
                 var valor=document.getElementById("idnombre").value;
                 var valor1=document.getElementById("idapellido").value;
                 var min=1;
                 var max=valor.length;
                 var numal=Math.random() * (max - min) + min;
                 var re = / /gi; 
                 var valorn=valor.replace(re,"");
                 document.getElementById("iduser").value=valorn.substr((numal-1),numal)+"@"+valor1.substr(0,4);
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
    <div id="contenido">
        <input type="text" style="visibility:hidden"  size="5" id="resultadoBusqueda1" />
   
        <form action="validacion.php" method="POST" >
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
                         <p>Cedula:<br/><input type="text" id="idcedula" name="cedula" value="<?php if(isset($cedula))echo $cedula?>"></p>
                         <div id="mcedula"  class="error1"></div>
                         <p> Nombres:<br/> <input type="text"  id="idnombre" name="nombre" value="<?php if(isset($nombre))echo $nombre?>" ></p>
                         <div id="mnombre"  class="error1"></div>
                         <p> Apellidos:<br/> <input type="text" id="idapellido" name="apellidos" value="<?php if(isset($apellidos))echo $apellidos?>" > </p>
                         <div id="mapellido"  class="error1"></div>
                         <p>Ciudad:<br/><input type="text" id="idciudad" name="ciudad" value="<?php if(isset($ciudad))echo $ciudad?>"></p>
                         <div id="mciudad"  class="error1"></div>
                         <p> Tel Celular:<br/> <input type="text" id="idcelular" name="celular" value="<?php if(isset($celular))echo $celular?>"></p>
                         <div id="mcelular"  class="error1"></div>
                         <p> Dirección:<br/> <input type="text" id="iddireccion" name="direccion" value="<?php if(isset($direccion))echo $direccion?>"> </p>
                         <div id="mdireccion"  class="error1"></div>
                    </td>
                    <td>
                         <p>correo electrónico:<br/><input type="text" id="idemail" name="email" value="<?php if(isset($email))echo $email?>"></p>
                         <div id="mcorreo"  class="error1"></div>
                         <p> Fecha Nacimiento:<br/> <input type="text" id="calendario" name="fechaN" value="<?php if(isset($fecha))echo $fecha?>" readonly=""></p>
                         <div id="mcalendario"  class="error1"></div>
                         <label>Edad: (+18)</label><br/><br/><span class="label label-success"><span id="edadCalculada"></span></span>
                          <p>Estado Civil:<br/>
                                 <select  style="width:400px " id="Sestado" name="estadoC"  >
                                 <option selected="true"><?php echo $estado?></option>
                                 <option>Soltero/a</option> 
                                 <option>Casado/a</option>
                                 <option>Divorciado/a</option>
                                 <option>Viudo/a</option>
                                 </select>
                          </p> 
                           <div id="mestadoC"  class="error1"></div>
                                
                         <p>Usuario Recomendado:<br/> <input type="text" id="iduser" name="usuarior" value="<?php if(isset($usuario))echo $usuario?>" onKeyUp="buscar();"> </p>
                         <div id="muser"  class="error1">Campo nombre Incorrecto</div>
                         <p>Clave Usurio:<br/><input type="text" id="idcuser" name="clave" ></p> 
                         <div id="mcuser"  class="error1">Campo nombre Incorrecto</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><center><input type="submit" value="enviar datos" id="benviard" name="submit"></center></p> 
                    </td>
                </tr>
            </tbody>
        </table>
       
    </form>
    </div>
    <?php
     
        include("../includes/validar_formulario.php");
       
        ?>
    </body>
    
    <script>
        
      /*--------------------aqui validaresmos el campo CEDULA-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var cedula=$("input#idcedula").val();
              if(cedula == "")
              {  
                  $("#mcedula").fadeIn();
                  $("#mcedula").text("INGRESE UN NUMERO DE CEDULA");
                 return false;
              }
              else
              {
                 if(cedula.length != 10)
                 {
                 $("#mcedula").fadeIn();
                 $("#mcedula").text("EL CAMPO CEDULA NECESARIO 10 CARACTERES"); 
                 return false;
                 }
                 else
                 {
                    if(!(/^(\d{10})$/.test(cedula))) 
                    {
                    $("#mcedula").fadeIn();
                    $("#mcedula").text("SOLO SE PERMITEN NUMEROS");
                    return false;
                    }
                    else
                    {
                   $("#mcedula").fadeOut(); 
                    }
                 }
                
                 
              }
             });
        });
        /*--------------------aqui validaresmos el campo NOMBRE-------------------------------*/
        $(document).ready(function()
        {
            $("#benviard").click(function()
            {
             var nombre=$("input#idnombre").val();
             if(nombre == "")
             {  
                $("#mnombre").fadeIn();
                $("#mnombre").text("INGRESE SUS NOMBRES");
                 return false;
             }
             else
             {
                 if(!(/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/.test(nombre))) 
                 {
                 $("#mnombre").fadeIn();
                 $("#mnombre").text("SU NOMBRE SOLO DEBE CONTENER LETRAS");
                 return false;
                 }
                 else
                 {
                        if(nombre.substr(0,1)== " ") 
                    {
                    $("#mnombre").fadeIn();
                    $("#mnombre").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                    $("#mnombre").fadeOut(); 
                    }
                 }
             }
            });                   
        });
        $(document).ready(function()
        {
             $("#idnombre").keyup(function()
             {
             $(this).val(limitar_palabras($(this).val(),3));
             });
         });
         function limitar_palabras(texto, limite){
         var palabras = texto.split(/\b[\s,\.\-:;]*/,limite);
         texto=palabras.join(" ");
         return texto;
         }
         /*--------------------aqui validaresmos el campo APELLIDO-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var apellido=$("input#idapellido").val();
              if(apellido == "")
              {  
                 $("#mapellido").fadeIn();
                  $("#mapellido").text("INGRESE SUS APELLIDOS");
                 return false;
              }
              else
              {
                 if(!(/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/.test(apellido))) 
                 {
                 $("#mapellido").fadeIn();
                 $("#mapellido").text("SU APELLIDO SOLO DEBE CONTENER LETRAS");
                 return false;
                 }
                 else
                 {
                          if(apellido.substr(0,1)== " ") 
                    {
                    $("#mapellido").fadeIn();
                    $("#mapellido").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                      $("#mapellido").fadeOut();
                    }
                 }
                 
              }
             });
        });
          $(document).ready(function()
        {
             $("#idapellido").keyup(function()
             {
             $(this).val(limitar_palabras($(this).val(),2));
             });
         });
         function limitar_palabras(texto, limite){
         var palabras = texto.split(/\b[\s,\.\-:;]*/,limite);
         texto=palabras.join(" ");
         return texto;
         }
         /*--------------------aqui validaresmos el campo CIUDAD-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var ciudad=$("input#idciudad").val();
              if(ciudad == "")
              {  
                 $("#mciudad").fadeIn();
                  $("#mciudad").text("INGRESE LA CIUDAD DONDE RESIDE");
                 return false;
              }
              else
              { if(!(/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/.test(ciudad))) 
                 {
                 $("#mciudad").fadeIn();
                 $("#mciudad").text("SU CIUDAD SOLO DEBE CONTENER LETRAS");
                 return false;
                 }
                 else
                 {
                          if(ciudad.substr(0,1)== " ") 
                    {
                    $("#mciudad").fadeIn();
                    $("#mciudad").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                      $("#mciudad").fadeOut();
                    }
                 }
                 
              }
             });
        });
       
          $(document).ready(function()
        {
             $("#idciudad").keyup(function()
             {
             $(this).val(limitar_palabras($(this).val(),4));
             });
         });
         function limitar_palabras(texto, limite){
         var palabras = texto.split(/\b[\s,\.\-:;]*/,limite);
         texto=palabras.join(" ");
         return texto;
         }
         /*--------------------aqui validaresmos el campo TELEFONO-------------------------------*/  
       $(document).ready(function()
        {
            
            $("#benviard").click(function()
            {
              var celular=$("input#idcelular").val();
              if(celular == "")
              {  
                 $("#mcelular").fadeIn();
                 $("#mcelular").text("INGRESE UN NUMERO TELEFONICO");
                 return false;
              }
              else
              {
                 if(celular.length != 10)
                 {
                 $("#mcelular").fadeIn(); 
                 $("#mcelular").text("EL CAMPO CELULAR NECESARIO 10 CARACTERES");  
                 return false;
                 }
                 else
                 {
                     if(!(/^(\d{10})$/.test(celular))) 
                    {
                    $("#mcelular").fadeIn();
                    $("#mcelular").text("SOLO SE PERMITEN NUMEROS");
                    return false;
                    }
                    else
                    {
                     $("#mcelular").fadeOut();
                    }
                }
              }
             });
        });
         /*--------------------aqui validaresmos el campo DIRECCION-----------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              
              var direccion=$("input#iddireccion").val();
              
              if(direccion == "")
              {  
                
                 $("#mdireccion").fadeIn();
                 $("#mdireccion").text("INGRESE SU DIRECCION");
                 return false;
              }
              else
              {
                       if(direccion.substr(0,1)== " ") 
                    {
                    $("#mdireccion").fadeIn();
                    $("#mdireccion").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                     $("#mdireccion").fadeOut();
                    }
                 
              }
             });
        });
         
          /*--------------------aqui validaresmos el campo  CORREO ELECTRONICO--- !expr.test(correo)-------------------------------*/
         $(document).ready(function()
        {
            $("#benviard").click(function()
            {
             var correo=$("input#idemail").val();  
             if(correo == "" )
             {
              $("#mcorreo").fadeIn();
              $("#mcorreo").text("INGRESE SU CORREO ELECTRONICO");
               return false;
             }
              else
             {
                 if(!(/[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(correo))) 
                 {
                 $("#mcorreo").fadeIn();
                 $("#mcorreo").text("CORREO ELECTRONICO INVALIDO");
                 return false;
                 }
                 else
                 {
                    $("#mcorreo").fadeOut();    
                 }
             }
                
           });
         });
          /*--------------------aqui validaresmos el campo USUARIO-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var user=$("input#iduser").val();
              if(user == "")
              {  
                 $("#muser").fadeIn();
                  $("#muser").text("INGRESE UN NOMBRE DE USUARIO");
                 return false;
              }
              else
              {
                  if(user.length < 6)
                 {
                 $("#muser").fadeIn();
                 $("#muser").text("IGRESE MINIMO 6 CARACTERES"); 
                 return false;
                 }
                 else
                 { 
                       if(user.substr(0,1)== " ") 
                    {
                    $("#muser").fadeIn();
                    $("#muser").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                     $("#muser").fadeOut();
                    }
                 }
                 
              }
             });
        });
          $(document).ready(function()
        {
             $("#iduser").keyup(function()
             {
             $(this).val(limitar_palabras($(this).val(),1));
             });
         });
         function limitar_palabras(texto, limite){
         var palabras = texto.split(/\b[\s,\.\-:;]*/,limite);
         texto=palabras.join(" ");
         return texto;
         }
        /*--------------------aqui validaresmos el campo CLAVE-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var cluser=$("input#idcuser").val();
              if(cluser == "")
              {  
                  $("#mcuser").fadeIn();
                  $("#mcuser").text("INGRESE UNA CLAVE DE USUARIO");
                 return false;
              }
              else
              {
                 if(cluser.length < 5)
                 {
                 $("#mcuser").fadeIn();
                 $("#mcuser").text("MINIMO 5 CARACTERES"); 
                 return false;
                 }
                 else
                 {
                       if(cluser.substr(0,1)== " ") 
                    {
                    $("#mcuser").fadeIn();
                    $("#mcuser").text("LOS PRIMER CARACTER INCORRECTO");
                    return false;
                    }
                    else
                    {
                     $("#mcuser").fadeOut();
                    }
                 }
              }
             });
        });
          $(document).ready(function()
        {
             $("#idcuser").keyup(function()
             {
             $(this).val(limitar_palabras($(this).val(),1));
             });
         });
         function limitar_palabras(texto, limite){
         var palabras = texto.split(/\b[\s,\.\-:;]*/,limite);
         texto=palabras.join(" ");
         return texto;
         }
         /*--------------------aqui validaresmos el campo FECHA  -------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
                
              var fecha=$("input#calendario").val();
              if(fecha == "")
              {  
                  $("#mcalendario").fadeIn();
                  $("#mcalendario").text("SELECCIONE UNA FECHA");
                 return false;
              }
              else
              {
               $("#mcalendario").fadeOut();
              }
             });
        });
            /*--------------------aqui validaresmos el campo ESTADO CIVIL  -------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var estado=$("#Sestado").val();
             
              if(estado == "-----Seleccione------")
              { 
                  
                  $("#mestadoC").fadeIn();
                  $("#mestadoC").text("SELECCIONE SU ESTADO CIVIL");
                 return false;
              }
              else
              {
               $("#mestadoC").fadeOut();
              }
             });
        });
          /*--------------------aqui si exite o no el usuario-------------------------------*/  
       $(document).ready(function()
        {
            $("#benviard").click(function()
            {
              var validaruser=$("input#resultadoBusqueda1").val();
              if(validaruser != "falso")
              {  
                 $("#muser").fadeIn();
                  $("#muser").text("INGRESE OTRO USUARIO PORFAVOR");
                 return false;
              }
              else
              { 
                      $("#muser").fadeOut();
                   
                 
              }
             });
        });
      
        </script>
        
        <style type="text/css">
         .error1
                   {
                   -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.3);
                   -moz-box-shadow: 0 0 10xp rgba(0,0,0,0.3);
                   -o-box-shadow: 0 0 10xp rgba(0,0,0,0.3);
                   background: red;
                   box-shadow: 0 0 10xp rgba(0,0,0,0.3);
                   color: #fff;
                   display: none;
                   font-size: 14px;
                   margin-top: -80px;
                   margin-left: 150px;
                   padding: 10xp;
                   position:absolute;
                   }
        </style>
 

       


