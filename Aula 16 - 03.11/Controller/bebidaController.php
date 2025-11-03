<?php

require_once __DIR__ .'/../Model/bebida.php';
require_once __DIR__ .'/../Model/bebidaDAO.php';

class BebidaController {
    private $dao;
    public function __construct() {
        $this->dao = new BebidaDAO();
    }

    public function ver() {
        return $this->dao->verBebidas();
    }

    public function criar($nome, $preco, $volume, $qntd, $categoria) {
        // $id = time(); Se precisar de um ID único.
        $bebida = new Bebida($nome, $preco, $volume, $qntd, $categoria);
        $this->dao->adicionarBebidas($bebida);
    }

    public function atualizar($nome, $preco, $volume, $qntd, $categoria) {
        $this->dao->atualizarBebidas($nome, $preco, $volume, $qntd, $categoria);
    }

    public function deletar($nome) {
        $this->dao->excluirBebidas($nome);
    }
}
?>