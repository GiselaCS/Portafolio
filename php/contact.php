<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Configura la información del correo electrónico
  $to = "giselacriollo16@gmil.com"; 
  $subject = "Nuevo mensaje de contacto";
  $body = "Nombre: " . $name . "\nCorreo electrónico: " . $email . "\nMensaje: " . $message;

  // Envía el correo electrónico
  if (mail($to, $subject, $body)) {
    // El correo se envió correctamente
    echo "¡Gracias por tu mensaje! Pronto nos pondremos en contacto contigo.";
  } else {
    // Ocurrió un error al enviar el correo
    echo "Lo sentimos, hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente más tarde.";
  }
}
?>