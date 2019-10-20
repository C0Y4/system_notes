<?php

include('includes/header.php');
include('includes/footer.php');

?>

	<div id="titulo" >
   <h3> Cargar Datos del Alumno </h3>
	</div>
	   
	  <?php
         
	  		if (isset($_GET['error']))
         {
         	echo "<p style='color: red;'>";
            switch ($_GET['error'])
            {
			    case '1':
                    echo "Vuelva a ingresar el DNI";
                    break;
             case '2':
             		  echo "Captcha Incorrecto!";
             		  break;
             case '3':
             		  echo "Completar Todos los datos";
             		  break;
             case '4':
             		  echo "Vuelva a ingresar Nombre y Apellido";
             		  break;
             case '5':
             		  echo "Vuelva a ingresar el correo electronico"; 		  
         			  break;
         	 case '6':
         	 		  echo " Las notas van entre 0 - 10";
         	 		  break;           
         }
         
         echo "</p>";}
         
         ?>
         
	   
<div id="formulario">

<form action="validarDatosAlta.php" method="POST">   

	<p class="campo">Ingresar DNI:</p>  
	<input class="campo-trans" placeholder="DNI" type="text" name="dni" maxlength="10" required>
 	<br>
 
	<p class="campo"> Ingresar Nombre: </p>
 	<input class="campo-trans" placeholder="Nombre" type="text" name="nombre" maxlength="15"required>
 	<br>
 
 	<p class="campo"> Ingresar Apellido: </p>
 	<input class="campo-trans" placeholder="Apellido" type="text" name="apellido" maxlength="15" required>
 	<br>
 
	<p class="campo"> Ingresar Correo Electronico: </p>
 	<input class="campo-trans" placeholder="Correo" type="text" name="correo" maxlength="30" required>
 	<br><br>
      
   <p class="campo"> Ingresar Calificacion Final: </p>
 	<input class="campo-trans" placeholder="Nota Final" type="text" name="notafinal" maxlength="2" required>
 	<br><br>
      
   <img src='./captcha/captcha.php'>
	<br>
	<input class="captcha" type="text" name="captcha2" maxlength="6">
	<br><br>
	<input id="boton-enviar" type="submit" value="Confirmar" >
	<br>

</form>
</div>

<div id=icono>
	<a title= "Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>
</div>
