<?php 
	include "validar_formulario.php";

	$fechaInicio=$_POST['fecha'];
	$fechaFin=date('Y-m-d');
	echo calculaTiempo($fechaInicio,$fechaFin)[0];

 ?>
