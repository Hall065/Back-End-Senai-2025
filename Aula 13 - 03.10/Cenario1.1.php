<?php
// Interface Atividade
interface Atividade {
    public function getDescricao();
}

// Classe Turista
class Turista {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe Localidade
class Localidade {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Classe Comida
class Comida implements Atividade {
    private $descricao;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}

// Classe CorpoDagua
class CorpoDagua implements Atividade {
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function getDescricao() {
        return $this->tipo;
    }
}

// Classe AtividadeVisitar
class AtividadeVisitar implements Atividade {
    public function getDescricao() {
        return "visitar";
    }
}

// Classe Narrador
class Narrador {
    public function contarHistoria($turistas, $atividades, $localidades) {
        // Pega nomes dos locais
        $nomesLugares = implode(", ", array_slice($localidades, 0, -1)) . " e " . end($localidades);

        echo "Um grupo de turistas vai {$atividades[0]->getDescricao()} o $nomesLugares. ";
        echo "Em cada lugar da Terra, eles poderão {$atividades[1]->getDescricao()} comidas típicas e {$atividades[2]->getDescricao()} em rios ou praias.";
    }
}

// Criando objetos
$turistas = [
    new Turista("Hall"),
    new Turista("Asuna")
];

$localidades = [
    "Japão",
    "Brasil",
    "Acre"
];

$atividades = [
    new AtividadeVisitar(),
    new Comida("comer"),
    new CorpoDagua("nadar")
];

// Narrador conta a história
$narrador = new Narrador();
$narrador->contarHistoria($turistas, $atividades, $localidades);
?>
