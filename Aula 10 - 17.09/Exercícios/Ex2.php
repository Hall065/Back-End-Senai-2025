<?php 
// Polimorfismo: Responder a um método de diferentes formas.

// Override

class Animal {
    public function emitirSom() {
        echo "Algum som genérico\n";
    }
}

class Cachorro extends Animal {
    public function __construct($som) {
        $this->$som = $som;
    }
    public function emitirSom() {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    public function __construct($som) {
        $this->$som = $som;
    }
    public function emitirSom() {
        echo "Miau!\n";
    }
}

class Vaca extends Animal {
    public function __construct($som) {
        $this->$som = $som;
    }
    public function emitirSom() {
        echo "Muu!\n";
    }
}

// Teste
$animais = [new Cachorro('Au, Au!'), new Gato('Miau!'), new Vaca('Muu!')];

foreach ($animais as $animal) {
    $animal->emitirSom(); 
}

?>