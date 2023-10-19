<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
$erro = 2e-3;

if(abs($pi - pi()) < $erro) {
    echo "<br>Iguais";
} else {
    echo "<br>Diferentes";
}

// Operador Relacional
$piErrado = 2.8;

if(abs($piErrado - pi()) < $erro) {
    echo "<br>Iguais";
} else {
    echo "<br>Diferentes";
}
