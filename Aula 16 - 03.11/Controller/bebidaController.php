<?php
require_once __DIR__ . '/../Model/BebidaDAO.php';
require_once __DIR__ . '/../Model/Bebida.php';

class BebidaController {
    private $dao;

    // Construtor: cria o objeto DAO responsável por manipular os dados
    public function __construct() {
        $this->dao = new BebidaDAO();
    }

    // Retorna todas as bebidas cadastradas
    public function ler() {
        return $this->dao->lerBebidas();
    }

    // Cria uma nova bebida e salva no JSON
    public function criar($nome, $categoria, $volume, $valor, $qtde) {
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebida($bebida);
    }

    // Atualiza valor e quantidade de uma bebida existente
    public function atualizar($nome, $valor, $qtde) {
        $this->dao->atualizarBebida($nome, $valor, $qtde);
    }

    // Remove uma bebida pelo nome
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
    }
}
?>
