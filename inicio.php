<?php 

include('encabezado.php');
include('conexion.php');
	$consulta = "SELECT nov_id, nov_titulo, nov_novedad, nov_imagen, nov_fecha FROM novedades ORDER BY nov_fecha DESC";
	$resultado = mysql_query($consulta);		
	while($fila=mysql_fetch_array($resultado)){
?>

<div id="novedad">
    <h6><?php echo $fila['nov_titulo']; ?></h6></br>
	
	<?php
	if ($fila['nov_imagen']!=''){
	?>
    
	<img src="<?php echo $fila['nov_imagen']; ?>" width="100px" height="auto" alt="Imagen del Portal Web" /></br>
	
	<?php
	}
	
	?>
    <p><?php echo $fila['nov_novedad']; ?></p>
</div>

<?php 
}

mysql_close();
?>


<div id="links">
	<div id="gooyou">
		<!-- Búsqueda Google -->

		<table>
			<tr>
				<td>
					<form method="GET" action="http://www.google.com.ar/search" target="_blank">
					<img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google"><br />
					<input type="text" name="q" size="40" value="">
					<input type="hidden" name="hl" value="es"><br />
					<input type="submit" name="btnG" value="B&uacute;squeda Google">
					</form>
				</td>
			</tr>
		</table>
	</div>


<!-- Búsqueda Google -->

	<a href="http://www.clarin.com.ar" target="_blank">Clar&iacute;n</a>
	<a href="http://www.lanacion.com.ar" target="_blank">La Naci&oacute;n</a>
	<a href="http://www.infobae.com" target="_blank">Infobae</a>
	<a href="http://www.pagina12.com.ar" target="_blank">P&aacute;gina 12</a>
	<a href="http://www.minutouno.com/contenidos/home.html" target="_blank">Minuto Uno</a>
	<a href="http://www.ambito.com" target="_blank">&Aacute;mbito</a>
	<a href="http://www.ole.com.ar" target="_blank">Ol&eacute;</a>
	<a href="http://taringa.net" target="_blank">Taringa!</a>
	<a href="https://www.google.com.ar/" target="_blank">Google</a>
	<a href="https://espanol.yahoo.com/" target="_blank">Yahoo</a>
	<a href="http://www.msn.com/es-ar/" target="_blank">MSN</a>







<!--cotizacion-dolar.com.ar
120x125px classic CD--> <div style="border: 1px solid
rgb(90, 90, 90); background: rgb(176, 180, 160) none repeat scroll 0%
50%; text-align: center; width:
120px; height: 120px; line-height: 100%;" align="center">
<script type="text/javascript" language="JavaScript1.1"
src="http://www.cotizacion-dolar.com.ar/
recursos-webmaster/classic-cd/dolar_euro_120x120_orange.js">
</script><small><a style="border:
0px none ; font-size: 7pt; color: rgb(79, 0, 0); text-decoration: none;
font-family: sans-serif,Helvetica,Arial;"
href="http://www.cotizacion-dolar.com.ar" target="_blank"
title="Cotizaci&oacute;n actualizada del d&oacute;lar,
euro, real, peso uruguayo, peso chileno en
Argentina">COTIZACION DOLAR</a></small>
</div> <!-- fin c�digo -->                	

	
	<!-- www.TuTiempo.net - Ancho:210px - Alto:91px -->
<div id="TT_tiCE1kkkkddaCeGAjfuDzDzDDWuALEIFrt1tksioqkzImIG5G">El tiempo por Tutiempo.net</div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tiCE1kkkkddaCeGAjfuDzDzDDWuALEIFrt1tksioqkzImIG5G"></script>




<script type="text/javascript"
src="http://www.gifss.com/creaciones/calendarios/paisajeanimados/007/calendario.js"></script>










</div>

<?php
include('pie.php'); 
?>