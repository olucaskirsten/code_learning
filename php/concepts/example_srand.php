<?php
// Definição do array de alunos
$alunos = [
    "Ana",
    "Carlos",
    "Beatriz",
    "Daniel",
    "Fernanda",
    "Gustavo"
];
// Exibição da lista de presença
echo "<h2>Lista de Presença</h2>";

srand(01);

foreach ($alunos as $aluno) {
    $presenca = rand(0, 1)
        ? "Presente" : "Ausente";
    $cor = ($presenca == "Presente")
        ? "green" : "red";
    echo "<p style='color: $cor;'>
<strong>$aluno:</strong>
$presenca</p>";
}
