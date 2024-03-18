<div class="titulo">Switch</div>

<?php
$categoria = 'suv';
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";
