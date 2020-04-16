<?php
if(isset($_POST['submit'])){
    if (empty($cedula)){
        echo "<p class='error'>*Campo CEDULA Vacio</p>";
    }else
         {
           if(strlen($cedula)!=10 ) 
            {
              echo "<p class='error'>*Deben ser 10 digitos en el campo CEDULA</p>"; 
            }
            else
            {
              if(!is_numeric($cedula)) 
                {
                 echo "<p class='error'>*Solo se permiten numero en CEDULA</p>"; 
                }
            }
        }
     if (empty($nombre))
         {
        echo "<p class='error'>*Campo Nombre Vacio</p>";
        }else
         {
           if(strlen($nombre)>30) 
           {
               echo "<p class='error'>*Nombre Demasiado largo</p>"; 
           }
        }
     if (empty($apellidos)){
        echo "<p class='error'>*Campo Apellido Vacio</p>";
    }else
         {
           if(strlen($nombre)>30) 
           {
               echo "<p class='error'>*Apellido Demasiado largo</p>"; 
           }
        }
     if (empty($ciudad))
         {
        echo "<p class='error'>*Campo Ciudad Vacio</p>";
         }else
         {
           if(strlen($nombre)>40) 
           {
               echo "<p class='error'>*Nombre de Ciudar Demasiado largo</p>"; 
           }
        }
     if (empty($celular))
         {
        echo "<p class='error'>*Campo Celular Vacio</p>";
         }else
         {
           if(!is_numeric($celular)) 
           {
               echo "<p class='error'>*Solo se permiten numeros en este campo</p>"; 
           }
        }
     if (empty($direccion))
         {
        echo "<p class='error'>*Campo Dirección Vacio</p>";
        }else
         {
           if(strlen($nombre)>40) 
           {
              echo "<p class='error'>*Campo Dirección largo</p>"; 
           }
        }
     if (empty($email)){
        echo "<p class='error'>*Campo Correo Electronico Vacio</p>";
    }else
         {
           if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
           {
               echo "<p class='error'>*El correo es incorrecto </p>"; 
           }
        }
     if (empty($fechaN)){
        echo "<p class='error'>*Campo Fecha Nacimiento Vacio</p>";
    }
    
   
    			
}


