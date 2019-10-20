
<div id="alta">

<h3> ALUMNO CARGADO ANTERIORMENTE! </h3>
<p> Documento ya existente!</p>
	
	<br>
	<p class="dato"> DNI: <?php echo $_SESSION['dni']; ?> </p>
	<p class="dato"> Nombre: <?php echo $_SESSION['nombre']; ?> </p>
	<p class="dato"> Apellido: <?php echo $_SESSION['apellido']; ?> </p>
	<p class="dato"> Correo Electronico: <?php echo $_SESSION['correo']; ?> </p>
	<p class="dato"> Nota Final: <?php echo $_SESSION['notafinal']; ?> </p>

</div>

<div id="icono">
	
	<a title=" Menu Principal "href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>
	<a title=" Modificar " href="formularioModificar.php" ><img src="imagenes/modi.png" alt="modificar"></a>

</div>