<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
       <title>Validar formulario</title>
     <meta charset="UTF-8">
       <script src="http://code.jquery.com/jquery-3.2.1.min.js" 
                 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                 crossorigin="anonymous"></script>
                 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
                 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                 <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("input#nombre" && "input#apellido" ).on("keyup",function(){
               var valor=document.getElementById("nombre").value;
               var valor1=document.getElementById("apellido").value;
              document.getElementById("fecha").value=valor.substr(0,3)+"MC"+valor1.substr(0,3);
            });
            
 });
          
         </script>
         <script>
$(function () {
$("#datepicker").datepicker()({
    dateFormat:"yy-mm-dd"
});
});
</script>
         
</head>
    <body>
       <input type="text" id="nombre"> 
       <input type="text" id="apellido">
       <input type="text" id="datepicker">
       <div id="usuarior">
       <p>Fecha Nacimiento:<br/> <input type="text" id="fecha"></p>
       </div>
       
 
    </body>
</html>
