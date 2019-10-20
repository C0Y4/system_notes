
<?php

include('includes/header.php');
include('includes/footer.php');

?>

<div id="alta">

<h3> DATOS DEL ALUMNO CARGADO: </h3>

	<p class="dato"> DNI: <?php echo $_SESSION['dni']; ?> </p>
	<p class="dato"> Nombre: <?php echo $_SESSION['nombre']; ?> </p>
	<p class="dato"> Apellido: <?php echo $_SESSION['apellido']; ?> </p>
	<p class="dato"> Correo Electronico: <?php echo $_SESSION['correo']; ?> </p>
	<p class="dato"> Nota Final: <?php echo $_SESSION['notafinal']; ?> </p>

</div>

<div id="icono">
	
	<a title=" Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>
	<a title=" Modificar Alumno" href="formularioModAlumno.php"><img src="imagenes/modAlumno.png"/></a>
	<a title=" Borrar Alumno" href="borrarAlumno.php"><img src="imagenes/borrar.png" alt="borrar"/> </a>

</div>	

