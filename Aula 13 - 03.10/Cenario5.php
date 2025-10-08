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

// Classe Ação
class Acao {
    public $acao;
    public function __construct($acao) {
        $this->acao = $acao;
    }
}

// Classe Objetos
class Objetos {
    public $objetos;
    public function __construct($objetos) {
        $this->objetos = $objetos;
    }
}

// Classe que monta a frase
class Narrador {
    public function contarHistoria($personagens, $verbos, $lugar, $acoes, $objetos) {
        // Junta personagens
        $nomesPersonagens = implode(", ", array_slice($personagens, 0, -1)) . " e " . end($personagens);

        // Junta objetos
        $nomesObjetos = implode(", ", array_slice($objetos, 0, -1)) . " e " . end($objetos);

        echo "Um sistema de $lugar deve {$verbos[0]} que Usuários ($nomesPersonagens) {$verbos[1]} $acoes de $nomesObjetos.";
    }
}

// Criando objetos
$personagens = [
    (new Personagem("Alunos"))->nome,
    (new Personagem("Professores"))->nome
];

$verbos = [
    (new Verbo("permitir"))->acao,
    (new Verbo("façam"))->acao
];

$lugar = "Biblioteca";

$acoes = "empréstimos";

$objetos = [
    (new Objetos("livros"))->objetos,
    (new Objetos("revistas"))->objetos
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($personagens, $verbos, $lugar, $acoes, $objetos);
?>
