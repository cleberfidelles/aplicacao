<?php

$nome = $_POST['nome'];
$to      = 'cleber.fidelles@qi.edu.br';
$subject = 'Novo contato';
$message = $nome;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);