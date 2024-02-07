<?php

$nome = $_POST['nome'];
$to      = 'cleber.fidelles@gmail.com';
$subject = 'Novo contato';
$message = $nome;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
