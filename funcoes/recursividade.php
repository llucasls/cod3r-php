<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte($numero) {
    if ($numero === 1)
        return 1;

    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(12) . '<br>';

function somaSimples($numero) {
    return $numero * ($numero + 1) / 2;
}

echo somaSimples(12) . '<br>';
