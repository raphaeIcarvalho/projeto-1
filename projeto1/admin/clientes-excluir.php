<?php
   
   require_once "config.inc.php";

    if (!isset($_GET['id']) || empty($_GET['id'])) {

        echo "<br><a href='?pg=clientes-admin'>Voltar</a>";
        exit; 
    }

    $sql = "DELETE FROM clientes WHERE id = ?";

    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $_GET['id']);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h2>Registro excluído com sucesso!</h2>";
            echo "<br><a href='?pg=clientes-admin'>Listar Clientes</a>";
        } else {

            echo "<h2>Erro ao excluir registro!</h2>";
            echo "<br><a href='?pg=clientes-admin'>Voltar</a>";

        }

        mysqli_stmt_close($stmt);

    } else {
        echo "<h2>Erro interno ao preparar a exclusão.</h2>";
        echo "<br><a href='?pg=clientes-admin'>Voltar</a>";
    }
?>