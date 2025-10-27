<?php
class Produtos {
    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo, $nome, $preco) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getCodigo() { return $this->codigo; }
    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }

    public function setNome($nome) { $this->nome = $nome; }
    public function setPreco($preco) { $this->preco = $preco; }
}
