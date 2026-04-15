<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lucas Kirten - Desafio 2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h4 class="card-title mb-3">Resultado</h4>

            <?php
                $notas = [6, 6, 6, 6];

                $media = array_sum($notas) / count($notas);

                $media_formatada = number_format($media, 2, ',', '.');

                if ($media >= 7) {
                    $resultado = "Aprovado";
                } else {
                    $resultado = "Reprovado";
                }

                echo "<p><strong>Média:</strong> $media_formatada | $resultado</p>";
            ?>

        </div>
    </div>
</div>

</body>
</html>