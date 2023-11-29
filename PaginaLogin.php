<?php

require 'controller/conexao.php';

session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = "SELECT nome, senha FROM usuario WHERE nome = '$username' AND senha = '$password';";
        $result = $conn -> query($select);

        $mensagem = "Login Incorreto";

        if($result -> num_rows > 0){
            session_start();
            $_SESSION['username'] = $username;
    
            header('Location: index.html');
        }else{
            header('Location: PaginaLogin.html');
        };
?>