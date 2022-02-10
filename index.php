<html>
<head>
    <title>Portal Web Institucional</title>
    <style>
        body{width:800px;margin:auto;background-color:#222;color:#aaa;padding-top:100px;text-align:center;}
    </style>
</head>
<body>


    <h1>PORTAL WEB INSTITUCIONAL</h1>
	INGRESE SU LEGAJO</br>
	<form action="index.php" method="POST"><input type="password" id="clave" name="clave" /><td><input type="submit" value="Ingresar" /></td></form>

<?php 
	
	$legajo = isset($_POST['clave']) ? $_POST['clave'] : 0 ;
	if ($legajo!=''){
	include('conexion.php');
	$consulta = "SELECT legajo, nombre, apellido FROM usuarios WHERE legajo='".$legajo."'";
	$resultado = mysql_query($consulta);		
	$fila=mysql_fetch_array($resultado);
	mysql_close();
	if($legajo == $fila['legajo']){
	echo "</br></br></br></br><p>BIENVENIDO AL PORTAL WEB ".$fila['nombre']." ".$fila['apellido']."</p>";
	header("refresh:1;url=inicio.php");
	}
	}
?>

</body>
</html>