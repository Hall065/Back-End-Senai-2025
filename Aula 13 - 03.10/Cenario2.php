<?php
// Classe Personagem
class Personagem {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe Verbo
class Verbo {
    public $acao;

    public function __construct($acao) {
        $this->acao = $acao;
    }
}

// Classe Lugar
class Lugar {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe que monta a frase
class Narrador {
    public function contarHistoria($personagens, $verbos, $lugares) {
        // Junta personagens
        $nomesPersonagens = implode(", ", array_slice($personagens, 0, -1)) . " e " . end($personagens);

        echo "$nomesPersonagens estão em uma missão. ";
        echo "Eles precisam {$verbos[0]} treinamentos especiais no {$lugares[0]} e, depois, {$verbos[1]} ao {$lugares[1]} para {$verbos[2]} brinquedos às crianças.";
    }
}

// Criando objetos
$personagens = [
    (new Personagem("Batman"))->nome,
    (new Personagem("Superman"))->nome,
    (new Personagem("Homem-Aranha"))->nome
];

$verbos = [
    (new Verbo("fazer"))->acao,
    (new Verbo("irão"))->acao,
    (new Verbo("doar"))->acao
];

$lugares = [
    (new Lugar("Cotil"))->nome,
    (new Lugar("Shopping"))->nome
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($personagens, $verbos, $lugares);
?>
