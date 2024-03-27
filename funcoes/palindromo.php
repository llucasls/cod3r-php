<div class="titulo">Desafio Palindromo</div>

<?php
function ehPalindromo($palavra) {
    $tamanho = ceil(strlen($palavra) / 2);
    for ($index = 0; $index < $tamanho; $index++) {
        if ($palavra[$index] !== $palavra[- $index - 1]) {
            return 'Não';
        }
    }
    return 'Sim';
}

$palavra = 'arara';
echo "{$palavra} é palíndromo? ", ehPalindromo($palavra);
echo '<br>';

$palavra = 'ana';
echo "{$palavra} é palíndromo? ", ehPalindromo($palavra);
echo '<br>';

$palavra = 'abccba';
echo "{$palavra} é palíndromo? ", ehPalindromo($palavra);
echo '<br>';

$palavra = 'bola';
echo "{$palavra} é palíndromo? ", ehPalindromo($palavra);
echo '<br>';

echo '<hr>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

$palavra = 'arara';
echo "{$palavra} é palíndromo? ", palindromoSimples($palavra);
echo '<br>';

$palavra = 'ana';
echo "{$palavra} é palíndromo? ", palindromoSimples($palavra);
echo '<br>';

$palavra = 'abccba';
echo "{$palavra} é palíndromo? ", palindromoSimples($palavra);
echo '<br>';

$palavra = 'bola';
echo "{$palavra} é palíndromo? ", palindromoSimples($palavra);
echo '<br>';
