<?php

//requires
require_once 'ProdutoDAO.php';
require_once 'CRUD.php';

$dao = new ProdutoDAO('produtos.json');

// Criar Produtos
$dao->criarProdutos(new Produtos(101, "Tomate", 6.50));
$dao->criarProdutos(new Produtos(102, "Maçã", 4.20));
$dao->criarProdutos(new Produtos(103, "Queijo Brie", 25.00));
$dao->criarProdutos(new Produtos(104, "Iogurte Grego", 8.75));
$dao->criarProdutos(new Produtos(105, "Guaraná Jesus", 7.30));
$dao->criarProdutos(new Produtos(106, "Bolacha Bono", 5.60));
$dao->criarProdutos(new Produtos(107, "Desinfetante Urca", 12.40));
$dao->criarProdutos(new Produtos(108, "Prestobarba Bic", 9.90));

// Ler Produtos
echo "Listagem inicial:\n";
foreach ($dao->lerProdutos() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}

// Atualizar Produtos
$dao->atualizarProdutos(107, "Desinfetante Barbarex", 14.50);
$dao->atualizarProdutos(104, "Iogurte Grego", 9.50);
$dao->atualizarProdutos(103, "Queijo Brie", 27.00);

// Ler produtos após atualização
echo "Listagem após atualização:\n";
foreach ($dao->lerProdutos() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}

// Excluir Produtos
$dao->excluirProdutos(101);
$dao->excluirProdutos(102);

// Ler produtos após exclusão
echo "Listagem após exclusão:\n";
foreach ($dao->lerProdutos() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}\n";
}