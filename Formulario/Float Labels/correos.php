<?php
    $destinatario = 'sergiopin2220@gmail.com';
    // Este es el correo donde se enviara el mensaje

    $nombre = $_POST ['nombre'];
    $asunto = $_POST ['asunto'];
    $mensaje = $_POST ['mensaje'];
    $email = $_POST ['email'];

    $header = "Enviado desde la pagina personal";
    $mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail(destinatario, $asunto, $mensaje, $mensajecompleto, $header);
    echo"<script>alert('correo exitoso')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>