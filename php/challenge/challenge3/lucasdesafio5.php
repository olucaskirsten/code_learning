<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Lucas Kirsten - Desafio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Verificação de Login Simples</h4>
            </div>

            <div class="card-body">

                <form method="POST">

                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" id="login" name="login" class="form-control" required />
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control" required />
                    </div>

                    <button type="submit" class="btn btn-success">Entrar</button>

                </form>

                <hr>

                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {

                    $loginDigitado = $_POST["login"];
                    $senhaDigitada = $_POST["senha"];

                    // dados base
                    $usuario_cadastrado = ($loginDigitado === "usuario123");
                    $senha_correta = ($senhaDigitada === "senhaSegura");

                    echo "<p>Usuário cadastrado: " . ($usuario_cadastrado ? "Sim" : "Não") . "</p>";
                    echo "<p>Senha correta: " . ($senha_correta ? "Sim" : "Não") . "</p>";

                    if ($usuario_cadastrado && $senha_correta) {
                        echo "<div class='alert alert-success'><strong>Acesso permitido!</strong></div>";
                    } else {
                        echo "<div class='alert alert-danger'><strong>Acesso negado!</strong></div>";
                    }
                }
                ?>

            </div>

        </div>

    </div>

</body>

</html>