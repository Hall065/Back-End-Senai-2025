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

// Classe Narrador (usa composição)
class Narrador {
    private $personagens = [];
    private $verbos = [];

    public function __construct() {
        // Personagens são criados aqui dentro
        $this->personagens = [
            new Personagem("Jon Snow"),
            new Personagem("Papai Smurf"),
            new Personagem("Deadpool"),
            new Personagem("Dexter")
        ];

        // Verbos também são criados aqui
        $this->verbos = [
            new Verbo("estão"),
            new Verbo("começa"),
            new Verbo("chover"),
            new Verbo("precisam"),
            new Verbo("amar"),
            new Verbo("superar"),
            new Verbo("celebram"),
            new Verbo("comer")
        ];
    }

    public function contarHistoria() {
        // Junta nomes dos personagens
        $nomes = array_map(fn($p) => $p->nome, $this->personagens);
        $nomesPersonagens = implode(", ", array_slice($nomes, 0, -1)) . " e " . end($nomes);

        // Pega as ações
        $v = array_map(fn($v) => $v->acao, $this->verbos);

        $historia  = "$nomesPersonagens {$v[0]} em uma jornada.";
        $historia .= " Durante o caminho, {$v[1]} a {$v[2]}, e eles {$v[3]} {$v[4]} uns aos outros para {$v[5]} as dificuldades.";
        $historia .= " No fim da jornada, eles {$v[6]} ao {$v[7]} juntos.";

        echo $historia;
    }
}

// Criando o narrador
$narrador = new Narrador();
$narrador->contarHistoria();
?>
