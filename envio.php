<?php
    $nombrep = $_POST["namef"];
    $temap = $_POST["affairf"];
    $correop = $_POST["mailf"];
    $mensajep = $_POST["messagef"];

    $destinop = "nico.acz21@gmail.com";
    $asuntop = "CORREO DESDE WP";

    $contenido = "De: " . $nombrep . "\nCorreo: " . $correop . "\nAsunto: " . $temap . "\nMensaje: " . $mensajep;

    mail($destinop,$asuntop,$contenido);
    echo "<script>alert('Correo enviado')</script>"
?>