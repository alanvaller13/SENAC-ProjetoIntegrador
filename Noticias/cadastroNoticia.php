
<?php
require '../controller/conexao.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $categoria = $_POST['Categorias'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $tag = $_POST ['tag'];
    $reportagem = $_POST ['reportagem'];
    

    $sql = "INSERT INTO noticia (fk_categorias_id_categoria,titulo,descricao,tag,reportagem,data_reportagem) VALUES (?, ?, ?, ?, ?,now())";
    $insert = $conn->prepare($sql);
    $insert->bind_param("issss",$categoria,$titulo, $descricao,$tag,$reportagem);

    if($insert->execute()){
        echo " Manchete adicionada com sucesso!";
    }
    else{
        echo "Erro ao criar manchete: ". $conn->error;
    }
    $insert->close();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
  <body>
    <h2>Cadastrar Noticia</h2>
        <form action="#" method="post">
        
        <label for="">Categoria:</label>
        <select name="Categorias" id="categorias" required>
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
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea required><br>
            <br>
            <label for="tag">Tag: </label>
            <input type="text" name="tag" id="tag" required>
            <br>
            <label for="reportagem">Reportagem: </label>
            <textarea name="reportagem" id="reportagem" cols="30" rows="10"></textarea required><br>
            <br>
           

         
            <input type="submit" value="Adicionar Noticia">
    
        </form>
  </body>
</html>
