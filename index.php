<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Portal SENAC NEWS - Seu Ponto de Informação</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="icon" href="IMG/Logo.png">
  <link rel="stylesheet" href="CSS/style-cards.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <style>
    .container {
      display: flex;
      gap: 2px;
      width: 100%;
      flex-wrap: wrap;
      text-align: center;
    }

    h1 {
      font-size: 15x;
      text-align: center;
    }

    h3 {
      color: #FFF;
      margin-top: -10px;
      font-size: 17px;
      text-align: center;
    }

    .box {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-grow: 1 !important;
      flex-basis: 100px !important;
    }

    .boximg {
      height: 75%;
      width: 75%;
      border-radius: 8px;
    }

    .postagem {
      align-items: center !important;
      justify-content: center !important;
      margin-left: 4%;

    }

    .news {
      display: flex;
      gap: 2px;
      width: 100%;
      flex-wrap: wrap;
      text-align: center;
      border-radius: 20px;
    }

    .box2 {
      width: 45%;
      border-radius: 8px;
      align-items: center;
    }

    .boximg2 {
      max-width: 500px;
      border-radius: 8px;
      align-items: center;
    }

    .pagination {
      padding: 8px 16px;
      list-style: none;
      color: #fff;
      background-color: rgb(35, 114, 217) 107, 16;
      border-radius: 5px;
      justify-content: center;
    }
  </style>

</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="index.html"><img src="IMG/Logo.png" width="40" height="40"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Política</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Entretenimento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Esporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Tempo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" style="color: #ffffff;">Tecnologia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contato/Contato.html" style="color: #ffffff;">Contatos</a>
      </li>
    </ul>
    <div class="text-center" style="margin-bottom:0">

    </div>
  </div>
  <a class="nav-link" href="PaginaLogin.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
      fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
      <path
        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
    </svg></a>
  <form class="d-flex">

    <input class="form-control me-2" type="text" placeholder="Pesquisar">
    <button class="btn btn-primary" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-search"
        viewBox="0 0 16 16">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
      </svg>
    </button>
  </form>
</nav>
<header>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>

    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://www.gsuplementos.com.br/" target="_blank"><img src="IMG/growth.webp" width="100%" height="300%"
            alt="Growth"></a>
      </div>
      <div class="carousel-item">
        <a href="https://joacaba.sc.gov.br/" target="_blank"><img src="IMG/joaçaba.jpg" width="100%" height="300%"
            alt="Joaçaba"></a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <br>

  <section class="container">
    <section class="box">
      <div>
        <img class="boximg" src="IMG/artworks-aS7wofDIdqq3LqF6-GGirXg-t500x500.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>
    <section class="box">
      <div>
        <img class="boximg" src="IMG/images.jpg">
      </div>
    </section>

  </section>
</header>

<br>

<body>
    <div class="postagem">
    <h3> Notícias</h3>
    <div class="news">
        <?php 
              require 'controller/conexao.php';

              $sql = "SELECT * FROM noticia";
              $result = $conn->query($sql);
          
           
              if ($result->num_rows > 0) {
              
                  while ($row = $result->fetch_assoc()) {
                      echo "<div class='box2'>";
                 
                      echo "<h2>{$row['titulo']}</h2>";
                      echo "<p>{$row['descricao']}</p>";
                      echo "<a href='detalhes_noticia.php?id={$row['id_noticia']}' class='btn btn-primary'>Saiba mais</a>";
                      echo "</div>";
                  }
              } else {
                  echo "Nenhuma notícia encontrada.";
              }
          
          
              $conn->close();        
        ?>
  </div>

  <br>

  <div>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#"><<<</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
 
      <li class="page-item"><a class="page-link" href="#">>>></a></li>
    </ul>
  </div>

  <br>

  <section class="container">
    <section class="box">
      <div>
        <img class="box" 
        style="  width: 100%;" 
        src="IMG/images2.jpg">
      </div>
    </section>

    <section class="box">
      <div>
        <img class="box" 
        style="width: 100%;" 
        src="IMG/images2.jpg">
      </div>
    </section>
  </section>

  <br>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

<div class="jumbotron text-center" style="margin-bottom: 10px">
  <p>Todos os Direitos Reservados - 2023 - Projeto Integrador - Senac </p>
    <p>Criado por Alan, Jonas, Jean, Leonardo, Arthur, Carlos </p>
  </p>
</div>



</html>
