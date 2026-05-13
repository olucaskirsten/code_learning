<?php

require_once __DIR__ . '/../src/autoload.php';

use App\Database\Connection;
use App\Repository\ProductRepository;

$repository = new ProductRepository(Connection::getConnection());
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $price = (float) ($_POST['price'] ?? 0);
    $quantity = (int) ($_POST['quantity'] ?? 0);

    if ($name === '' || $price <= 0 || $quantity < 0) {
        $message = 'Please fill in all fields correctly.';
    } else {
        $repository->create($name, $price, $quantity);
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    <?php if ($message): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>
            Name:<br>
            <input type="text" name="name" required>
        </label>
        <br><br>

        <label>
            Price:<br>
            <input type="number" name="price" step="0.01" min="0" required>
        </label>
        <br><br>

        <label>
            Quantity:<br>
            <input type="number" name="quantity" min="0" required>
        </label>
        <br><br>

        <button type="submit">Save product</button>
    </form>

    <p><a href="index.php">Back to product list</a></p>
</body>
</html>
