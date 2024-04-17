<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1<br>';
    }

    // public function metodo2() {
    //     echo 'Extendendo método 2<br>';
    // }
}

$exemplo = new Classe();
$exemplo->metodo1();
$exemplo->metodo2();



final class Unica {
    public $attr = 'Valor Único!!!';
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//     public $att2;
// }
