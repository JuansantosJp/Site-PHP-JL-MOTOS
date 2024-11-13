<h1>Painel Admin</h1>
<nav>
    <a href="#"> Página Inicial </a> |
    <a href="?page=lista_msg.php">Lista de Mensagens </a> |
</nav>
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'conteudo.php';
    include_once($page);
?>