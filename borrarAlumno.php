<?php

	include('includes/header.php');
	include('includes/footer.php');
	include('funciones/funcionesAlumno.php');

?>

<br><br><br>

<?php
	if(borrarAlumno($_SESSION['dni'])){
			echo "<p style='color:white' 'text-aling:center'> TODOS LOS DATOS FUERON ELIMINADOS CORRECTAMENTE </p>";
	}
	else{ header('location:errorOperacion.php');
	}
			
?>

<div id=icono>
	<a title= "Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>
</div>
