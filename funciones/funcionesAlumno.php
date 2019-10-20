<?php

	include('conexionDB.php');

	function existeAlumno($dni) {
	
 		$conexion = conectarDB();
		//Buscar DNI si Existe!
		
		$query = "SELECT * FROM alumnos WHERE dni='".$dni."'";
		$resultado = $conexion->query($query);
					
		if($resultado->num_rows > 0) { 
		
			$existe = true; }
		else{	
			$existe = false;	}

		$conexion->close();
		
		return $existe;
}


	function altaAlumno($dni,$nombre,$apellido,$correo,$notaF){
	
	$conexion = conectarDB();
	
	$query = "INSERT INTO alumnos(dni, nombre, apellido,correo,notafinal)	VALUES
			('$dni', '$nombre','$apellido','$correo','$notaF')";
		
	if($conexion->query($query) == true)
	{
		$alta = true;
	}
	else
	{
		$alta = false;
	}

	$conexion->close();

	return $alta;
	}
	
	
	function obtenerListado()
	{
		$conexion = conectarDB();
				
		$query = "SELECT dni,nombre,apellido,correo,notafinal FROM alumnos ORDER BY apellido ASC";
		
		$resultado = $conexion->query($query);

		$lista = array();
			   		
		while($row = $resultado->fetch_assoc())
		{  		   
			$lista[] = $row;
		}

		$conexion->close();
						
		return $lista;
	}
	
	
	function obtenerAlumno($dni)
	{
		$conexion = conectarDB();

		$query = "SELECT * FROM alumnos WHERE dni='".$dni."'";
		$resultado = $conexion->query($query);

      if($resultado->num_rows > 0)
		{
			$ret = $resultado->fetch_assoc();
		}
		else
		{
			$ret = false;
		}

		$conexion->close();
		return $ret;
	}
		
				
				
    function borrarAlumno($dni)
    {
	
		$conexion = conectarDB();
		
		$query = "DELETE FROM alumnos WHERE dni=".$dni;

		if($conexion->query($query) === TRUE){	
			$borrar = true;
		}
		else{
			$borrar = false;
		}

		$conexion->close();
		
		return $borrar;
   }
	 
	
	function modificarAlumno($dni,$nombre,$apellido,$correo,$notafinal)
	{
		$conexion = conectarDB();
		
		$query = "UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido',correo = '$correo', notafinal = '$notafinal' WHERE 
			dni = '$dni'";

		if($conexion->query($query) == true)
		{
			$mod = true;
		}
		else
		{
			$mod = false;
		}

		$conexion->close();

		return $mod;
	}				
								

?>