<?php 
    require '../controller/conexao.php';

 //UPDATE       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $tag = $_POST['tag'];
        $reportagem = $_POST['reportagem'];

        $stmt = $conn->prepare("UPDATE noticia SET fk_categorias_id_categoria=?, titulo=?, descricao=?, tag=?, reportagem = ? WHERE id_noticia=?");
        $stmt->bind_param("issssi", $categoria, $titulo, $descricao, $tag, $reportagem, $id);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script>
    function preencherFormulario(id, categoria, titulo, descricao, tag, reportagem) {
        console.log("ID: " + id + ", categoria: " + categoria + ", Titulo: " + titulo + ", descricao: " + descricao + ", Tag: " + tag + ", Reportagem: " + reportagem);
        document.getElementById('id').value = id;
        document.getElementById('categoria').value = categoria;
        document.getElementById('titulo').value = titulo;
        document.getElementById('descricao').value = descricao;
        document.getElementById('tag').value = tag;
        document.getElementById('reportagem').value = reportagem;
    }
    function ConfirmarDelecao(id, titulo) {
        var resposta = confirm("Você tem certeza que deseja apagar a notícia com o título: " + titulo + "?");
        if (resposta) {
         window.location.href = "mudarNoticia.php?id=" + id;
    }
}

</script>
<style>
            body{
            font-family: 'Arial', sans-serif;
            margin: 0px;
            padding: 0% 25% 25% 25%;
            background-color: #f0f0f0;
            text-align:center;
            border-radius:50px;
            

            
        }
        label{
            display: block;
            margin-bottom: 10px;
            padding: 5px;
            text-align:center;
            font-family:comic;
            font-size: 30px;
        }
        input{
            width: 80%;
            padding: 10px;
            margin-bottom: 1px;
            box-sizing: border-box;
            text-align:center;

        }
        .table{

            padding: 5px;
            
        }


</style>

</head>
<body>
    <div class="card bg-light text-dark">
    <h1 class="container p-3 my-3 bg-dark text-white">Mudar noticia</h1>

    

    <form action="#" method="post">

        <input type="hidden" id="id" name="id">
        
        <label for="categoria">Categoria:</label>
<select name="categoria" id="categoria">
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
                <textarea name="descricao" id="descricao" cols="91" rows="10" required></textarea><br>
            <br>
                <label for="tag">Tag: </label>
                <input type="text" name="tag" id="tag" required>
            <br>
                <label for="reportagem">Reportagem: </label>
                <textarea name="reportagem" id="reportagem" cols="91" rows="20" required></textarea><br>
            <br>
           

         
            <input type="submit" value="Atualizar Noticia">
    
        </form> 

        </div> 
        <div class="table">
    <table class="table-bordered">
            <tr>
                <th>Id</th>
                <th>Categoria</th><br>
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
    </div>         
</body>
</html>