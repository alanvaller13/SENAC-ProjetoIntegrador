<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Relatorio das Noticias</h1>
    <div id="relatorio">
    </div>
</body>
</html>

<?php 

include 'conexao.php';
$sql = "SELECT id_noticia,titulo,tag,descricao,reportagem,data_reportagem";
$result = $conn->query($sql);
    echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Tag</th>
                    <th>descricao</th>
                    <th>reportagem</th>
                    <th>Data Reportagem</th>
                </tr>";
 if($result ->num_rows > 0){
    while($row = $result -> fetch_assoc()){

        echo " <tr>
                <td>".$row['id_noticia']."</td>
                <td>".$row['titulo']."</td>
                <td>".$row['tag']."</td>
                
        </tr>
        ";
    }
 }              

?>