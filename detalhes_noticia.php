<?php 
    require 'controller/conexao.php';

    $noticia_id = isset($_GET['id']) ? $_GET['id'] : 0;  


$sql = "SELECT * FROM noticia WHERE id_noticia = $noticia_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    echo "<h2>{$row['titulo']}</h2>";
    echo "<p>Tag: {$row['tag']}</p>";
    echo "<p>Data da Reportagem: {$row['data_reportagem']}</p>";
    echo "<p>Descrição: {$row['descricao']}</p>";
    echo "<p>Reportagem: {$row['reportagem']}</p>";
} else {
    echo "Notícia não encontrada.";
}


$conn->close();
?>