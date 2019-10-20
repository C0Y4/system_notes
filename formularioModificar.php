<?php

   include('includes/header.php');
	include('includes/footer.php');

?>

<div id="formulario">

<div id="titulo" >
	<h3> Cargar DNI a Modificar/Eliminar </h3>
</div>

<div>

<form action="validarModificacion.php" method="POST">

<input class="campo-trans" placeholder="DNI" type="text" name="dni2" required maxlength="10">
<br>

	<?php
    if (isset($_GET['error'])){
      {
      echo "<p style='color: red;'>";
      switch ($_GET['error'])
      {
		case '1':
		echo "DNI no existe, Vuelva a ingresar!";
		break;
      case '2':
      echo "Vuelva a ingresar el DNI!";
      break;
            
      }}}
      
      echo "</p>";

?>

<input id="boton-enviar" type="submit" value="Confirmar" >
<br><br>

</form>
</div>

</div>

<div id="icono">

<a title ="Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>

</div>
