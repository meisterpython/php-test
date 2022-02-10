<?php
//Capturamos datos enviados por el formulario
	$usuario=$_POST['usuario'];
	$mail=$_POST['sector'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];
//Configuramos datos de Email
	$destinatario="$mail,lucasotermin@gmail.com";
	$asunto="$asunto";
	$mensaje="Nombre: $usuario
Email: $mail
Consulta: $mensaje";
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers.= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers.= "From: $mail\r\n";
	header("refresh:3;url=inicio.php");
	//Enviamos el email
	mail($mail,$asunto,$mensaje,$headers);
//Personalizamos mensaje
	echo ("<div style=\"width:300px;text-align:center;background-color:#8cb411;padding:50px;font-family:trebuchet;font-weight:bold;border:1px solid #000;margin:auto;\">
	$usuario, gracias por contactarse. A la brevedad responder&eacute; su consulta.
	</div>");
	
?>
