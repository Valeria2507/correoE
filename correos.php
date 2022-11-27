<?php
$destinatario = 'valeria.nio@misena.edu.co';
//este es el correo al que se enviara el destinatario

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];


$header='valeninobricenogmail.com';
$mensajeCompleto = $mensaje ." \nAtentamente: " .$nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo"<script>alert('Correo enviado exitosamente')</script>";
//echo"setTimeout<script>alert(\"location.href='formulario_contacto.php'\", 1000)</script>";

?>