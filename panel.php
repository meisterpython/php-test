
<?php 

include('encabezadopanel.php');

?>
<div id="carga_novedad">
	<a href="novedadpanel.php">CARGAR UNA NOVEDAD</a>
</div>
<table border="1px">
	<tr>
		<td>ID</td>
		<td>TITULO</td>
		<td>NOVEDAD</td>
		<td>IMAGEN</td>
		<td>FECHA</td>
		<td>EDITAR</td>
		<td>ELIMINAR</td>
	</tr>
<?php
include('conexion.php');
	$consulta = "SELECT nov_id, nov_titulo, nov_novedad, nov_imagen, nov_fecha FROM novedades ORDER BY nov_fecha DESC";
	$resultado = mysql_query($consulta);		
	while($fila=mysql_fetch_array($resultado)){
?>

	<tr>
		<td><?php echo $fila['nov_id'] ?></td>
		<td><?php echo $fila['nov_titulo'] ?></td>
		<td><?php echo $fila['nov_novedad'] ?></td>
		<td><?php echo $fila['nov_imagen'] ?></td>
		<td><?php echo $fila['nov_fecha'] ?></td>
		<td><a href="">EDITAR</a></td>
		<td><a href="">ELIMINAR</a></td>
	</tr>
	
	<?php
	}
	?>

</table>


<!--
EJEMPLOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO

<td><a href="form_editar.php?prd_id=<?php echo($fila['prd_id']); ?>"><img src="../imagenes/editar2.png" border="0" title="Editar" /></a></td>
				<td><a href="form_borrar.php?prd_id=<?php echo($fila['prd_id']); ?>"><img src="../imagenes/borrar.png" border="0" title="Borrar" /></a></td>

-->




<?php
mysql_close();
include('piepanel.php'); 
?>