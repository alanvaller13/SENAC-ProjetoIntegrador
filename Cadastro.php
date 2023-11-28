<?php 
    require 'controller/conexao.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
    
        $sql = "INSERT INTO usuario(nome,senha) VALUES (?,?)";
        $insert = $conn->prepare($sql);
        $insert->bind_param("ss",$usuario, $senha);
    
        if($insert->execute()){
            echo "Usuario cadastrado com sucesso!";
        }
        else{
            echo "Erro ao cadastrar usuario: ". $conn->error;
        }
        $insert->close();
    }
    
    $conn->close();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
     <form action="PaginaLogin.php" method="POST">
        <label for="Usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="Senha">Senha:</label>
        <input type="passowrd" id="senha" name="senha" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>