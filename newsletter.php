<?php
$field_email = $_POST['email'];

$mail_to = 'adertojose@gmail.com';
$subject = 'Mensagem de um visitante do site '.$field_email;

$body_message .= 'E-mail: '.$field_email."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

$_SESSION['message'] = "E-mail enviado com sucesso!";
    header("Location: mensagem.html");
?>