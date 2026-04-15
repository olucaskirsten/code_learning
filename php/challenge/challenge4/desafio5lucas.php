<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel de Vendas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<?php

$produtos = [
    ["nome" => "Notebook", "qtd" => 12, "preco" => 3500],
    ["nome" => "Mouse", "qtd" => 8, "preco" => 50],
    ["nome" => "Monitor", "qtd" => 5, "preco" => 1200],
    ["nome" => "Teclado", "qtd" => 15, "preco" => 150],
    ["nome" => "Fone", "qtd" => 20, "preco" => 325]
];

$totalFaturamento = 0;
$produtoMaisVendido = "";
$maiorQtd = 0;

foreach ($produtos as $p) {
    $faturamento = $p["qtd"] * $p["preco"];
    $totalFaturamento += $faturamento;

    if ($p["qtd"] > $maiorQtd) {
        $maiorQtd = $p["qtd"];
        $produtoMaisVendido = $p["nome"];
    }
}

$totalProdutos = count($produtos);

?>

    <h2 class="mb-4">Painel de Vendas</h2>

    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5>Total de Produtos</h5>
                    <h3><?php echo $totalProdutos; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5>Faturamento Total</h5>
                    <h3>
                        R$
                        <?php
                        echo number_format($totalFaturamento, 2, ",", ".");
                        ?>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5>Produto Mais Vendido</h5>
                    <h3>
                        <?php echo $produtoMaisVendido; ?>
                        (<?php echo $maiorQtd; ?>)
                    </h3>
                </div>
            </div>
        </div>

    </div>

    <table class="table table-striped table-hover">

        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Qtd</th>
                <th>Preço Unit.</th>
                <th>Faturamento</th>
            </tr>
        </thead>

        <tbody>

        <?php
        foreach ($produtos as $p) {

            $faturamento = $p["qtd"] * $p["preco"];

            $classe = "";

            if ($faturamento > 2000) {
                $classe = "table-success";
            } elseif ($faturamento < 500) {
                $classe = "table-danger";
            }
        ?>

            <tr class="<?php echo $classe; ?>">

                <td><?php echo $p["nome"]; ?></td>

                <td><?php echo $p["qtd"]; ?></td>

                <td>
                    R$
                    <?php
                    echo number_format($p["preco"], 2, ",", ".");
                    ?>
                </td>

                <td>
                    R$
                    <?php
                    echo number_format($faturamento, 2, ",", ".");
                    ?>
                </td>

            </tr>

        <?php
        }
        ?>

        </tbody>

    </table>

</div>

</body>
</html>