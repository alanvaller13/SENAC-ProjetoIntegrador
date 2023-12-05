<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'db_senac_news';

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception('Conexão Falhou ' . $conn->connect_error);
        }

        echo "Você está conectado.";
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }
?>

