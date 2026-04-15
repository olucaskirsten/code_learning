<?php
if (isset($_POST["tema"])) {
$tema = $_POST["tema"];
setcookie("tema_preferido", $tema,
time() + (30 * 24 * 3600), "/");
echo "Tema salvo: " . htmlspecialchars($tema);
echo '<br><a href="index.php">Ver tema</a>';
} else {
echo "Nenhum tema selecionado.";
echo '<br><a href="tema_form.php">Voltar</a>';
}
?>