<?php
$cookie_nome = "visitas";

if (isset($_COOKIE[$cookie_nome])) {
    $visitas = $_COOKIE[$cookie_nome] + 1;
} else {
    $visitas = 1;
}

setcookie($cookie_nome, $visitas, time() + (7 * 24 * 60 * 60));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador de Visitas</title>
</head>
<body>

<h1>Contador de Visitas</h1>
<p>Você visitou esta página <?php echo $visitas; ?> vez(es).</p>

</body>
</html>