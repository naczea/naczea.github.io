<?php

//Llamando a los input
$nombre = $_POST['namef'];
$correo = $_POST['mailf'];
$mensaje = $_POST['messagef'];

//Datos para el correo
$destino = "nico.acz21@gmail.com";
$asunto = $_POST['affairf'];

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
$mail = mail($destino,$asunto,$carta);
if($mail) {
    echo "<h4>MENSAJE ENVIADO<h4>";
}
?>