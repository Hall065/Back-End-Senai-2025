<?php

// Classe Carro representa um veículo com suas características principais
class Carro {
    // Atributos privados para garantir encapsulamento
    private $nome;       // Nome do carro (ex: Civic, Gol, Mustang)
    private $categoria;  // Categoria do carro (ex: Sedan, Hatch, SUV)
    private $motor;      // Tipo ou potência do motor (ex: 1.0, 2.0 Turbo, V8)
    private $valor;      // Valor do carro
    private $qtde;       // Quantidade disponível em estoque

    // Construtor da classe, inicializa as propriedades ao criar um objeto Carro
    public function __construct($nome, $categoria, $motor, $valor, $qtde){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->motor = $motor;
        $this->valor = $valor;
        $this->qtde = $qtde;
    }

    // Métodos getters retornam os valores dos atributos (somente leitura)
    public function getNome() { return $this->nome; }
    public function getCategoria() { return $this->categoria; }
    public function getMotor() { return $this->motor; }
    public function getValor() { return $this->valor; }
    public function getQtde() { return $this->qtde; }

    // Métodos setters permitem alterar valores específicos após criação do objeto
    public function setValor($valor) { $this->valor = $valor; }
    public function setQtde($qtde) { $this->qtde = $qtde; }
}
