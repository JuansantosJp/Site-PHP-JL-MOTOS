<?php

    include_once("../SITE/config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query(
        $conexao,
        "DELETE FROM contato WHERE id = $id"
    );

    if($sql){
        echo "<h3>Mensagem apagada com sucesso</h3>.";
    }else{
        echo "<h3>Falha na exclusão.</h3>";
    }

    mysqli_close($conexao);
