<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Calculadora de Desconto</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Calculadora de Desconto</h4>
        </div>

        <div class="card-body">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Preço Original (R$)</label>
                    <input type="text" name="preco" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Desconto (%)</label>
                    <input type="text" name="desconto" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Calcular
                </button>

            </form>

            <hr>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Casting
                $precoOriginal = (float) $_POST["preco"];
                $percentualDesconto = (float) $_POST["desconto"];

                // Cálculo
                $valorDesconto = ($precoOriginal * $percentualDesconto) / 100;
                $precoFinal = $precoOriginal - $valorDesconto;

                echo "<div class='alert alert-info'>";
                echo "Preço Original: R$ " . number_format($precoOriginal, 2, ',', '.') . "<br>";
                echo "Desconto Aplicado: $percentualDesconto% <br>";
                echo "Preço Final: R$ " . number_format($precoFinal, 2, ',', '.');
                echo "</div>";
            }

            ?>

        </div>
    </div>
</div>

</body>
</html>