<?php
// Arquivo: view/produto/produtoInsert.php

require_once '../../config/db.php';
require_once '../../model/Produto.php';

if ($_POST) {
    // Conexão com a base de dados
    $database = new Database();
    $db = $database->getConnection();

    // Instancia o objeto Produto
    $produto = new Produto($db);

    // Define os atributos do produto com os valores do formulário
    $produto->pro_nome = $_POST['pro_nome'];
    $produto->pro_descricao = $_POST['pro_descricao'];
    $produto->pro_preco = $_POST['pro_preco'];

    // Tenta criar o produto
    if ($produto->create()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Não foi possível cadastrar o produto.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produto</title>
</head>
<body>
    <?php include '../../utils/menu.php'; ?>

    <h1>Inserir Produto</h1>
    
    <form action="produtoInsert.php" method="POST">
        <label for="pro_nome">Nome do Produto:</label>
        <input type="text" name="pro_nome" required><br><br>

        <label for="pro_descricao">Descrição do Produto:</label>
        <textarea name="pro_descricao" required></textarea><br><br>

        <label for="pro_preco">Preço do Produto:</label>
        <input type="number" step="0.01" name="pro_preco" required><br><br>

        <input type="submit" value="Inserir Produto">
    </form>

    <?php include '../../utils/footer.php'; ?>
</body>
</html>
