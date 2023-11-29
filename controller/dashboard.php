<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color:#F5F5DC;
        }

        header {
            text-align: center;
            background-color: #4CAF50;
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
            border-radius:10px;
        }

        table {
            width: 40%;
            border-collapse: collapse;
            border-radius: 10px, solid black;
            overflow: hidden;
            background-color: rgb(220, 220, 220);
            border:1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        p {
            font-family:'sans-serif';
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
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

<header>
    <p>Administração!</p>
</header>

<main>
    <table>
        <tr>
            <th colspan="3"><p style= 'font-family: "sans-serif"'>OPÇÕES</p></th>
        </tr>
        <tr>
            <td class="button-container">
                <button onclick="window.location.href='#'">Cadastrar Notícia</button>
                <button onclick="window.location.href='#'">Deletar Notícia</button>
                <button onclick="window.location.href='#'">Atualizar Notícia</button>
            </td>
        </tr>
    </table>
</main>

</body>
</html>
