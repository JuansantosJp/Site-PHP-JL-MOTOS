<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #000;
            margin-top: 20px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        nav {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: #ccc;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #fff;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>
        <span>👤</span>Painel Admin
    </h1>
    <nav>
        <a href="#">Página Inicial</a> |
        <a href="?pg=lista_msg">Lista de Mensagens</a> |
        <a href="?pg=lista_clientes">Clientes</a>
    </nav>
    <div class="container">
        <?php
            if (empty($_SERVER['QUERY_STRING'])) {
                $var = "conteudo.php";
                include_once($var);
            } else {
                $pg = $_GET['pg'];
                include_once("$pg.php");
            }
        ?>
    </div>
</body>
</html>
