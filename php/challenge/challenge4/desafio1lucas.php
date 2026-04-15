<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Desafio 1 - Lucas - Aula 03</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<?php

$produtos = [
    [
        "nome" => "Celular",
        "quantidade" => 10,
        "preco" => 1500,
        "categoria" => "Eletrônicos"
    ],
    [
        "nome" => "Geladeira",
        "quantidade" => 5,
        "preco" => 3500,
        "categoria" => "Eletrodomésticos"
    ],
    [
        "nome" => "Sofá",
        "quantidade" => 3,
        "preco" => 1200,
        "categoria" => "Móveis"
    ],
    [
        "nome" => "Notebook",
        "quantidade" => 7,
        "preco" => 4000,
        "categoria" => "Eletrônicos"
    ]
];

$totalEstoque = 0;
$somaPrecos = 0;
$categorias = [];

foreach ($produtos as $produto) {

    $totalEstoque += $produto['quantidade'] * $produto['preco'];
    $somaPrecos += $produto['preco'];

    $categoria = $produto['categoria'];

    if (isset($categorias[$categoria])) {
        $categorias[$categoria]++;
    } else {
        $categorias[$categoria] = 1;
    }
}

$mediaPrecos = $somaPrecos / count($produtos);

arsort($categorias);
$categoriaMaisPresente = array_key_first($categorias);

?>

    <div class="container py-5">

        <h2 class="text-center mb-4">
            📦 Sistema de Gerenciamento de Estoque
        </h2>

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                Lista de Produtos
            </div>

            <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($produtos as $produto): ?>

                            <tr>
                                <td>
                                    <?= $produto['nome'] ?>
                                </td>

                                <td>
                                    <?= $produto['quantidade'] ?>
                                </td>

                                <td>
                                    R$ <?= number_format($produto['preco'], 2, ",", ".") ?>
                                </td>

                                <td>
                                    <?= $produto['categoria'] ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-md-4">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>💰 Valor Total do Estoque</h5>

                        <p class="fs-4 text-success">
                            R$ <?= number_format($totalEstoque, 2, ",", ".") ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>📊 Média de Preços</h5>

                        <p class="fs-4 text-primary">
                            R$ <?= number_format($mediaPrecos, 2, ",", ".") ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card text-center shadow">

                    <div class="card-body">

                        <h5>🏷 Categoria Mais Presente</h5>

                        <p class="fs-4 text-danger">
                            <?= $categoriaMaisPresente ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>