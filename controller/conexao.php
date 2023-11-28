<?php 
    $servename = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'db_senac_news';

    $conn = new mysqli ($servename, $username, $password, $dbname);

        if($conn -> connect_error){
            echo 'Conexão Falhou '.$conn -> connect_error;
        }
        else{
            echo "Você está conectado.";
        }
?>
