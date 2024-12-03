<?php
include_once("../SITE/config.inc.php");

$id = isset($_GET['id']) ? $_GET['id'] : null; 

if ($id === null) {
    
    die("ID do cliente não fornecido.");
}


$sql = "SELECT * FROM contato WHERE id = $id";


$query = mysqli_query($conexao, $sql);


if (!$query) {
    
    die("Erro na consulta SQL: " . mysqli_error($conexao));
}


if (mysqli_num_rows($query) > 0) {
    
    while($contato = mysqli_fetch_array($query)) {
?>

<h3>Alterando dados do Cliente</h3>
<form action="?pg=altera_cliente" method="post">
    <input type="hidden" name="id" value="<?=$contato['id'];?>">
    Nome: <input type="text" name="nome" value="<?=$contato['nome'];?>"><br>
    E-mail: <input type="text" name="email" value="<?=$contato['email'];?>"><br> 
    Assunto: <input type="text" name="assunto" value="<?=$contato['assunto'];?>"><br> 
    Mensagem: <input type="text" name="mensagem" value="<?=$contato['mensagem'];?>"><br>
    <input type="submit" value="CADASTRAR">
</form>

<?php
   
}
} else {
    
    echo "Cliente não encontrado.";
}


mysqli_close($conexao);
?>
