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

// Classe que monta a frase
class Narrador {
    public function contarHistoria($personagens, $verbos) {
        // Junta personagens
        $nomesPersonagens = implode(", ", array_slice($personagens, 0, -1)) . " e " . end($personagens);

        $historia  = "$nomesPersonagens {$verbos[0]} em uma jornada.";
        $historia .= " Durante o caminho, {$verbos[1]} a {$verbos[2]}, e eles {$verbos[3]} {$verbos[4]} uns aos outros para {$verbos[5]} as dificuldades.";
        $historia .= " No fim da jornada, eles {$verbos[6]} ao {$verbos[7]} juntos.";

        echo $historia;
    }
}

// Criando objetos
$personagens = [
    (new Personagem("Jon Snow"))->nome,
    (new Personagem("Papai Smurf"))->nome,
    (new Personagem("Deadpool"))->nome,
    (new Personagem("Dexter"))->nome
];

$verbos = [
    (new Verbo("estão"))->acao,
    (new Verbo("começa"))->acao,
    (new Verbo("chover"))->acao,
    (new Verbo("precisam"))->acao,
    (new Verbo("amar"))->acao,
    (new Verbo("superar"))->acao,
    (new Verbo("celebram"))->acao,
    (new Verbo("comer"))->acao
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($personagens, $verbos);
?>
