<?php 

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];

// como se va a ver al llegar el email
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= " Su email es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";

$para = 'williamquintan221@gmail.com';
$asunto = 'este email se envio desde mi pagina web';

// funcio email
// a quien le mando el email
mail($para, $asunto, utf8_decode($mensaje), $header);


header('Location:exito.html');


?>