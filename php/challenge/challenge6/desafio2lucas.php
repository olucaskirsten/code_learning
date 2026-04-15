<?php
$mensagem = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $idade = trim($_POST['idade'] ?? '');

    if (empty($nome) || empty($email) || empty($idade)) {
        $erro = 'Preencha todos os campos corretamente.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = 'E-mail inválido.';
    } elseif (!is_numeric($idade) || (int) $idade <= 0) {
        $erro = 'Idade inválida.';
    } else {
        $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $idade = htmlspecialchars($idade, ENT_QUOTES, 'UTF-8');

        $mensagem = "
            <h3>Bem-vindo(a), {$nome}!</h3>
            <p>Seu cadastro foi realizado com sucesso.</p>
            <p><strong>E-mail:</strong> {$email}</p>
            <p><strong>Idade:</strong> {$idade} anos</p>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio 2 - Cadastro com POST</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>

    <form method="post">
        <label for="nome">Nome completo:</label>
        <input
            type="text"
            name="nome"
            id="nome"
            value="<?= htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
        >
        <br><br>

        <label for="email">E-mail:</label>
        <input
            type="email"
            name="email"
            id="email"
            value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
        >
        <br><br>

        <label for="idade">Idade:</label>
        <input
            type="number"
            name="idade"
            id="idade"
            value="<?= htmlspecialchars($_POST['idade'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
        >
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <hr>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?= $mensagem ?>
</body>
</html>