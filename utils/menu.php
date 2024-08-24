<?php
// Define o caminho base relativo ao documento atual
$base_url = dirname($_SERVER['PHP_SELF']);

// Corrige o caminho base se necessário
$base_url = rtrim($base_url, '/view/produto');

// echo dirname($_SERVER['PHP_SELF']);
// echo '<br>';
// echo $base_url;

// Gera o menu com links dinâmicos
?>
<nav>
    <ul>
        <li><a href="<?php echo $base_url; ?>/index.php">Início</a></li>
        <li><a href="<?php echo $base_url; ?>/view/produto/produtoInsert.php">Inserir Produto</a></li>
        <li><a href="<?php echo $base_url; ?>/view/produto/produtoSelectAll.php">Listar Produtos</a></li>
        
        <li><a href="<?php echo $base_url; ?>/view/produto/produtoDelete.php">Delete</a></li>
        <li><a href="<?php echo $base_url; ?>/view/produto/produtoDetail.php">Detalhes</a></li>
        <li><a href="<?php echo $base_url; ?>/view/produto/produtoUpdate.php">Update</a></li>
    </ul>
</nav>



