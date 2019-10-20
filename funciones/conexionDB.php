<?php

//funcion conexion a DB

function conectarDB()
	{
		include  ('dbdatos.php');
		
		$conexion = mysqli_connect($server,$usudb,$pass,$db); 
		
		if ($conexion->connect_error){
   			die("Connection failed: " . $conexion->connect_error);
		}
		
		return $conexion;
	}

?>