<?php
 
include('./funciones/funcionesAlumno.php');

$lista = obtenerListado();
 
?>

<div id="cuerpo">
<div id="Listado">
<table style="width:100%">
 
 <td><p class="lista"> DNI: </p> </td>  
 <td><p class="lista"> Nombre: </p></td>
 <td><p class="lista"> Apellido: </p></td>
 <td><p class="lista"> Correo: </p></td>
 <td><p class="lista"> Nota Final: </p></td> 


<?php

foreach($lista as $l)
{
	
 ?>
 <tr>	 
 <td><?php echo $l['dni']; ?></td>  
 <td><?php echo $l['nombre']; ?></td>
 <td><?php echo $l['apellido']; ?></td>
 <td><?php echo $l['correo']; ?></td>
 <td><?php echo $l['notafinal']; 
 								
} ?></td>	

</tr>

</table>
</div>
</div>


<div id="icono">

<a title="Menu Principal" href="menuPrincipal.php"><img src="imagenes/menu.png" alt="menu" /></a>

<a title=" Modificar " href="formularioModificar.php" ><img src="imagenes/modi.png" alt="modificar"></a>

</div>
