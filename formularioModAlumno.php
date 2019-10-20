<?php

include('includes/header.php');
include('includes/footer.php');


?>

<div id="alta">

<h3> DATOS DEL ALUMNO A MODIFICAR </h3>

	<p class="dato"> DNI: <?php echo $_SESSION['dni']; ?> </p>
	<p class="dato"> Nombre: <?php echo $_SESSION['nombre']; ?> </p>
	<p class="dato"> Apellido: <?php echo $_SESSION['apellido']; ?> </p>
	<p class="dato"> Correo Electronico: <?php echo $_SESSION['correo']; ?> </p>
	<p class="dato"> Nota Final: <?php echo $_SESSION['notafinal']; ?> </p>

</div>

  <?php
         
	  		if (isset($_GET['error']))
         {
         	echo "<br>";
            echo "<p style='color: red;'>";
            switch ($_GET['error'])
            {
			    case '1':
             		  echo "Completar Todos los datos";
             		  break;
             case '2':
             		  echo "Captcha incorrecto";
             		  break;
             case '3':
             		  echo "Vuelva a ingresar Nombre y Apellido";
             		  break;
             case '4':
             		  echo "Vuelva a ingresar el correo electronico"; 		  
           			  break;
				 case '5':
         	 		  echo "Las notas van entre 0 - 10";
         	 		  break;           
			
           
         }
			echo "</p>";         
         }
         
         ?>

<div id="formulario">
	
	<form action="validarModAlumno.php" method="POST">
	
	<p class="campo"> Ingresar Nombre: </p>
 	<input class="campo-trans" placeholder="Nombre" type="text" name="nombre" maxlength="15"required value="<?php echo $_SESSION['nombre'];?>">
 	<br>
 
 	<p class="campo"> Ingresar Apellido: </p>
 	<input class="campo-trans" placeholder="Apellido" type="text" name="apellido" maxlength="15" required value="<?php echo $_SESSION['apellido'];?>">
 	<br>
 
	<p class="campo"> Ingresar Correo Electronico: </p>
 	<input class="campo-trans" placeholder="Correo" type="text" name="correo" maxlength="30" required value="<?php echo $_SESSION['correo'];?>">
 	<br>
      
   <p class="campo"> Ingresar Calificacion Final: </p>
 	<input class="campo-trans" placeholder="Nota Final" type="text" name="notafinal" maxlength="2" required value="<?php echo $_SESSION['notafinal'];?>">
 	<br><br>
 	
	<img src='./captcha/captcha.php'>
	<br>
	<input class="captcha" type="text" name="captcha" maxlength="6">
	
 	<input id="boton-enviar" type="submit" value="Confirmar" >
	<br>

   </form>
   
</div>

<div id="icono">
		
	<a title="Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>

</div>	