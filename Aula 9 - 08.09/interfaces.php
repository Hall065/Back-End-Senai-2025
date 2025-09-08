<?php

// ----------------------------
// PACKAGES (Namespaces no PHP)
// ----------------------------

// Definem um "pacote"/"módulo" para organizar o código
namespace Loja\Produtos;

class Produto {
    // ---------------------------- 
    // MODIFICADORES DE ACESSO
    // ---------------------------- 

    public string $nome;       // PUBLIC: acessível de qualquer lugar
    protected float $preco;    // PROTECTED: acessível apenas na classe e subclasses
    private int $estoque;      // PRIVATE: acessível apenas dentro da própria classe

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
  
    public function mostrarInfo() {
        // Aqui pode acessar tudo (nome, preco, estoque)
        return "Produto: $this->nome - R$ $this->preco - Estoque: $this->estoque";
    }
}

// ----------------------------
// INTERFACES
// ----------------------------

// Interface define um "contrato" (apenas métodos, sem implementação)
interface Vendavel {
    public function calcularPrecoFinal(float $imposto): float;
    public function vender(int $qtd): bool;
}

// Classe implementando a interface
class Eletronico extends Produto implements Vendavel {
    public function calcularPrecoFinal(float $imposto): float {
        return $this->preco + ($this->preco * $imposto);
    }

    public function vender(int $qtd): bool {
        if ($qtd > 0) {
            // lógica de venda (simplificada)
            echo "Vendido $qtd unidade(s) de $this->nome.\n";
            return true;
        }
        return false;
    }
}

// ----------------------------
// USO (fora do namespace)
// ----------------------------

namespace App;

use Loja\Produtos\Eletronico;

$celular = new Eletronico("Smartphone", 2500, 10);
echo $celular->mostrarInfo() . "\n";

// Chamando métodos da interface
echo "Preço Final: " . $celular->calcularPrecoFinal(0.2) . "\n";
$celular->vender(2);

?>

<!-- 

$pix = new Pix();
    echo "Testando o pix para pagamento: " . $pix->pagar(65);

$dinheiro = new Dinheiro();
    echo "Testando o dinheiro para pagamento: " . $dinheiro->pagar(320);

-->


<!-- 

interface Forma { 
    public function calcularArea(float $valor1, float $valor2 = 0): float;
}

class Quadrado implements Forma {
    public function calcularArea(float $lado, float $a = 0): float {
        return $lado * $lado;
    }
}

class Circulo implements Forma {
    public function calcularArea(float $raio, float $a = 0): float {
        return pi() * ($raio * $raio);
    }
}

class Pentagono implements Forma {
    public function calcularArea(float $lado, float $a = 0): float {
        $apotema = $lado / (2 * tan(pi() / 5));
        return (5 * $lado * $apotema) / 2;
    }
}

class Hexagono implements Forma {
    public function calcularArea(float $lado, float $a = 0): float {
        return (3 * sqrt(3) * pow($lado, 2)) / 2;
    }
}

// Exemplo de uso:
$cone = new Cone();
echo "Área do cone: " . $cone->calcularArea(3, 5) . "\n";
// Exemplo de uso:
$quadrado = new Quadrado(5);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";

$circulo = new Circulo(3);
echo "Área do círculo: " . $circulo->calcularArea() . "\n";

// Exemplo de uso:
$pentagono = new Pentagono(4);
echo "Área do pentágono: " . $pentagono->calcularArea() . "\n";

// Exemplo de uso:
$hexagono = new Hexagono(2);
echo "Área do hexágono: " . $hexagono->calcularArea() . "\n";

-->