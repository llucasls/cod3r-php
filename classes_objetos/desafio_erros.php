<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo1() {}

    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {
    }

    public function metodo2($parametro) {}
}

$exemplo = new Classe('exemplo');
$exemplo->metodo3();

/*
1. implementar "metodo1" na classe "ClasseAbstrata"
2. implementar "metodo2" na classe "ClasseAbstrata"
3. substituir "extends Template" por "implements Template"
   na definição de "ClasseAbstrata"
4. substituir "implements ClasseAbstrata"
   por "extends ClasseAbstrata" na definição de "Classe"
5. instanciar um objeto da classe concreta "Classe" com
   a palavra chave "new"
6. invocar "metodo3" com o símbolo "->" em vez de "." (ponto)
7. a classe "Classe" requer um argumento passado ao construtor
   para ser instanciada
*/
