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

// Classe Objeto
class Objeto {
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe Ação
class Acao {
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe que monta a frase
class Narrador {
    public function contarHistoria($personagens, $verbos, $lugar, $objeto, $acao) {
        echo "Um sistema de $lugar deve {$verbos[0]} que $personagens {$verbos[1]} $objeto para $acao.";
    }
}

// Criando objetos
$personagens = "clientes";

$verbos = [
    (new Verbo("permitir"))->acao,
    (new Verbo("comprem"))->acao
];

$lugar = "cinema";

$objeto = (new Objeto("ingressos"))->nome;

$acao = (new Acao("sessões de filmes"))->nome;

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($personagens, $verbos, $lugar, $objeto, $acao);
?>
