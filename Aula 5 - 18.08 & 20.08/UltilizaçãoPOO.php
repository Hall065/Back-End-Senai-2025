<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $n_donos;

    public function __construct($marca, $modelo, $ano, $revisao, $n_donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->n_donos = $n_donos;
    }
}

$carro1 = new Carro("Porsche", "911", 2020, false, 3);
$carro2 = new Carro("Mitsubishi", "Lancer", 1945, true, 1);
$carro3 = new Carro("Toyota", "Corolla", 2018, true, 2);
$carro4 = new Carro("Honda", "Civic", 2015, false, 1);
$carro5 = new Carro("Ford", "Mustang", 2022, false, 1);
$carro6 = new Carro("Chevrolet", "Camaro", 2019, true, 2);
?>
