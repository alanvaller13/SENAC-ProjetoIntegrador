<?php
// Incluindo arquivo de conexão
<<<<<<< HEAD
require_once('../controller/conexao.php');
=======
require_once('config/conn.php');
>>>>>>> 2def140f936cc87d6bd9458fec9a14672806381f

$id = (int) $_GET['id'];

// Selecionando fotos
$stmt = $pdo->prepare('SELECT conteudo, tipo FROM fotos WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Se executado
if ($stmt->execute())
{
    // Alocando foto
<<<<<<< HEAD
    $foto = $stmt->fetch_Object();
=======
    $foto = $stmt->fetchObject();
>>>>>>> 2def140f936cc87d6bd9458fec9a14672806381f
    
    // Se existir
    if ($foto != null)
    {
        // Definindo tipo do retorno
        header('Content-Type: '. $foto->tipo);
        
        // Retornando conteudo
        echo $foto->conteudo;
    }
}