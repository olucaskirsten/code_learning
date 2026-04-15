<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lucas Kirten - Desafio 1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h4 class="card-title mb-3">Dados do usuário:</h4>

            <?php
                $nome = "João Silva";
                $idade = 25;
                $cidade = "São Paulo";

                echo "<p><strong>Nome:</strong> $nome</p>";
                echo "<p><strong>Idade:</strong> $idade anos</p>";
                echo "<p><strong>Cidade:</strong> $cidade</p>";
            ?>

        </div>
    </div>
</div>

</body>
</html>