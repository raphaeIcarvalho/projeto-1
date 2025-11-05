<?php

require_once "config.inc.php"; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cliente = mysqli_real_escape_string($conexao, $_POST["cliente"]);
    $cidade  = mysqli_real_escape_string($conexao, $_POST["cidade"]);
    $estado  = mysqli_real_escape_string($conexao, $_POST["estado"]);

    $sql = "INSERT INTO clientes (cliente, cidade, estado) 
            VALUES ('$cliente', '$cidade', '$estado')";

    $executa = mysqli_query($conexao, $sql);
    
    if($executa) {
        echo "<h2>Cadastro realizado com sucesso.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao cadastrar.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }

} else {
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}

mysqli_close($conexao); 
?>