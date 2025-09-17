<?php
// Interface = contrato que obriga todas as formas a terem calcularArea()
interface Forma {
    public function calcularArea();
}

// Classe Quadrado
class Quadrado implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

// Classe Retângulo
class Retangulo implements Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Classe Círculo
class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

// Testando as formas
$formas = [
    new Quadrado(4),
    new Retangulo(5, 3),
    new Circulo(3)
];

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "\n";
}

?>