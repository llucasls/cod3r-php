<div class="titulo">Desafio Recursão</div>

<?php

/*
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
*/

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function mostrarValores($lista, $char = '>', $nivel = 1) {
    foreach ($lista as $valor) {
        if (is_array($valor)) {
            mostrarValores($valor, $char, $nivel + 1);
        } else {
            for ($i = 0; $i < $nivel; $i++)
                echo "$char";
            echo " $valor<br>";
        }
    }
}

mostrarValores($array);
mostrarValores($array, '#');
