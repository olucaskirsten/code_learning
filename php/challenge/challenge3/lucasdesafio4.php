<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lucas Kirsten - Desafio 4</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4>Categoria por Idade</h4>
            </div>

            <div class="card-body">

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Digite sua idade</label>
                        <input type="number" name="idade" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Verificar Categoria
                    </button>

                </form>

                <hr>

                <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $idade = (int) $_POST["idade"];

                        if ($idade < 12) {
                            $categoria = "Criança";
                        } 
                        elseif ($idade >= 12 && $idade <= 17) {
                            $categoria = "Adolescente";
                        } 
                        elseif ($idade >= 18 && $idade <= 59) {
                            $categoria = "Adulto";
                        } 
                        else {
                            $categoria = "Idoso";
                        }

                        echo "<div class='alert alert-info'>";
                            echo "Idade: $idade | Categoria: $categoria";
                        echo "</div>";

                    }

                ?>

            </div>

        </div>

    </div>

</body>
</html>