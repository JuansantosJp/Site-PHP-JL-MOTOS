<?php

    include_once("../SITE/config.inc.php");

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

     $sql = "UPDATE contato SET
    nome = '$nome', email = '$email', assunto = '$assunto', mensagem = '$mensagem' 
    WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente alterado com sucesso.";
    }

    mysqli_close($conexao);