
<?php
session_start();

    if(isset($_POST['Usuario'])){
        $username = $_POST["Login"];
        $password = $_POST['Senha'];

        $mensagem="Login Incorreto";

    if($username=='Login' && $password=='Senha'){

        $_SESSION['loggedin'] = true;
        $_SESSION['Usuario'] = $_POST['Usuario'];

        ob_start();
        header('Location: PaginaInicial.php');
        ob_end_flush();
    }
    else{
        $mensagem="Login Incorreto";
    }
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>FAÇA SEU LOGIN</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/x-icon" href="IMG/v.png">
</head>

<body>

    <div class="container">
        <h1>LOGIN</h1>
        <form action="#" method="post">
            <label for="nome">Insira seu usuário: </label>
            <input type="text" id=Usuario name="username" required />
            <label for="senha">Insira sua senha: </label>
            <input type="password" id=login name="login" required />
            <input type="submit" value="Login" />
            <br>
            <br>
            <a class="a"> É novo por aqui?</a>
            <a href="#">Cadastrar Usuário</a>
            <br>
            <a class="a"> Perdeu o Acesso? </a>
            <a href="#">Recuperar Acesso</a>
        </form>

        <div id="boxphp">
        <?php
        if(isset($mensagem)){
            echo "<p class='echo-output'><h1>" .$mensagem. "</h1></p>";
        }
        ?>
        </div>

    </div>

    <br>

<div class='conexao'>

<?php 
$servename = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'Avaliacao';

$conn = new mysqli ($servename, $username, $password, $dbname);

if($conn -> connect_error){
    echo 'Conexão Falhou '.$conn -> connect_error;
}
    else{
        echo "Você está conectado.";
        echo "<br> <b> Banco de Dado via MySQL </b>";
        echo" <br>Conexão local <br>";
}
?>
</div>

</body>
</html>