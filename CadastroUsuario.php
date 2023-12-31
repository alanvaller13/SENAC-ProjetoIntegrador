<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Área do Usuário</title>
    <link rel="stylesheet" href="CSS/styleLogin.css">
    <link rel="icon" type="image/x-icon" href="IMG/Logo.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function mensagemSucesso(){
            Swal.fire({
                title: "Sucesso!",
                text: "Usuário cadastrado!",
                icon: "success",
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        window.location.href = '/aulas/projeto_integrador/SENAC-ProjetoIntegrador/PaginaLogin.html';
                    }
                });
        };
    </script>
</head>

<body>
    <div class="container">
        <h1>CADASTRO</h1>
        <form action="" method="post">
            <label for="nome">Insira seu usuário: </label>
            <input type="text" id=username name="username" required placeholder="Usuario"/>
            <label for="senha">Insira sua senha: </label>
            <input type="password" id=password name="password" required placeholder="********"/>
            <label for="email">Insira seu E-mail: </label>
            <input type="email" id="email" name="email" required placeholder="E-mail"/>
            <input type="submit" value="Cadastrar" />
            <br>
            <br>
        </form>
    </div>
    <br>
</body>
</html>

<?php 
    require 'controller/conexao.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = $_POST['username'];
        $senha = $_POST['password'];
        $email =$_POST ['email'];
    
        $sql = "INSERT INTO usuario (nome,senha,email) VALUES (?,?,?)";
        $insert = $conn -> prepare($sql);
        $insert->bind_param("sss",$usuario, $senha, $email);
    
        if($insert -> execute()){
            echo '<script> mensagemSucesso(); </script>';
        }
        else{
            echo "Erro ao cadastrar usuario: ". $conn -> error;
        }
        $insert -> close();
    }
    
    $conn -> close();
    
?>