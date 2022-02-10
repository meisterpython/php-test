<html>
<head>
    <title>PANEL del Portal Web Institucional</title>
    <style>
        body{width:800px;margin:auto;background-color:#222;color:#aaa;padding-top:100px;text-align:center;}
    </style>
</head>
<body>


    <h1>PANEL DEL PORTAL WEB INSTITUCIONAL</h1>
	INGRESE EL CODIGO DE ADMINISTRADOR</br>
	<form action="loginpanel.php" method="POST"><input type="password" id="clave" name="clave" /><td><input type="submit" value="Ingresar" /></td></form>

<?php 
	
	$admin = isset($_POST['clave']) ? $_POST['clave'] : 0 ;
	if ($admin!=''){
	include('conexion.php');
	$consulta = "SELECT admin FROM admin WHERE admin='".$admin."'";
	$resultado = mysql_query($consulta);		
	$fila=mysql_fetch_array($resultado);
	mysql_close();
	if($admin == $fila['admin']){
	echo "</br></br></br></br><p>BIENVENIDO ADMIN";
	header("refresh:1;url=panel.php");
	}
	}
?>

</body>
</html>