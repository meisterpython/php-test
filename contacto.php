<?php include('encabezado.php') ?>

<h3>CONTACTO</h3>
<div id="formcontacto">
<form action="gracias.php" method="post" name="contacto" id="contacto">
	<table>
	<tr>
		<td class="campo1">Usuario:</td>
		<td class="campo2"><input type="text" name="usuario" id="usuario" /></td>
	</tr>
	<tr>
		<td class="campo1">Sector:</td>
		<td class="campo2">
				<select name="sector">
				<option value="lucasotermin@gmail.com">Ventas</option>
				<option value="lucasotermin@gmail.com">Compras</option>
				<option value="lucasotermin@gmail.com">RRHH</option>
				<option value="lucasotermin@gmail.com">Sistemas</option>
			</select>
		</td>
	</tr>
	<td class="campo1">Asunto:<br /></td>
	<td class="campo2"><input type="text" name="asunto" id="asunto" /></td>
	<tr>
		<td class="campo1">Mensaje</td>
		<td class="campo2"><textarea name="mensaje" rows="8" cols="25" id="mensaje"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" height="40" class="botonera">
			<input name="button" type="submit" id="enviar" value="Enviar" />
            <input name="button2" type="reset" id="restablecer" value="Restablecer" />
		</td>
	</tr>
	</table>
</form>
</div>

<?php include('pie.php') ?>