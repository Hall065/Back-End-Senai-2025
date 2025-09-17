<?php
// Classe abstrata: não pode ser instanciada diretamente
abstract class Transporte {
    abstract public function mover();
}

// Classe Carro
class Carro extends Transporte {
    public function __construct() {
    }
    public function mover() {
        echo "O carro está andando na estrada\n";
    }
}

// Classe Barco
class Barco extends Transporte {
    public function __construct() {
    }
    public function mover() {
        echo "O barco está navegando no mar\n";
    }
}

// Classe Avião
class Aviao extends Transporte {
    public function __construct() {
    }
    public function mover() {
        echo "O avião está voando no céu\n";
    }
}

// Classe Elevador
class Elevador extends Transporte {
    public function mover() {
        echo "O elevador está correndo pelo prédio\n";
    }
}

// Testando os transportes
$transportes = [new Carro(), new Barco(), new Aviao(), new Elevador()];

foreach ($transportes as $t) {
    $t->mover();
}
