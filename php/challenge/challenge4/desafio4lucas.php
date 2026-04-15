<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Desafio 4 - Lucas - Aula 03</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<?php

$alunos = [
    "Mariana" => [9.0, 9.5, 8.5],
    "Ricardo" => [6.0, 6.5, 5.5],
    "Carlos"  => [5.7, 6.0, 5.4],
    "Ana"     => [8.0, 7.5, 8.2]
];

$resultados = [];
$somaTurma = 0;

foreach ($alunos as $nome => $notas) {

    $media = array_sum($notas) / count($notas);

    $status = match (true) {
        $media >= 9   => "Aprovado com Excelência",
        $media >= 7   => "Aprovado",
        $media >= 5   => "Recuperação",
        default       => "Reprovado"
    };

    $resultados[] = [
        "nome"   => $nome,
        "media"  => round($media, 1),
        "status" => $status
    ];

    $somaTurma += $media;
}

usort($resultados, function ($a, $b) {
    return $b['media'] <=> $a['media'];
});

$mediaTurma = round($somaTurma / count($alunos), 1);

?>

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Ranking de Alunos</h3>
        </div>

        <div class="card-body">

            <table class="table table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>Posição</th>
                        <th>Aluno</th>
                        <th>Média</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php $posicao = 1; ?>

                    <?php foreach ($resultados as $aluno) : ?>

                        <tr>

                            <td><?= $posicao++ ?></td>

                            <td><?= $aluno['nome'] ?></td>

                            <td><?= $aluno['media'] ?></td>

                            <td>

                                <?php
                                    $cor = match ($aluno['status']) {
                                        "Aprovado com Excelência" => "success",
                                        "Aprovado" => "primary",
                                        "Recuperação" => "warning",
                                        default => "danger"
                                    };
                                ?>

                                <span class="badge bg-<?= $cor ?>">
                                    <?= $aluno['status'] ?>
                                </span>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

            <div class="alert alert-info mt-3">
                <strong>Média Geral da Turma:</strong> <?= $mediaTurma ?>
            </div>

        </div>

    </div>

</div>

</body>

</html>