<?php
$itens = [];
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produtos = $_POST['produto'] ?? [];
    $quantidades = $_POST['quantidade'] ?? [];

    for ($i = 0; $i < count($produtos); $i++) {
        $produto = trim($produtos[$i] ?? '');
        $quantidade = trim($quantidades[$i] ?? '');

        if (empty($produto)) {
            continue;
        }

        if (!is_numeric($quantidade) || (int) $quantidade <= 0) {
            $erro = 'Preencha as quantidades corretamente.';
            break;
        }

        $itens[] = [
            'produto' => htmlspecialchars($produto, ENT_QUOTES, 'UTF-8'),
            'quantidade' => (int) $quantidade
        ];
    }

    if (empty($erro) && empty($itens)) {
        $erro = 'Adicione pelo menos um produto válido.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio 3 - Lista de Compras</title>
</head>
<body>
    <h2>Lista de Compras</h2>

    <form method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <fieldset style="margin-bottom: 15px;">
                <legend>Item <?= $i + 1 ?></legend>

                <label for="produto<?= $i ?>">Produto:</label>
                <input
                    type="text"
                    name="produto[]"
                    id="produto<?= $i ?>"
                    value="<?= htmlspecialchars($_POST['produto'][$i] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
                <br><br>

                <label for="quantidade<?= $i ?>">Quantidade:</label>
                <input
                    type="number"
                    name="quantidade[]"
                    id="quantidade<?= $i ?>"
                    value="<?= htmlspecialchars($_POST['quantidade'][$i] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
            </fieldset>
        <?php endfor; ?>

        <input type="submit" value="Montar Lista">
    </form>

    <hr>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?php if (!empty($itens)): ?>
        <h3>Sua Lista de Compras</h3>

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>

            <?php foreach ($itens as $indice => $item): ?>
                <tr>
                    <td><?= $indice + 1 ?></td>
                    <td><?= $item['produto'] ?></td>
                    <td><?= $item['quantidade'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>