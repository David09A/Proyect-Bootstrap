<?php

$mail = $_POST['mail'];
$coment = $_POST['coment'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];

if (isset($mail, $coment) ) {
   $cabeceras = 'From: ' .$mail. "\r\n" .
             'Reply-To: ' .$mail. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

   $message = "Este mensaje fue envido por: " . $mail . " \r\n Mensaje: " . $coment . " \r\n Enviado el: ". date('d/m/Y', time());

   $message = wordwrap($message, 70, "\r\n");

   mail(
      "servicio@omnilifecol.com.co",
      "Contacto",
      $message,
      $cabeceras
   );

   header("Location:../index.html#contactus");
}else{header("Location:../index.html");}

if (isset($nombre, $email) ) {
   $cabeceras = 'From: ' .$email. "\r\n" .
             'Reply-To: ' .$email. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

   $message = "Hola, este es mi correo quiero el 5% de descuento: " . $email . " \r\n Nombre: " . $nombre . " \r\n Enviado el: ". date('d/m/Y', time());

   $message = wordwrap($message, 70, "\r\n");

   mail(
      "servicio@omnilifecol.com.co",
      "Suscripcion",
      $message,
      $cabeceras
   );

   header("Location:../index.html");
}else{header("Location:../index.html");}
