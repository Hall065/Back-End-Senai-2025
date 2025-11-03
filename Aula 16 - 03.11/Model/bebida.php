<?php
// bebidasCRUD.php -> bebidas.php é CRUD.
// Classe Bebida

class Bebida {
    // Propriedades
    private $nome;
    private $preco;
    private $volume;
    private $qntd;
    private $categoria;

    // Construtor
    public function __construct($nome, $preco, $volume, $qntd, $categoria) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->volume = $volume;
        $this->qntd = $qntd;
        $this->categoria = $categoria;
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }
    public function getQntd() {
        return $this->qntd;
    }
    public function setQntd($qntd) {
        $this->qntd = $qntd;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}