<?php

    include_once "sessao.php";

    if (logado()) {
        // Usuário está logado
        echo "<p>Bem-vindo <b>$_SESSION[usuario]</b>!</p>";
    } else {
        header("Location: form_login.php");
        exit();
    }

?>
   
   <h1>Painel Admin </h1>
    <nav>
        <a href="?pg=conteudo">Inicio</a> |
        <a href="?pg=lista_msg">Listar Mensagens</a> |
        <a href="?pg=lista_clientes">Clientes</a> |
    </nav>

<?php


    if(empty($_SERVER['QUERY_STRING'])){
        $var = "<h2>Página inicial</h2>";
        echo $var;
        //include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
