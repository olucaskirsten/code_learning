<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 3 - Lucas - Aula 03</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<?php

$funcionarios = [

    [
        "nome" => "Carlos",
        "idade" => 22,
        "salario" => 2800
    ],

    [
        "nome" => "Ana",
        "idade" => 30,
        "salario" => 4500
    ],

    [
        "nome" => "João",
        "idade" => 35,
        "salario" => 7000
    ]

];

$totalIdade = 0;

$classificacaoContador = [
    "Júnior" => 0,
    "Pleno" => 0,
    "Sênior" => 0
];

foreach ($funcionarios as &$funcionario) {

    $salario = $funcionario["salario"];

    $nivel = match (true) {
        $salario < 3000 => "Júnior",
        $salario >= 3000 && $salario <= 6000 => "Pleno",
        $salario > 6000 => "Sênior"
    };

    $funcionario["nivel"] = $nivel;

    $classificacaoContador[$nivel]++;

    $totalIdade += $funcionario["idade"];
}

$idadeMedia = $totalIdade / count($funcionarios);

?>

<div class="card shadow">

    <div class="card-header bg-primary text-white">
        <h4>Funcionários</h4>
    </div>

    <div class="card-body">

        <?php foreach ($funcionarios as $f): ?>

            <p>
                <strong>Nome:</strong> <?= $f["nome"] ?> |
                <strong>Idade:</strong> <?= $f["idade"] ?> |
                <strong>Salário:</strong> R$ <?= number_format($f["salario"], 2, ',', '.') ?> |
                <strong>Nível:</strong> <?= $f["nivel"] ?>
            </p>

        <?php endforeach; ?>

        <hr>

        <h5>Idade Média: <?= number_format($idadeMedia, 2) ?> anos</h5>

        <hr>

        <h5>Quantidade por Classificação</h5>

        <ul>
            <li>Júnior: <?= $classificacaoContador["Júnior"] ?> funcionário(s)</li>
            <li>Pleno: <?= $classificacaoContador["Pleno"] ?> funcionário(s)</li>
            <li>Sênior: <?= $classificacaoContador["Sênior"] ?> funcionário(s)</li>
        </ul>

    </div>

</div>

</div>

</body>
</html>