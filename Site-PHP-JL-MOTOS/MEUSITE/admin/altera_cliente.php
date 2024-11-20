<?php

    include_once("../SITE/config.inc.php");

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['assunto'];

    // 3ª etapa
    $sql = "UPDATE cliente SET
    nome = '$nome', email = '$email',asunto = '$assunto',
    WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente alterado com sucesso.";
    }

    mysqli_close($conexao);
