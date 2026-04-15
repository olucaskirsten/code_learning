<?php
$tema = $_COOKIE["tema_preferido"] ?? "claro";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Página com Tema</title>
<style>
body.claro { background: #fff; color: #333; }
body.escuro { background: #1e1e1e; color: #f0f0f0; }
a { color: inherit; }
</style>
</head>
<body class="<?= htmlspecialchars($tema) ?>">
<h1>Bem-vindo ao site!</h1>
<p>Tema atual: <strong><?= htmlspecialchars($tema) ?></strong></p>
<a href="tema_form.php">Alterar tema</a>
</body>
</html>