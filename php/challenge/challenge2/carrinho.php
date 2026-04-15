<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho</title>
</head>
<body>

<h1>Seu Carrinho</h1>

<?php
if (!empty($_SESSION['carrinho'])) {
    echo "<ul>";
    foreach ($_SESSION['carrinho'] as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Carrinho vazio.</p>";
}
?>

<a href="produtos.php">Voltar aos produtos</a><br>
<a href="limpar.php">Limpar carrinho</a>

</body>
</html>