<?php

class animal {
    private $especie;
    private $abtat;
    private $sexo;
    private $alimentacao;

    public function __construct($especie, $abtat, $sexo, $alimentacao) {
        $this->setEspecie($especie);
        $this->setAbtat($abtat);
        $this->setSexo($sexo);
        $this->setAlimentacao($alimentacao);
    }
    public function setEspecie($especie) {
        $this->especie = ucwords(strtolower($especie));
    }
    public function setAbtat($abtat) {  
        $this->abtat = ucwords(strtolower($abtat));
    }
    public function setSexo($sexo) {
        $this->sexo = ucwords(strtolower($sexo));
    }
    public function setAlimentacao($alimentacao) {
        $this->alimentacao = ucwords(strtolower($alimentacao));
    }
    public function getEspecie() {
        return $this->especie;
    }
    public function getAbtat() {
        return $this->abtat;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getAlimentacao() {
        return $this->alimentacao;
    }
    public function exibirInfo() {
        echo "Espécie: " . $this->getEspecie() . "<br>";
        echo "Habitat: " . $this->getAbtat() . "<br>";
        echo "Sexo: " . $this->getSexo() . "<br>";
        echo "Alimentação: " . $this->getAlimentacao() . "<br>";
    }
}

class Cachorro extends animal {
    private $raca;
    private $porte;

    public function __construct($especie, $abtat, $sexo, $alimentacao, $raca, $porte) {
        parent::__construct($especie, $abtat, $sexo, $alimentacao);
        $this->setRaca($raca);
        $this->setPorte($porte);
    }

    public function setRaca($raca) {
        $this->raca = ucwords(strtolower($raca));
    }

    public function setPorte($porte) {
        $this->porte = ucwords(strtolower($porte));
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getPorte() {
        return $this->porte;
    }

    public function exibirInfo() {
        parent::exibirInfo();
        echo "Raça: " . $this->getRaca() . "<br>";
        echo "Porte: " . $this->getPorte() . "<br>";
    }
}

class Pangolin extends animal {
    private $corEscama;
    private $tamanho;

    public function __construct($especie, $abtat, $sexo, $alimentacao, $corEscama, $tamanho) {
        parent::__construct($especie, $abtat, $sexo, $alimentacao);
        $this->setCorEscama($corEscama);
        $this->setTamanho($tamanho);
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = ucwords(strtolower($corEscama));
    }

    public function setTamanho($tamanho) {
        $this->tamanho = ucwords(strtolower($tamanho));
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function exibirInfo() {
        parent::exibirInfo();
        echo "Cor da Escama: " . $this->getCorEscama() . "<br>";
        echo "Tamanho: " . $this->getTamanho() . "<br>";
    }
}

class Macacoes extends animal {
    private $corPelo;
    private $tamanho;

    public function __construct($especie, $abtat, $sexo, $alimentacao, $corPelo, $tamanho) {
        parent::__construct($especie, $abtat, $sexo, $alimentacao);
        $this->setCorPelo($corPelo);
        $this->setTamanho($tamanho);
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = ucwords(strtolower($corPelo));
    }

    public function setTamanho($tamanho) {
        $this->tamanho = ucwords(strtolower($tamanho));
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function exibirInfo() {
        parent::exibirInfo();
        echo "Cor do Pelo: " . $this->getCorPelo() . "<br>";
        echo "Tamanho: " . $this->getTamanho() . "<br>";
    }
}

class Gato extends animal {
    private $raca;
    private $tipo_ronronamento;

    public function __construct($especie, $abtat, $sexo, $alimentacao, $raca, $tipo_ronronamento) {
        parent::__construct($especie, $abtat, $sexo, $alimentacao);
        $this->setRaca($raca);
        $this->setTipo_ronronamento($tipo_ronronamento);
    }

    public function setRaca($raca) {
        $this->raca = ucwords(strtolower($raca));
    }

    public function setTipo_ronronamento($tipo_ronronamento) {
        $this->tipo_ronronamento = ucwords(strtolower($tipo_ronronamento));
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getTipo_ronronamento() {
        return $this->tipo_ronronamento;
    }

    public function exibirInfo() {
        parent::exibirInfo();
        echo "Raça: " . $this->getRaca() . "<br>";
        echo "Tipo de Ronronamento: " . $this->getTipo_ronronamento() . "<br>";
    }
}
?>