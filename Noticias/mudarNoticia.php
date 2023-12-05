<?php 
    require '../controller/conexao.php';

 //UPDATE       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id_noticia'];
        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $tag = $_POST['tag'];
        $reportagem = $_POST['reportagem'];

        $stmt = $conn->prepare("UPDATE noticia SET categoria=?, titulo=?, descricao=?, tag=?, reportagem=? WHERE id=?");
        $stmt->bind_param("sssssi", $categoria, $titulo, $descricao, $tag, $reportagem, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Notícia atualizada com sucesso";
        } else {
            echo "Erro ao atualizar notícia: " . $stmt->error;
        }
    }

    //DELETE
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("DELETE FROM noticia WHERE id_noticia = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Notícia deletada com sucesso";
        } else {
            echo "Erro ao deletar notícia: " . $stmt->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <script>
    function preencherFormulario(id, categorias, titulo, descricao, tag, reportagem) {
        console.log("ID: " + id + ", Categorias: " + categorias + ", Titulo: " + titulo + ", Descricao: " + descricao + ", Tag: " + tag + ", Reportagem: " + reportagem);
        document.getElementById('id').value = id;
        document.getElementById('categorias').value = categorias;
        document.getElementById('titulo').value = titulo;
        document.getElementById('descricao').value = descricao;
        document.getElementById('tag').value = tag;
        document.getElementById('reportagem').value = reportagem;
    }
    function ConfirmarDelecao(id, titulo) {
        var resposta = confirm("Você tem certeza que deseja apagar a notícia com o título: " + titulo + "?");
        if (resposta) {
         window.location.href = "atualizarNoticia.php?id=" + id;
    }
}

</script>

</head>
<body>
    <h1>Atualizar noticia</h1>

    

    <form action="#" method="post">

        <input type="hidden" id="id" name="id">
        
            <label for="">Categoria:</label>
             <select name="Categorias" id="categorias">
            <?php $sql  = mysqli_query($conn, "select id_categoria,nome from categoria");?>
               <?php
              while($categoria = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $categoria['id_categoria'] ?>"><?php echo $categoria['nome']; ?></option>
                  <?php } ?>
                
            </select>
            <br>
            <br>
            
                <label for="titulo">Titulo: </label>
                <input type="text" id="titulo" name="titulo" required><br><br>
            <br>
                <label for="descricao">Descrição: </label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" required></textarea><br>
            <br>
                <label for="tag">Tag: </label>
                <input type="text" name="tag" id="tag" required>
            <br>
                <label for="reportagem">Reportagem: </label>
                <textarea name="reportagem" id="reportagem" cols="30" rows="10" required></textarea><br>
            <br>
           

         
            <input type="submit" value="Atualizar Noticia">
    
        </form> 


    <table>
            <tr>
                <th>Categoria</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Tag</th>
                <th>Data de Reportagem</th>
                <th>Reportagem</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
        <?php 

                


                $sql = "SELECT n.id_noticia,n.fk_categorias_id_categoria, N.titulo,N.descricao,n.tag ,n.data_reportagem,n.reportagem FROM noticia N left join categoria C on (n.fk_categorias_id_categoria=c.id_categoria)";
                $result = $conn->query($sql);
            

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                                <td>".$row['id_noticia']."</td>
                                <td>".$row['fk_categorias_id_categoria']."</td>
                                <td>".$row['titulo']."</td>
                                <td>".$row['descricao']."</td>
                                <td>".$row['tag']."</td>
                                <td>".$row['data_reportagem']."</td>
                                <td>".$row['reportagem']."</td>
                                <td><button onclick='preencherFormulario(".$row['id_noticia'].", \"".$row['fk_categorias_id_categoria']."\", \"".$row['titulo']."\", \"".$row['descricao']."\", \"".$row['tag']."\", \"".$row['reportagem']."\")'>Atualizar</button></td>
                                <td><button onclick='ConfirmarDelecao(" . $row['id_noticia'] . ", \"" . $row['titulo'] . "\")'>Deletar</button></td>
                            </tr>";
                    }
                }else{
                    echo "<tr><td colspan='3'>Nenhuma noticia cadastrada</td></tr>";
                }
                
               
                $conn->close();
        ?>
    </table>

</body>
</html>