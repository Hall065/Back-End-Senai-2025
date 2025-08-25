<?php

class Produtos {
    //Atributos
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    //Métodos
    public function atualizarEstoque($qtde_vendida){
        $this->qtde_estoque -= $qtde_vendida;
        return $this->qtde_estoque;
    }

    //Construtores
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }    
}

//Objetos de forma Burra
/*
    $produto1 = new Produtos();
    $produto1 -> nome = "Suco Tang";
    $produto1 -> categoria = "Bebidas";
    $produto1 -> fornecedor = "Coca-Cola";
    $produto1 -> qtde_estoque = "200";

    $produto2 = new Produtos();
    $produto2 -> nome = "Energético Monster";
    $produto2 -> categoria = "Bebidas";
    $produto2 -> fornecedor = "Ambev";
    $produto2 -> qtde_estoque = "120";
*/

//Obejtos De forma Inteligente
$produto1 = new Produtos("Suco Tang", "Bebidas", "Coca-Cola", 200);
$produto2 = new Produtos("Energético Monster", "Bebidas", "Ambev", 120);

?>