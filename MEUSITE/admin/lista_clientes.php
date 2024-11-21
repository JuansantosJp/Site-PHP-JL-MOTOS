<h2>Clientes</h2>

<p><a href="?pg=form_cliente">Cadastrar novo</a></p>

<?php

    include_once("../SITE/config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM cliente");

    while($tabela = mysqli_fetch_array(result: $sql)){
        echo "Nome: $tabela[nome] <br>";
        echo "E-mail: $tabela[email] <br>";
        echo "Assunto: $tabela[assunto] <br>";
        echo "Mensagem: $tabela[mensagem] <br>";
        echo "<a href=?pg=exclui_cliente&id=$tabela[id]><b>[X] Excluir cadastro</b></a> |";
        echo "<a href=?pg=form_altera_cliente&id=$tabela[id]><b>[v] Alterar cadastro</b></a> <br>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Deu ruim.";
    }

    mysqli_close($conexao);
