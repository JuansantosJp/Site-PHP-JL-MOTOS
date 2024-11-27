<h1>Painel Admin</h1>
<nav>
    
    <a href="#"> Página Inicial </a> |
    <a href="?pg=lista_msg">Lista de Mensagens </a> |
    
  
</nav>
<?php

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "conteudo.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }