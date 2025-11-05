<?php
require_once "config.inc.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM clientes WHERE id = ?";
    
    $stmt = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    mysqli_stmt_execute($stmt);
    
    $resultado = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($resultado) > 0) {
        $cliente = mysqli_fetch_array($resultado);
?>

<h2>Alteração de Cliente</h2>
<form action="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    
    <label>Nome:</label>
    <input type="text" name="cliente" value="<?=$cliente['cliente']?>"><br>
    
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?=$cliente['cidade']?>"><br>
    
    <label>Sigla do Estado</label>
    <input type="text" name="estado" value="<?=$cliente['estado']?>"><br>

    <input type="submit" value="Alterar cliente">
</form>

<?php
    } else {
        echo "<h2>Cliente não encontrado.</h2>";
    }
}
?>