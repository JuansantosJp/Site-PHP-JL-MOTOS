<?php
include_once("config.inc.php");


if (empty($_REQUEST['nome']) || empty($_REQUEST['email']) || empty($_REQUEST['assunto']) || empty($_REQUEST['mensagem'])) {
    echo "<h3>Erro: Todos os campos são obrigatórios.</h3>";
    exit;
}


if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "<h3>Erro: Formato de email inválido.</h3>";
    exit;
}

try {
    
    $stmt = mysqli_prepare($conexao, "INSERT INTO contato (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
    
    if ($stmt) {
       
        mysqli_stmt_bind_param($stmt, "ssss", 
            $_REQUEST['nome'],
            $_REQUEST['email'],
            $_REQUEST['assunto'],
            $_REQUEST['mensagem']
        );
        
       
        $success = mysqli_stmt_execute($stmt);
        
        if ($success) {
            echo "<h3>Mensagem enviada com sucesso.</h3>";
        } else {
            throw new Exception("Erro ao executar query: " . mysqli_stmt_error($stmt));
        }
        
        
        mysqli_stmt_close($stmt);
    } else {
        throw new Exception("Erro ao preparar query: " . mysqli_error($conexao));
    }
} catch (Exception $e) {
    
    error_log($e->getMessage());
    echo "<h3>Erro ao enviar mensagem. Por favor, tente novamente mais tarde.</h3>";
}


mysqli_close($conexao);