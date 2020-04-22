<?php
 $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
 $patron_texto1 = "^[a-zA-Z0-9äöüÄÖÜ]*$";

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
                else
                {
                    if(substr($cedula,0,1)==" ") 
                     {
                       echo "<p class='error'>*Campo CEDULA el primer espacio en blanco</p>"; 
                     }
                }
            }
        }
     if (empty($nombre))
        {
          echo "<p class='error'>*Campo Nombre Vacio</p>";
        }
        else
        {
             if(strlen($nombre)>30) 
             {
               echo "<p class='error'>*Nombre Demasiado largo</p>"; 
             } 
             else
             {
                 if(str_word_count($nombre,0)>3) 
                {
                  echo "<p class='error'>*Campo NOMBRE Maximo 3 Palabras</p>"; 
                }
                 else
                {
                    if(!preg_match($patron_texto, $nombre)) 
                     {
                        echo "<p class='error'>*Campo NOMBRE SOLO LETRAS </p>"; 
                     }else
                     {
                      if(substr($nombre,0,1)==" ") 
                     {
                       echo "<p class='error'>*La CEDULA debe empezar con [a-zA-Z]</p>"; 
                     }
                }
                    
                }
             }
                      
          
         }
     if (empty($apellidos)) 
         {
         echo "<p class='error'>*Campo APELLIDO Vacio</p>";
         }else
         {
           if(strlen($apellidos)>30) 
           {
               echo "<p class='error'>*APELLIDO Demasiado largo</p>"; 
           } else
             {
                 if(str_word_count($apellidos,0)>2) 
                {
                  echo "<p class='error'>*Campo APELLIDO Maximo 2 Palabras</p>"; 
                }
                 else
                {
                    if(! preg_match($patron_texto, $apellidos) ) 
                    {
                        echo "<p class='error'>*Campo APELLIDO solo letras </p>"; 
                    }
                    else
                    {
                    if(substr($apellidos,0,1)==" ") 
                     {
                       echo "<p class='error'>*Campo APELLIDO debe empezar con [a-zA-Z]</p>"; 
                     }
                    }
                    
                }
             }
        }
     if (empty($ciudad))
         {
            echo "<p class='error'>*Campo CIUDAD Vacio</p>";
         }else
         {
           if(strlen($ciudad)>20) 
           {
               echo "<p class='error'>*Campo CIUDAD Demasiado largo</p>"; 
           }else
             {
                 if(str_word_count($ciudad,0)>4) 
                {
                  echo "<p class='error'>*Campo CIUDAD Maximo 4 Palabras</p>"; 
                }
                  else
                {
                    if(! preg_match($patron_texto, $apellidos) ) 
                    {
                        echo "<p class='error'>*Campo CIUDAD solo letras </p>"; 
                    }
                    else
                    {
                    if(substr($apellidos,0,1)==" ") 
                     {
                       echo "<p class='error'>*Campo CIUDAD debe empezar con [a-zA-Z]</p>"; 
                     }
                }
                    
                }
             }
        }
     if (empty($celular))
         {
        echo "<p class='error'>*Campo CELULAR Vacio</p>";
         }else
         {
           if(!is_numeric($celular)) 
           {
               echo "<p class='error'>*Solo se permiten numeros en este campo</p>"; 
           }
           else
           {
             if(strlen($celular)>10) 
             {
               echo "<p class='error'>*Numero de digitos exedido</p>"; 
             }   
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
     if (empty($email))
         {
           echo "<p class='error'>*Campo Correo Electronico Vacio</p>";
         }
         else
         {
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
              echo "<p class='error'>*El CORREO es incorrecto </p>"; 
            }
        }
     if (empty($fecha))
    {
        echo "<p class='error'>*Campo Fecha Nacimiento Vacio</p>";
    }
    
    if (empty($usuario))
         {
           echo "<p class='error'>*Campo USUARIO esta Vacio</p>";
         }
         else
         {
             if(strlen($usuario)<6 || strlen($usuario)>15) 
            {
              echo "<p class='error'>*Minimo 6 caracteres maximo 15 </p>"; 
            }
        }
        if (empty($clave))
         {
           echo "<p class='error'>*Campo CAVE esta Vacio</p>";
         }
         else
         {
             if(strlen($clave)<6 || strlen($clave)>15) 
            {
              echo "<p class='error'>*CLAVE Minimo 6 caracteres maximo 15 </p>"; 
            }
        }
    			
}
//calcula la edad a partir de la fecha seleccionadas
function calculaTiempo($fechaInicio,$fechaFin){
	//indice 0 = años
	//indice 1= meses
	//indice 2 = dias
	//indice 11 = total en dias 
	$datetime1 = date_create($fechaInicio);
	$datetime2 = date_create($fechaFin);
	$interval = date_diff($datetime1, $datetime2);

	$tiempo=array();

	foreach ($interval as $valor) {
		$tiempo[]=$valor;
	}

	return $tiempo;
}

