<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lucas Kirsten - Desafio 6</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4>Calculadora de Média</h4>
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <input 
                                type="number" 
                                step="0.1" 
                                name="nota1" 
                                class="form-control" 
                                placeholder="Nota 1" 
                                required
                            >
                        </div>

                        <div class="col">
                            <input 
                                type="number" 
                                step="0.1" 
                                name="nota2" 
                                class="form-control" 
                                placeholder="Nota 2" 
                                required
                            >
                        </div>

                        <div class="col">
                            <input 
                                type="number" 
                                step="0.1" 
                                name="nota3" 
                                class="form-control" 
                                placeholder="Nota 3" 
                                required
                            >
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Calcular Média
                    </button>

                </form>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nota1 = $_POST["nota1"];
                        $nota2 = $_POST["nota2"];
                        $nota3 = $_POST["nota3"];

                        $media = ($nota1 + $nota2 + $nota3) / 3;

                        switch (true) {
                            case ($media >= 9):
                                $classificacao = "Excelente";
                                break;

                            case ($media >= 7):
                                $classificacao = "Bom";
                                break;

                            case ($media >= 5):
                                $classificacao = "Regular";
                                break;

                            default:
                                $classificacao = "Reprovado";
                        }

                        echo "<div class='alert alert-info mt-4'>";

                        echo "Notas: $nota1, $nota2, $nota3 <br>";
                        echo "Média: " . number_format($media, 2) . "<br>";
                        echo "Classificação: <strong>$classificacao</strong>";

                        echo "</div>";
                    }

                ?>

            </div>

        </div>
    </div>

</body>

</html>