<?php

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mensagemEmail = '
<html lang="pt-BR">
    <meta content="text/html" charset="ISO-8859-1">
    <h1>Descreva o assunto do seu contato</h1>
    <p>'.$_POST['assunto'].'</p>

    <h1>Descreva a razão do seu contato</h1>
    <p>'.$_POST['mensagem'].'</p>

    <h1>Deixe sua crítica construtiva a nós!</h1>
    <p>'.$_POST['critica'].'</p>
</html>';

$email = new PHPMailer();
$email -> isSMTP();
$email -> Host = "smtp.office365.com";
$email -> SMTPAuth = true;
$email -> Username = "testex1y2z3@outlook.com";
$email -> Password = "test1x2y3z";
$email -> SMTPSecure = "tls";
$email -> Port = 587;
$email -> Subject = $_POST['assunto'];
$email -> setFrom("testex1y2z3@outlook.com");
$email -> Body = utf8_decode($mensagemEmail);
$email -> addAddress('testex1y2z3@outlook.com');
$email -> isHTML(true);

if($email -> Send()){
    echo 'E-mail enviado com sucesso!';
}else{
    echo 'Ops! Algo deu errado.';
    echo '<br>';
    echo $email -> ErrorInfo;
}

$email -> smtpClose();

?>