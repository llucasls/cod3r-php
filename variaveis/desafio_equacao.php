<div class="titulo">Desafio Equação</div>

<?php
$numerador_fracao1 = (6 * (3 + 2)) ** 2;
$denominador_fracao1 = 3 * 2;

$numerador_fracao2 = (1 - 5) * (2 - 7);
$denominador_fracao2 = 2;

$fracao1 = $numerador_fracao1 / $denominador_fracao1;
$fracao2 = $numerador_fracao2 / $denominador_fracao2;

$diferenca_numerador = $fracao1 - $fracao2 ** 2;

$numerador = $diferenca_numerador ** 3;
$denominador = 10 ** 3;

$resultado = $numerador / $denominador;
echo "O resultado final é " . $resultado . ".";
