<?php 
error_reporting(0); 
$nombre = $_POST['name']; 
$telefono = $_POST['telefono']; 
$mail= $_POST['email']; 
$comentario= $_POST['message']; 
$header = 'From: '.$nombre."\r\n"; 
 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "Su Telefono: " . $telefono . " \r\n"; 
$mensaje .= "consulta: " . $_POST['message'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = ''; 
$asunto = 'Consulta Para la  Maestra Luz Maria'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 
header('Location: index.html');
?> 