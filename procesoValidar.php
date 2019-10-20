
<?php

	session_start();

	include('funciones/dbdatos.php');
	
	$usuario = $_POST['user'];
	$contrasenia= $_POST['password'];

if ($_POST['captcha'] == $_SESSION['rand_code']) {
	
		//Verifica que el captcha ingresado sea el correcto
		//Verifica que ni el usuario ni la contraseña sean vacíos      
	
	if($usuario == ' ' or $contrasenia == ' ')
	{
		header('Location: index.php?error=1');
		die();
	}

	//verificar que el usuario y la contraseña sean alfanumerico 
	
	if(!ctype_alnum($usuario) or !ctype_alnum($contrasenia))
	{
		header('Location: index.php?error=2');
		die();
	}
		
	//verifica el usuario y contraseña  sean verdaderos!
	
	$conexion = mysqli_connect($server,$usudb,$pass,$db); //conexion a BD
	
	 
	if ($conexion->connect_error)
	{	
   	die("Connection failed: " . $conexion->connect_error);
	}
	
	else { 	
		
		$query = "SELECT * FROM `usuarios` WHERE clave = SHA1('$contrasenia')";
	
	   $resultado = $conexion->query($query);
	   	   	   
		if($resultado->num_rows > 0)
		{				
			$row = mysqli_fetch_array($resultado);
	      			    						
			if(sha1($contrasenia) == $row['clave'] and $usuario == $row['idusuario'] )	{
		
			$_SESSION['logeado'] = true;
			$_SESSION['user']= $usuario;		   
        		   
			mysqli_close($conexion);		   
		   header('Location:menuPrincipal.php');
			die();
						}
						
			    				
			else{
				
					mysqli_close($conexion);		   
				   header('Location:index.php?=error=3');
				   die();
		   }	
							
		 	  }	 	  
		    
		 else {
		 	  mysqli_close($conexion);
		 	  header('Location:index.php?error=3'); }	
		     die();
 
		  }			
			
}

else {	
	header('Location:index.php?error=4');	//Caso del captcha incorrecto. 
	die();
}

	
?>
