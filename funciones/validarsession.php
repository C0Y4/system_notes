<?php 

session_start();

if(!isset($_SESSION['logeado']) or $_SESSION['logeado'] <> true)
{	session_destroy();
	header('Location: ./index.php');
}
	
?>