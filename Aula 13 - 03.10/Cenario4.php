<?php
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
    public function contarHistoria($lugares, $verbos) {
        // Separa último verbo
        $ultimoVerbo = array_pop($verbos);
        // Junta os outros
        $listaVerbos = implode(", ", $verbos);

        echo "Na {$lugares}, pessoas podem {$listaVerbos} e até {$ultimoVerbo} sangue para ajudar outras.";
    }
}

// Criando objetos
$lugares = (new Lugar("Terra"))->nome;

$verbos = [
    (new Verbo("engravidar"))->acao,
    (new Verbo("nascer"))->acao,
    (new Verbo("crescer"))->acao,
    (new Verbo("fazer escolhas"))->acao,
    (new Verbo("doar"))->acao
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($lugares, $verbos);
?>
