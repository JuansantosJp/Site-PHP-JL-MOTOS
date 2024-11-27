<?php

    include_once("../SITE/config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO contato 
    (nome,email,assunto,mensagem) VALUES
    ('$nome','$email','$assunto','$mensagem')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Cliente cadastrado com sucesso.";
    }

    mysqli_close($conexao);