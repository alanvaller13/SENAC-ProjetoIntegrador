<?php 
    require '../controller/conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id_noticia'];
        $categoria=$_POST['categoria'];
        $titulo=$_POST['titulo'];
        $descricao=$_POST['descricao'];
        $tag=$_POST['tag'];
        $reportagem=$_POST['reportagem'];
 
    
        $sql="UPDATE noticia SET categoria='$categoria', titulo='$titulo',descricao='$descricao',tag='tag',reportagem='$reportagem'  WHERE id=$id";
    
        if($conn->query($sql)===TRUE){
            echo "Noticia Atualizada com sucesso";
        }
        else{
            echo "Erro ao atualizar noticia: ". $conn->error;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <script>
        function preencherFormulario(id,categorias,titulo,descricao,tag,reportagem){
            document.getElementById('id_noticia').value=id;
            document.getElementById('categorias').value=categorias;
            document.getElementById('titulo').value=titulo;
            document.getElementById('descricao').value=descricao;
            document.getElementById('tag').value=tag;
            document.getElementById('reportagem').value=reportagem;
        }
    </script>
</head>
<body>
    <h1>Atualizar noticia</h1>

    

    <form action="#" method="post">

        <input type="hidden" id="id_noticia" name="id_noticia">
        
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
                                <td><button onclick='preencherFormulario(".$row['id_noticia'].$row['fk_categorias_id_categoria'].", \"".$row['titulo']."\", \"".$row['descricao']."\", \"".$row['tag']."\", \"". $row['reportagem']."\")'>Atualizar</button></td>
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