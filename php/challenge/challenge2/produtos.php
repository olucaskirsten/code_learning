<?php
session_start();

$produtos = ["Notebook", "Mouse", "Teclado", "Monitor"];

if (isset($_GET['add'])) {
    $produto = $_GET['add'];

    $_SESSION['carrinho'][] = $produto;

    header("Location: produtos.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>

<h1>Lista de Produtos</h1>

<ul>
    <?php foreach ($produtos as $p): ?>
        <li>
            <?php echo $p; ?> 
            <a href="?add=<?php echo $p; ?>">Adicionar ao carrinho</a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="carrinho.php">Ver Carrinho</a>

</body>
</html>