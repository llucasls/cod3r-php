<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

function sub($a, $b) {
    return $a - $b;
}

executar(2, 3, '+', $soma);
executar(14, 2, '*', function ($a, $b) { return $a * $b; });

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', 'divisao');
