<?php
// Funções obrigatórias

function calcularSubtotal($preco, $quantidade): float {
    return $preco * $quantidade;
}

function aplicarDesconto($subtotal, $percentual): float {
    return $subtotal * ($percentual / 100);
}

function calcularFrete($subtotal): float {
    return ($subtotal > 200) ? 0 : 25;
}

// Recebendo dados via GET
$produto = $_GET['produto'] ?? '';
$preco = isset($_GET['preco']) ? floatval($_GET['preco']) : 0;
$quantidade = isset($_GET['quantidade']) ? intval($_GET['quantidade']) : 0;

$resultado = null;

if ($produto && $preco > 0 && $quantidade > 0) {

    $subtotal = calcularSubtotal($preco, $quantidade);
    $desconto = aplicarDesconto($subtotal, 5); // 5%
    $frete = calcularFrete($subtotal);
    $total = $subtotal - $desconto + $frete;

    $resultado = [
        'produto' => htmlspecialchars($produto),
        'quantidade' => $quantidade,
        'subtotal' => $subtotal,
        'desconto' => $desconto,
        'frete' => $frete,
        'total' => $total
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Simulador de Carrinho</h2>

    <!-- Formulário -->
    <form method="GET" class="card p-4 mb-4">
        <div class="mb-3">
            <label class="form-label">Produto</label>
            <input type="text" name="produto" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <!-- Resultado -->
    <?php if ($resultado): ?>
        <div class="card p-4">
            <h4>Resumo do Pedido</h4>
            <p><strong>Produto:</strong> <?= $resultado['produto'] ?></p>
            <p><strong>Quantidade:</strong> <?= $resultado['quantidade'] ?></p>
            <p><strong>Subtotal:</strong> R$ <?= number_format($resultado['subtotal'], 2, ',', '.') ?></p>
            <p><strong>Desconto (5%):</strong> - R$ <?= number_format($resultado['desconto'], 2, ',', '.') ?></p>
            <p><strong>Frete:</strong>
                <?= $resultado['frete'] == 0 ? 'Grátis' : 'R$ ' . number_format($resultado['frete'], 2, ',', '.') ?>
            </p>
            <hr>
            <h5><strong>Total:</strong> R$ <?= number_format($resultado['total'], 2, ',', '.') ?></h5>
        </div>
    <?php endif; ?>

</div>

</body>
</html>