<?php
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $message = $_POST['message'];
    $header = 'FROM: '.$mail.'\r\n';
    $header .="X-Mailer: PHP/". phpversion(). "\r\n";
    $header .="Mime-Version:1.0\r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este es un mensaje enviado por: ".$name."\r\n";
    $message .= "Su email es: ".$mail."\r\n";
    $message .= "Mensaje: ". $_POST['message']."\r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'jimday9@outlook.com';
    $asunto = 'Contratación por medio de mi sitio web';
    mail($para, utf8_decode($message),$header);
    header("Location:index.html");
?>