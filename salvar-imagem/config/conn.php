<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'db_senac_news';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}