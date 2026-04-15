<?php
$resultado = null;
$erro = '';

if (
    isset($_GET['num1'], $_GET['num2'], $_GET['operacao']) &&
    is_numeric($_GET['num1']) &&
    is_numeric($_GET['num2'])
) {
    $num1 = (float) $_GET['num1'];
    $num2 = (float) $_GET['num2'];
    $operacao = $_GET['operacao'];

    switch ($operacao) {
        case '+':
            $resultado = $num1 + $num2;
            break;

        case '-':
            $resultado = $num1 - $num2;
            break;

        case '*':
            $resultado = $num1 * $num2;
            break;

        case '/':
            if ($num2 == 0) {
                $erro = 'Erro: não é possível dividir por zero!';
            } else {
                $resultado = $num1 / $num2;
            }
            break;

        default:
            $erro = 'Operação inválida.';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio 1 - Calculadora GET</title>
</head>
<body>
    <h2>Calculadora Simples (GET)</h2>

    <form method="get">
        <label for="num1">Número 1:</label>
        <input
            type="number"
            step="any"
            name="num1"
            id="num1"
            value="<?= htmlspecialchars($_GET['num1'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
        >
        <br><br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="+"
                <?= (($_GET['operacao'] ?? '') === '+') ? 'selected' : '' ?>>
                Adição (+)
            </option>
            <option value="-"
                <?= (($_GET['operacao'] ?? '') === '-') ? 'selected' : '' ?>>
                Subtração (-)
            </option>
            <option value="*"
                <?= (($_GET['operacao'] ?? '') === '*') ? 'selected' : '' ?>>
                Multiplicação (*)
            </option>
            <option value="/"
                <?= (($_GET['operacao'] ?? '') === '/') ? 'selected' : '' ?>>
                Divisão (/)
            </option>
        </select>
        <br><br>

        <label for="num2">Número 2:</label>
        <input
            type="number"
            step="any"
            name="num2"
            id="num2"
            value="<?= htmlspecialchars($_GET['num2'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
        >
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif ($resultado !== null): ?>
        <h3>Resultado da Calculadora</h3>
        <p>
            <?= htmlspecialchars($_GET['num1'], ENT_QUOTES, 'UTF-8') ?>
            <?= htmlspecialchars($_GET['operacao'], ENT_QUOTES, 'UTF-8') ?>
            <?= htmlspecialchars($_GET['num2'], ENT_QUOTES, 'UTF-8') ?>
            =
            <?= $resultado ?>
        </p>
    <?php elseif ($_GET): ?>
        <p style="color: red;">Preencha os campos corretamente.</p>
    <?php endif; ?>
</body>
</html>