<?php
namespace Aritmetica;

function intdiv($numerador, $denominador) {
    if ($denominador == 0)
        throw new \DivisionByZeroError('Não é permitido dividir por zero.');

    if ($numerador % $denominador > 0)
        throw new \ArithmeticError('O resultado não é inteiro.');

    return $numerador / $denominador;
}
?>
