<?php
$filmes = [
    'Matrix',
    'O Poderoso Chefão',
    'Interestelar',
    'Batman: O Cavaleiro das Trevas',
    'Guerra nas Estrelas',
    'Guerra Mundial Z',
    'Clube da Luta',
    'Forrest Gump',
    'Vingadores: Ultimato',
    'Senhor dos Anéis'
];

$busca = trim($_GET['busca'] ?? '');
$resultados = [];

if ($busca === '') {
    $resultados = $filmes;
} else {
    foreach ($filmes as $filme) {
        if (stripos($filme, $busca) !== false) {
            $resultados[] = $filme;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio 4 - Busca de Filmes</title>
</head>
<body>
    <h2>Filtro de Busca de Filmes</h2>

    <form method="get">
        <label for="busca">Buscar filme:</label>
        <input
            type="text"
            name="busca"
            id="busca"
            value="<?= htmlspecialchars($busca, ENT_QUOTES, 'UTF-8') ?>"
        >
        <input type="submit" value="Pesquisar">
    </form>

    <hr>

    <?php if ($busca !== ''): ?>
        <h3>
            Resultados para "<?= htmlspecialchars($busca, ENT_QUOTES, 'UTF-8') ?>"
            (<?= count($resultados) ?> filme(s) encontrado(s))
        </h3>
    <?php else: ?>
        <h3>Todos os filmes (<?= count($resultados) ?> filme(s))</h3>
    <?php endif; ?>

    <ul>
        <?php foreach ($resultados as $filme): ?>
            <li><?= htmlspecialchars($filme, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>