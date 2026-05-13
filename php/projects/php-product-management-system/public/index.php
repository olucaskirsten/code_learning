<?php

require_once __DIR__ . '/../src/autoload.php';

use App\Database\Connection;
use App\Repository\ProductRepository;

$repository = new ProductRepository(Connection::getConnection());
$products = $repository->findAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <p><a href="create.php">Create new product</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['nome']) ?></td>
                    <td>$<?= number_format((float) $product['preco'], 2) ?></td>
                    <td><?= htmlspecialchars($product['quantidade']) ?></td>
                    <td><a href="details.php?id=<?= urlencode($product['id']) ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
