<?php

    include_once("templates/topo.php");
    include_once("templates/menu.php");

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "conteudo.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
    include_once("templates/rodape.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Oficina</title>
    <!-- Link para o CSS -->
    <link rel="stylesheet" href="style.css"> <!-- Importante -->
</head>
<body>
    <header>
        <h1>Bem-vindo à Oficina</h1>
    </header>
    <main>
        <h2>Nossos Serviços</h2>
        <div class="service-card">
            <h3>Troca de Óleo</h3>
            <p>Realizamos a troca de óleo com máxima eficiência.</p><n>
            <h3>Troca de Motor</h3>
            <p>Realizamos a troca de motor com máxima eficiência.</p>
        </div>
        
    </main>
    <footer>
        <p>© 2024 Oficina de Motos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>




