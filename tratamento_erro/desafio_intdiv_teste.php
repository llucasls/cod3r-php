<div class="titulo">Desafio intdiv</div>

<?php
try {
    require_once 'desafio_intdiv.php';
} catch(Error $e) {
    echo "{$e->getMessage()}<br>";
}

use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3);
    echo '<br>';
} catch(Error $e) {
    echo "{$e->getMessage()}<br>";
}

try {
    echo intdiv(8, 0);
    echo '<br>';
} catch(Error $e) {
    echo "{$e->getMessage()}<br>";
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';

?>
