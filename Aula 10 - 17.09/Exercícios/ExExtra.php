<?php
// Interfaces
interface Movel {
    public function mover();
}

interface Abastecivel {
    public function abastecer($quantidade);
}

interface Manutenivel {
    public function fazerManutencao();
}

// Classe Carro → Movel + Abastecivel
class Carro implements Movel, Abastecivel {
    public function mover() {
        echo "🚗 O carro está se movimentando.\n";
    }

    public function abastecer($quantidade) {
        echo "🚗 O carro foi abastecido com {$quantidade} litros.\n";
    }
}

// Classe Bicicleta → Movel + Manutenivel
class Bicicleta implements Movel, Manutenivel {
    public function mover() {
        echo "🚴 A bicicleta está pedalando.\n";
    }

    public function fazerManutencao() {
        echo "🚴 A bicicleta foi lubrificada.\n";
    }
}

// Classe Ônibus → Movel + Abastecivel + Manutenivel
class Onibus implements Movel, Abastecivel, Manutenivel {
    public function mover() {
        echo "🚌 O ônibus está transportando passageiros.\n";
    }

    public function abastecer($quantidade) {
        echo "🚌 O ônibus foi abastecido com {$quantidade} litros.\n";
    }

    public function fazerManutencao() {
        echo "🚌 O ônibus está passando por revisão.\n";
    }
}

// Testando
$veiculos = [
    new Carro(),
    new Bicicleta(),
    new Onibus()
];

foreach ($veiculos as $v) {
    $v->mover();

    if ($v instanceof Abastecivel) {
        $v->abastecer(50);
    }

    if ($v instanceof Manutenivel) {
        $v->fazerManutencao();
    }

    echo "--------------------\n";
}
