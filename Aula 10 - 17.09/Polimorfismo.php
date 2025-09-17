<?php
// Polimorfismo por Interface
interface Forma {
    public function calcularArea();
}

class Quadrado implements Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

// Teste
$formas = [new Quadrado(4), new Circulo(3)];

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "\n";
}

?>

<?php
// Interface = contrato
interface Pagamento {
    public function pagar($valor);
}

// Implementação para Cartão
class CartaoCredito implements Pagamento {
    public function pagar($valor) {
        echo "Pagamento de R$ {$valor} realizado com Cartão de Crédito.\n";
    }
}

// Implementação para Pix
class Pix implements Pagamento {
    public function pagar($valor) {
        echo "Pagamento de R$ {$valor} realizado via Pix.\n";
    }
}

// Implementação para Boleto
class Boleto implements Pagamento {
    public function pagar($valor) {
        echo "Boleto gerado no valor de R$ {$valor}. Aguardando compensação.\n";
    }
}

// Testando o sistema
$pagamentos = [
    new CartaoCredito(),
    new Pix(),
    new Boleto()
];

foreach ($pagamentos as $metodo) {
    $metodo->pagar(150.00);
}
