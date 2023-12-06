<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-attachment: fixed;
            background-color: aliceblue;
            border: 70px solid aliceblue;
        }

        header {
            text-align: center;
            background-color: aliceblue;
            color: white;
            padding: 10px;
            font-size: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 1px ;
        }

        table {
            width: 40%;
            border-collapse: collapse;

            overflow: visible;
            background-color: aliceblue;

        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ADD8E6;
            color: black;
        }

        p {
            text-align: center;
            color: black;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            width: 60%;
            padding: 10px 20px;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #e6e6fa;
            transition: 0.7s;
        }

        .title {
            color: black;
        }

        .hero-body {
            border: 1px solid;

        }

        tbody {
            border: 1px;
        }
    </style>
</head>

<body>

    <section class="hero is-small is-primary" style="background-color:#ADD8E6; border-radius:10px">
        <div class="hero-body" style="background-color: #ADD8E6;border-radius:10px">
            <p class="level-item has-text-centered">
                <img src="IMG/Logo.png" alt="" style="height: 120px;">
            </p>
            <p class="title" style="color: black">
                Senac-News
            </p>
            <p class="subtitle" style="color:black">
                Gerenciamento de postagens
            </p>
        </div>
    </section>

    <br>

    <section> 

    <?php
    session_start();

    // include ' *ADICIONAR inclusão do Banco de dado*';

   
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
        header('Location: dashboard.php'); 
    }
    
    else{
        echo "Bem vindo, ".$_SESSION['Login']."!<br>";
        echo "<a classe='link' href='PaginaLogout.php'> Logout </a> <br>";
        echo "<a href='Pagina404.php'> Suporte </a> <br>";
    }
    
    ?>

    </section>

    <main>
        <tbody>
            <table>
                <tr>
                    <th colspan="3">
                        <p>OPÇÕES</p>
                    </th>
                </tr>
                <tr>
                    <td class="button-container">
                        <button class="button is-outlined" onclick="window.location.href='Noticias/cadastroNoticia.php'">Cadastrar Notícia</button>
                        <button class="button is-outlined" onclick="window.location.href='#'">Deletar Notícia</button>
                        <button class="button is-outlined" onclick="window.location.href='Noticias/mudarNoticia.php'">Atualizar Notícia</button>
                        <button class="button is-outlined" onclick="window.location.href='#'">Mostrar Noticias</button>
                    </td>
                </tr>

                <tr>
                    <td class="button-container">
                        <button class="button is-outlined" onclick="window.location.href='Noticias/cadastroNoticia.php'">Cadastrar Usuário</button>
                        <button class="button is-outlined" onclick="window.location.href='#'">Deletar Usuário</button>
                        <button class="button is-outlined" onclick="window.location.href='Noticias/mudarNoticia.php'">Atualizar Usuário</button>
                        <button class="button is-outlined" onclick="window.location.href='#'">Mostrar Usuário</button>
                    </td>
                </tr>
            </table>
        </tbody>
    </main>

</body>

</html>