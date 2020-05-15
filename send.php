<?php

//Llamando a los input
$nombre = $_POST['namef'];
$correo = $_POST['mailf'];
$mensaje = $_POST['messagef'];

//Datos para el correo
$destino = "nicolas_correa98@outlook.com";
$asunto = $_POST['affairf'];

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//Enviando mensaje
mail($destino,$asunto,$carta);

?>