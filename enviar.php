<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario ="cruzguzmans@gmail.com";
$asunto  = "Contacto desde la pagina WEB ";

$carta = "De : $nombre \n";
$carta .= "Correo : $correo \n";
$carta .= "Telefono : $telefono  \n";
$carta .=  "Mensaje: $mensaje";

mail($destinatario,$asunto,$carta);
header('Location:index.html');

?>