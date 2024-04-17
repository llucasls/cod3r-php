<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data = new Data;
$data->dia = 22;
$data->mes = 11;
$data->ano = 1985;
echo $data->apresentar();
