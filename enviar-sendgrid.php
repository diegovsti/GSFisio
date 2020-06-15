<?php

require "./sendgrid-php/sendgrid-php.php";

$email_site = "gessicaos@outlook.com";
$nome_site = "GSFisio";

$email_user = $_POST["email"];
$nome_user = $_POST["nome"];
$assunto = $_POST["assunto"];
$dia = $_POST["dia_atendimento"];
$hora = $_POST["dia_atendimento"];
$mensagem = $_POST["mensagem"];

$body_content = "";
foreach( $_POST as $field => $value) {
  if( $field !== "leaveblank" && $field !== "dontchange" && $field !== "enviar") {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= "$field: $value \n";
  }
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject("Formulário GSFisio");
$email->addContent("text/html", $body_content);

$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo "Caught exception: ". $e->getMessage() ."\n";
}