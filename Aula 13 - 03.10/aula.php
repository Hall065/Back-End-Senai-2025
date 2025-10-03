<?php

class Personagem {
    private $nome;
    private $acao; 
    private $lugar;

    public function __construct($nome, $acao, $lugar) {
        $this->setNome($nome);
        $this->setAcao($acao);
        $this->setLugar($lugar);
    }

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getAcao() {
        return $this->acao;
    }
    function setAcao($acao) {
        $this->acao = $acao;
    }
    function getLugar() {
        return $this->lugar;
    }
    function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    function Fazer() {
        return " O/A " . $this->getNome() . " está " . $this->getAcao() . " no(a) " . $this->getLugar() . ".";
    }
}

echo (new Personagem("Deadpool", "Dançando", "Ascent"))->Fazer();
echo (new Personagem("Scooby-Doo", "Comendo", "Japão"))->Fazer();
echo (new Personagem("Dexter", "Chovendo", "Acre"))->Fazer();

?>