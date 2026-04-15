<?php
function autenticar($usuario, $senha) {
    return ($usuario === "admin" && $senha === "1234");
}

function calcularBonus($salario) {
    return $salario * 0.10;
}

function calcularINSS($salario) {
    return $salario * 0.11;
}

function calcularSalarioLiquido($salario) {
    $bonus = calcularBonus($salario);
    $inss = calcularINSS($salario);
    return $salario + $bonus - $inss;
}
?>