<?php

include('funciones/validarsession.php');
include('funciones/funcionesAlumno.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$notaF = $_POST['notafinal'];
$dni= $_SESSION['dni'];



if ($_POST['captcha'] == $_SESSION['rand_code']){

$vacios = ($nombre == "") or ($apellido == "") or ($correo == "") or ($notaF == "");

		if($vacios)
		{	header('Location: formularioModAlumno.php?error=1');
			die(); }

		if(!ctype_alpha($nombre) or strlen($nombre) > 15 or !ctype_alpha($apellido) or strlen($apellido) > 15){					
				
			header('Location: formularioModAlumno.php?error=3');				
			die();
					} 
				
				else{
				
				if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $correo)){
			
			    		header('Location: formularioModAlumno.php?error=4');										
						die();
						}					
				
					if(!ctype_digit($notaF) or $notaF > 10){
				
						header('Location: formularioModAlumno.php?error=5');										
						die();
							
				}
				}
				}	
	
							
else{
	header('Location:formularioModAlumno.php?error=2');
	die();
		}
		
		if(existeAlumno($dni)){
			
		modificarAlumno($dni,$nombre,$apellido,$correo,$notaF);
		header('location:listado.php');
				
		}   
		else{
		
			header('location:errorOperacion.php');
		}
				  		   
				   				   
				   				   
				   				   	
		
?>
