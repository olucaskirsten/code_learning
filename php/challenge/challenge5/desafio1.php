<?php
// Função para calcular o IMC
function calcularIMC(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

// Função para classificar o IMC
function classificarIMC(float $imc): string
{
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 24.9) {
        return "Peso normal";
    } elseif ($imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc < 34.9) {
        return "Obesidade grau I";
    } elseif ($imc < 39.9) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III";
    }
}

// Inicialização
$resultado = null;

if (isset($_GET['nome'], $_GET['peso'], $_GET['altura'])) {
    $nome   = htmlspecialchars($_GET['nome']);
    $peso   = (float) $_GET['peso'];
    $altura = (float) $_GET['altura'];

    if ($peso > 0 && $altura > 0) {
        $imc           = calcularIMC($peso, $altura);
        $classificacao = classificarIMC($imc);

        $resultado = [
            'nome'          => $nome,
            'peso'          => $peso,
            'altura'        => $altura,
            'imc'           => number_format($imc, 2, '.', ''),
            'classificacao' => $classificacao
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Calculadora de IMC</h4>
        </div>

        <div class="card-body">
            <form method="GET">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Peso (kg)</label>
                    <input type="number" step="0.1" name="peso" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Altura (m)</label>
                    <input type="number" step="0.01" name="altura" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Calcular IMC
                </button>
            </form>
        </div>
    </div>

    <?php if ($resultado): ?>
        <div class="alert alert-info mt-4">
            <h5>Resultado do IMC</h5>
            <p><strong>Nome:</strong> <?= $resultado['nome']; ?></p>
            <p><strong>Peso:</strong> <?= $resultado['peso']; ?> kg</p>
            <p><strong>Altura:</strong> <?= $resultado['altura']; ?> m</p>
            <p><strong>IMC:</strong> <?= $resultado['imc']; ?></p>
            <p><strong>Classificação:</strong> <?= $resultado['classificacao']; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>