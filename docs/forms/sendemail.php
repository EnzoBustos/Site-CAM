<?php
$name = @trim(stripslashes($_POST['name'])); 
$from = @trim(stripslashes($_POST['email'])); 
$subject = @trim(stripslashes($_POST['subject'])); 
$message = @trim(stripslashes($_POST['message'])); 
$to = "marcosmulari@usp.br";

$mensaje = "Nome: $name \nEmail: $from \nAssunto: $subject \nMensagem: $message";

$pagetitle = "Nova mensagem do site";

$headers = array();
$headers = "MIME-Version: 1.0";
$headers = "Content-type: text/plain; charset=\"utf-8\"\n";
$headers = "From: {$name} <{$from}>";
$headers = "Reply-To: <{$from}>";
$headers = "Subject: {$subject}";
$headers = "X-Mailer: PHP/".phpversion();
$headers = implode("\r\n", $headers);

mail($to, $pagetitle, $mensaje, $headers);

die();