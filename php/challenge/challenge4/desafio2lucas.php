<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 2 - Lucas - Aula 03</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Desafio 2 - Organização de Números e Fatoriais</h4>
        </div>

        <div class="card-body">

<?php

$pares = [];
$impares = [];
$primos = [];

for ($i = 1; $i <= 15; $i++) {

    if ($i % 2 == 0) {
        $pares[] = $i;
    } else {
        $impares[] = $i;
    }

    $ehPrimo = true;

    if ($i <= 1) {
        $ehPrimo = false;
    }

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        $primos[] = $i;
    }
}

?>

            <h5>Números Pares</h5>
            <p class="text-success">
                <?php echo implode(", ", $pares); ?>
            </p>

            <h5>Números Ímpares</h5>
            <p class="text-warning">
                <?php echo implode(", ", $impares); ?>
            </p>

            <h5>Números Primos e seus Fatoriais</h5>

            <ul class="list-group">

<?php

foreach ($primos as $numero) {

    $fatorial = 1;
    $contador = $numero;

    while ($contador > 1) {
        $fatorial *= $contador;
        $contador--;
    }

    echo "<li class='list-group-item'>";
    echo $numero . "! = " . $fatorial;
    echo "</li>";
}

?>

            </ul>

        </div>
    </div>

</div>

</body>
</html>