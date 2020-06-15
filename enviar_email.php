<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "./sendgrid-php/sendgrid-php.php";

        $email_user = $_POST["email"];
        $nome_user = $_POST["nome"];
        $assunto = $_POST["assunto"];
        $dia = $_POST["dia_atendimento"];
        $hora = $_POST["dia_atendimento"];
        $mensagem = $_POST["mensagem"];

        $from = new SendGrid\Email(null, $email_user);
        $subject = $assunto;
        $to = new SendGrid\Email(null, "gessicaos@outlook.com");
        $content = new SendGrid\Content("text/html", $email_user + $nome_user + $assunto + $dia + $hora + $mensagem);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        echo $response->headers();
        echo $response->body();
        ?>
    </body>
</html>
