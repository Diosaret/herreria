
<?php
error_reporting (0);
$nombre = $_POST['nombre'];

$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$body = "Nombre: " . $nombre . "\nCorreo: " . $correo  . "\nMensaje:  " . $mensaje ;

$destinatario = "marycielooberto236@gmail.com";
$asunto = "Contato Fortare Taccarelli";


mail($destinatario, $asunto, $body);


 echo '<script>swal("Mensaje Enviado!", "Muchas Gracias por Contáctarnos"); </script>'
;
 




?>