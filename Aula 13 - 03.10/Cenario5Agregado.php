<?php
class ContadorHistoria {
    private $personagens;
    private $verbos;
    private $lugar;
    private $acoes;
    private $objetos;

    public function __construct($personagens, $verbos, $lugar, $acoes, $objetos) {
        $this->personagens = $personagens;
        $this->verbos = $verbos;
        $this->lugar = $lugar;
        $this->acoes = $acoes;
        $this->objetos = $objetos;
    }

    public function contarHistoria() {
        $nomesPersonagens = implode(", ", array_map(fn($p) => $p->nome, array_slice($this->personagens, 0, -1))) 
                            . " e " . end($this->personagens)->nome;

        $nomesObjetos = implode(", ", array_map(fn($o) => $o->objetos, array_slice($this->objetos, 0, -1))) 
                        . " e " . end($this->objetos)->objetos;

        echo "Um sistema de {$this->lugar->nome} deve {$this->verbos[0]->acao} que Usuários ($nomesPersonagens) {$this->verbos[1]->acao} {$this->acoes->acao} de $nomesObjetos.";
    }
}
