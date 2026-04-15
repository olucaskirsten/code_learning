<?php
require_once "funcoes.php";

// Validação de login
$autenticado = false;

if (isset($_GET['usuario']) && isset($_GET['senha'])) {
    $usuario = htmlspecialchars($_GET['usuario']);
    $senha = htmlspecialchars($_GET['senha']);

    if (autenticar($usuario, $senha)) {
        $autenticado = true;
    } else {
        echo "<p style='color:red;'>Usuário ou senha inválidos!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Desafio 2</title>
</head>
<body>

<h2>Login</h2>
<form method="GET">
    Usuário: <input type="text" name="usuario"><br><br>
    Senha: <input type="password" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>

<?php if ($autenticado): ?>

<hr>
<h2>Cálculo de Salário</h2>

<form method="GET">
    <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
    <input type="hidden" name="senha" value="<?php echo $senha; ?>">

    Salário bruto: <input type="number" step="0.01" name="salario"><br><br>
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_GET['salario'])) {
    $salario = floatval($_GET['salario']);

    $bonus = calcularBonus($salario);
    $inss = calcularINSS($salario);
    $liquido = calcularSalarioLiquido($salario);

    echo "<h3>Resultado:</h3>";
    echo "Salário bruto: R$ " . number_format($salario, 2, ',', '.') . "<br>";
    echo "Bônus (10%): R$ " . number_format($bonus, 2, ',', '.') . "<br>";
    echo "INSS (11%): R$ " . number_format($inss, 2, ',', '.') . "<br>";
    echo "<strong>Salário líquido: R$ " . number_format($liquido, 2, ',', '.') . "</strong>";
}
?>

<?php endif; ?>

</body>
</html>