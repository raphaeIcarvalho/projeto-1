<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $db_host = "localhost"; 
    $db_user = "root";      
    $db_pass = "";          
    $db_name = "projeto1"; 
    $conexao = new mysqli($db_host, $db_user, $db_pass, $db_name);

    $sql = "INSERT INTO contatos (nome, email) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);

    $stmt->execute(); 
 
    $stmt->close();
    $conexao->close();

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit;
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fale conosco</title>
</head>
<body class="bg-light">
<div class="container py-4">
    <h1 class="mb-4">Fale conosco</h1>

    <form action="" method="post" novalidate>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="seu@exemplo.com" required>
        </div>

        <button type="submit" class="btn btn-danger w-100">Enviar</button>
    </form>

</div>
</body>
</html>
