<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Entre em contato!</title>
        <link rel="icon" type="icon" href="../IMG/Logo.png">
        <link rel="stylesheet" type="text/css" href="Contato.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function mensagemEnvioEmail(){
                Swal.fire({
                    title: "Sucesso!",
                    text: "Email enviado!",
                    icon: "success",
                    timer: 3000,
                    timerProgressBar: true,
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.href = '/aulas/projeto_integrador/SENAC-ProjetoIntegrador';
                        }
                    });
            };
        </script>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <a class="navbar-brand" href="../index.html"><img src="../IMG/Logo.png" width="40" height="40"></a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Política</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Entretenimento</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Esporte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Tempo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Tecnologia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Contato/Contato.html" style="color: #ffffff;">Contatos</a>
                </li>
              </ul>
              <div class="text-center" style="margin-bottom:0">
        
              </div>
            </div>
            <a class="nav-link" href=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                <path
                  d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
              </svg></a>
            <form class="d-flex">
        
              <input class="form-control me-2" type="text" placeholder="Pesquisar">
              <button class="btn btn-primary" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-search"
                  viewBox="0 0 16 16">
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
              </button>
            </form>
          </nav>

        <main>
            <div class="formulario">
                <form action="Contato.php" method="post">
                    <div class="campos">
                        <label>Digite o assunto do seu contato:</label>
                        <br>
                        <input name="assunto" id="assunto" type="text" required>
                    </div>
                    
                    <div class="campos">
                        <label>Descreza a razão do seu contato:</label>
                        <br>
                        <input name="mensagem" id="mensagem" type="text" required>
                    </div>

                    <div class="campos">
                        <label>Deixe sua crítica construtiva a nós!</label>
                        <br>
                        <input name="critica" id="critica" type="text">
                    </div>
                    
                    <div class="campos">
                        <ul class="feedback">
                          <label id="feedback">Como você se sentiu utilizando nossos serviços?</label>
                          <div class="teste">
                            <li class="star-icon ativo" data-avaliacao="1"></li>
                            <li class="star-icon" data-avaliacao="2"></li>
                            <li class="star-icon" data-avaliacao="3"></li>
                            <li class="star-icon" data-avaliacao="4"></li>
                            <li class="star-icon" data-avaliacao="5"></li>
                          </div>
                        </ul>
                    </div>
                
                    <button id="enviar" type="submit">Enviar</button>
                </form>
            </div>
            <script>
              var stars = document.querySelectorAll('.star-icon');
                  document.addEventListener('click', function(e){
                    var classStar = e.target.classList;
                    if(!classStar.contains('ativo')){
                      stars.forEach(function(star){
                        star.classList.remove('ativo');
                      });
                      classStar.add('ativo');
                      console.log(e.target.getAttribute('data-avaliacao'));
                    }
                  });
            </script>
        </main>
    </body>
</html>

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
    echo '<script>  mensagemEnvioEmail(); </script>';
}else{
    echo 'Ops! Algo deu errado.';
    echo '<br>';
    echo $email -> ErrorInfo;
}

$email -> smtpClose();

?>