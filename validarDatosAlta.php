<?php

include('funciones/validarsession.php');
include('funciones/funcionesAlumno.php');
	
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$notaF = $_POST['notafinal'];

if ($_POST['captcha2'] == $_SESSION['rand_code']){

$vacios = ($dni == "") or ($nombre == "") or ($apellido == "") or ($correo == "") or ($notaF == "");

		if($vacios)
		{
			header('Location: formularioAlta.php?error=3');
			die();
		}

		if( !ctype_digit($dni) or strlen($dni) > 12) {
		
				header('Location: formularioAlta.php?error=1');
				die();}
		
		else{
						
			   if(!ctype_alpha($nombre) or strlen($nombre) > 15 or !ctype_alpha($apellido) or strlen($apellido) > 15){					
					
				header('Location: formularioAlta.php?error=4');				
				die();
					} 
				
				else{
				
				if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $correo)){
			
						header('Location: formularioAlta.php?error=5');										
						die();
						}
							
				}
				
				if(!ctype_digit($notaF) or $notaF > 10){
				
						header('Location: formularioAlta.php?error=6');										
						die();
			
								
				}
									
				}}
					
		
				else{

				header('Location:formularioAlta.php?error=2');
				die();

				}

				   	
		if(!existeAlumno($dni) ){
		
		altaAlumno($dni,$nombre,$apellido,$correo,$notaF);
		$_SESSION['dni'] = $dni;
		$_SESSION['nombre']= $nombre;
		$_SESSION['apellido'] = $apellido;
		$_SESSION['correo'] = $correo;
		$_SESSION['notafinal'] = $notaF;
		
		header('Location:mostrarDatosAlta.php');
		die();
		}
	
		else{
			   
				$alumno = obtenerAlumno($dni);			   
			   $_SESSION['dni']=$dni;
			   $_SESSION['nombre']= $alumno['nombre'];
			   $_SESSION['apellido']= $alumno['apellido'];
			   $_SESSION['correo']= $alumno['correo'];
				$_SESSION['notafinal']= $alumno['notafinal'];

				header('Location:mostrarDatosExistentes.php');
				die();
			}
	
?>




