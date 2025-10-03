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
        // Junta lugares
        $nomesLugares = implode(", ", array_slice($lugares, 0, -1)) . " e " . end($lugares);

        echo "Um grupo de turistas ($nomesPersonagens) vai {$verbos[0]} o $nomesLugares. ";
        echo "Em cada lugar da Terra, eles poderão {$verbos[1]} comidas típicas e {$verbos[2]} em rios ou praias.";
    }
}

// Criando objetos
$personagens = [
    (new Personagem("Hall"))->nome,
    (new Personagem("Asuna"))->nome
];

$verbos = [
    (new Verbo("visitar"))->acao,
    (new Verbo("comer"))->acao,
    (new Verbo("nadar"))->acao
];

$lugares = [
    (new Lugar("Japão"))->nome,
    (new Lugar("Brasil"))->nome,
    (new Lugar("Acre"))->nome
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($personagens, $verbos, $lugares);
?>
