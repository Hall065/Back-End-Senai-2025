<?php
// Importa o arquivo de acesso ao banco (DAO) e o modelo Carro
require_once __DIR__ . '/../Model/CarroDAO.php';
require_once __DIR__ . '/../Model/Carro.php';

// Controller responsável por intermediar a comunicação entre a interface e o banco de dados
class CarroController {
    // Armazena a instância do DAO para operações com o banco
    private $dao;

    // Construtor: cria o objeto do DAO ao instanciar o controller
    public function __construct() {
        $this->dao = new CarroDAO();
    }

    // Função para retornar os carros cadastrados (READ)
    public function ler() {
        return $this->dao->lerCarros();
    }

    // Função para criar um novo carro no sistema (CREATE)
    public function criar($nome, $categoria, $motor, $valor, $qtde) {
        // Cria um objeto Carro com os dados recebidos
        $carro = new Carro($nome, $categoria, $motor, $valor, $qtde);
        
        // Envia o objeto pro DAO salvar no banco
        $this->dao->criarCarro($carro);
    }

    // Função para atualizar dados de um carro existente (UPDATE)
    public function atualizar($nome, $valor, $qtde) {
        $this->dao->atualizarCarro($nome, $valor, $qtde);
    }

    // Função para remover um carro pelo nome (DELETE)
    public function deletar($nome) {
        $this->dao->excluirCarro($nome);
    }
}
