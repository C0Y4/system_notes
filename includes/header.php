<?php
	
	include('funciones/validarsession.php');
	
?>

<html>
	<head>

		<meta charset="utf-8">
		<title>Programacion avanzada!</title>
    	<link rel="stylesheet" href="css/header.css">
      	<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/menuP.css"> 
		<link rel="stylesheet" href="css/formAlta.css"> 
		<link rel="stylesheet" href="css/alta.css"> 
		<link rel="stylesheet" href="css/listado.css"> 			 

	</head>


	<body background="imagenes/fondo2.jpg">
	
	<div id="header">
	 
	<a title="Inicio" href="./menuPrincipal.php"><img id="estudiante" src="imagenes/estudiante.png" height="50px" width="50px"/></a>	 
	 
	<h4> Usted se ha identificado como : <br><?php echo $_SESSION['user'] ?> </h4>
			 
	<a title="Salir" href="./funciones/logout.php"> 
	<img id="logout" src="imagenes/logout.png" alt="" height="50px" width="50px">
	</a>
	

	</div>


