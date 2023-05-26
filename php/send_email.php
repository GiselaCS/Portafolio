<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "giselacriollo16@gmail.com"; // Reemplaza con tu dirección de correo electrónico
  $subject = "Nuevo mensaje de contacto";
  $body = "Nombre: " . $name . "\nCorreo electrónico: " . $email . "\nMensaje: " . $message;

  if (mail($to, $subject, $body)) {
    echo "¡Gracias por tu mensaje! Pronto nos pondremos en contacto contigo.";
  } else {
    echo "Lo sentimos, hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente más tarde.";
  }
}
?>