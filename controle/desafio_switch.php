<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 9/5;
const SOMA_CELSIUS_FAHRENHEIT = 32;

$valor = $_POST['param'];
$conversao = $_POST['conversao'];

switch ($conversao) {
    case 'km-milha':
        $resultado = $valor * FATOR_KM_MILHA;
        $unidadeEntrada = 'km';
        $unidade = 'mi';
        break;
    case 'milha-km':
        $resultado = $valor / FATOR_KM_MILHA;
        $unidadeEntrada = 'mi';
        $unidade = 'km';
        break;
    case 'metro-km':
        $resultado = $valor / FATOR_METRO_KM;
        $unidadeEntrada = 'm';
        $unidade = 'km';
        break;
    case 'km-metro':
        $resultado = $valor * FATOR_METRO_KM;
        $unidadeEntrada = 'km';
        $unidade = 'm';
        break;
    case 'celsius-fahrenheit':
        $resultado = $valor * FATOR_CELSIUS_FAHRENHEIT + SOMA_CELSIUS_FAHRENHEIT;
        $unidadeEntrada = '°C';
        $unidade = '°F';
        break;
    case 'fahrenheit-celsius':
        $resultado = ($valor - SOMA_CELSIUS_FAHRENHEIT) / FATOR_CELSIUS_FAHRENHEIT;
        $unidadeEntrada = '°F';
        $unidade = '°C';
        break;
}

if (isset($resultado) && $valor !== '')
    echo "<p>Resultado: $valor$unidadeEntrada = $resultado$unidade</p>";
