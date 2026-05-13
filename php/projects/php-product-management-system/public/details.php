<?php

require_once __DIR__ . '/../src/autoload.php';

use App\Database\Connection;
use App\Repository\ProductRepository;

$id = (int) ($_GET['id'] ?? 0);
$repository = new ProductRepository(Connection::getConnection());
$product = $repository->findById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>

    <?php if (!$product): ?>
        <p>Product not found.</p>
    <?php else: ?>
        <ul>
            <li><strong>ID:</strong> <?= htmlspecialchars($product['id']) ?></li>
            <li><strong>Name:</strong> <?= htmlspecialchars($product['nome']) ?></li>
            <li><strong>Price:</strong> $<?= number_format((float) $product['preco'], 2) ?></li>
            <li><strong>Quantity:</strong> <?= htmlspecialchars($product['quantidade']) ?></li>
            <li><strong>Created at:</strong> <?= htmlspecialchars($product['criado_em']) ?></li>
        </ul>
    <?php endif; ?>

    <p><a href="index.php">Back to product list</a></p>
</body>
</html>
