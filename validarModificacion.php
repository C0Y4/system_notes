<?php

include('funciones/validarsession.php');
include('funciones/funcionesAlumno.php');

$dni2 = $_POST['dni2'];


if(!ctype_digit($dni2) or  strlen($dni2) > 12){
		
	header('location:formularioModificar.php?error=2');
	die();

}

if (!existeAlumno($dni2)){
	
	header('location:formularioModificar.php?error=1');	
	die();
	}
	else{
		
	$alumno = obtenerAlumno($dni2);					 
	
		 
	$_SESSION['dni']=$dni2;
	$_SESSION['nombre']= $alumno['nombre'];
	$_SESSION['apellido']= $alumno['apellido'];
	$_SESSION['correo']= $alumno['correo'];
	$_SESSION['notafinal']= $alumno['notafinal'];
	
	header('location:verDatosModificar.php');
	die();	
}



?>