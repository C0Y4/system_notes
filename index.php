
<?php
	
  session_start();
	if(isset($_SESSION['logeado']))
	{
  		header("Location: menuPrincipal.php");
  } 

?>	

<html>
	<head>
  	   <title> Sistema de Notas </title>
  	   <link rel="stylesheet" href="css/estilo.css"> 
  	   <meta charset="UTF-8"> 
  </head>	


	<body background="imagenes/fondo2.jpg">
  	<div id="formulario">
        
 	<h1> Login </h1>
         
 	  <?php
         
  		if (isset($_GET['error']))
      {
       echo "<p style='color: red;'>";
       switch ($_GET['error'])
      {

      case '1':
      echo "Complete todos los campos";
      break;

      case '2':
      echo "El nombre de usuario y/o contraseña solo pueden contener
      caracteres alfanuméricos";
      break;

      case '3':
      echo "Nombre de usuario y/o contraseña incorrecto/s";
      break;

    	case '4':
	   echo "Captcha incorrecto! ";
	   break;
                
      default:
      echo "Error";
      break;
            }
            echo "</p>";
     
         }
     ?>
         
	<!-- Formulario!--> 
        
    <form action="procesoValidar.php" method = "POST">
        
  		<input class="boton-trans" placeholder="Usuario" type="text" name="user" required>
      <br><br>
      <input class="boton-trans" placeholder="Contraseña" type="password" name="password" required>
      <br><br>
      <img src='captcha/captcha.php'>
  		<br>
      <input class="captcha" type="text" name="captcha" maxlength="6">
  		<br><br>
  		<input id="boton-enviar" type="submit" value="Iniciar Sesión" >
  		<br><br>
   
 	  </form>
    
     </div>
</body>
</html>
