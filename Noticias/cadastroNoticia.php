
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>

        body{
            font-family: 'Arial', sans-serif;
            margin: 0px;
            padding: 2% 25% 25% 25%;
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

    </style>
</head>
  <body>
    <div class="card bg-light text-dark">
    <h2 class="container p-3 my-3 bg-dark text-white">Cadastrar Noticia</h2>
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
            <textarea name="descricao" id="descricao" cols="92" rows="10"></textarea required><br>
            <br>
            <label for="tag">Tag: </label>
            <input type="text" name="tag" id="tag" required>
            <br>
            <label for="reportagem">Reportagem: </label>
            <textarea name="reportagem" id="reportagem" cols="92" rows="10"></textarea required><br>
            <br>
           

         
            <input type="submit" value="Adicionar Noticia">
    
        </form>
        </div>
  </body>
</html>
