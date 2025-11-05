<?php
// Importa o modelo Carro para manipular os objetos
require_once 'Carro.php';

class CarroDAO {
    // ===========================================
    // ARMAZENAMENTO DOS CARROS
    // $carrosArray   → estrutura em memória
    // $arquivoJson   → arquivo usado para persistência dos dados
    // ===========================================
    private $carrosArray = [];
    private $arquivoJson = 'carros.json';

    // ===========================================
    // CONSTRUTOR
    // Ao iniciar a classe:
    // - Verifica se o arquivo JSON existe
    // - Se existir, carrega e reconstrói os objetos Carro
    // ===========================================
    public function __construct(){
        if(file_exists($this->arquivoJson)){
            $conteudoArquivo = file_get_contents($this->arquivoJson);
            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

            // Reconstrução dos objetos Carro a partir do JSON
            if ($dadosArquivoEmArray){
                foreach ($dadosArquivoEmArray as $nome => $info){
                    $this->carrosArray[$nome] = new Carro(
                        $info['nome'],
                        $info['categoria'],
                        $info['motor'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }

    // ===========================================
    // Função interna para salvar os dados no JSON
    // Transforma os objetos Carro em array e grava
    // ===========================================
    private function salvarArquivo(){
        $dadosParaSalvar = [];

        foreach ($this->carrosArray as $nome => $carro){
            $dadosParaSalvar[$nome] = [
                'nome'      => $carro->getNome(),
                'categoria' => $carro->getCategoria(),
                'motor'     => $carro->getMotor(),
                'valor'     => $carro->getValor(),
                'qtde'      => $carro->getQtde()
            ];
        }

        file_put_contents($this->arquivoJson, json_encode($dadosParaSalvar, JSON_PRETTY_PRINT));
    }

    // ===========================================
    // CREATE — adiciona um novo carro ao sistema
    // ===========================================
    public function criarCarro(Carro $carro){
        $this->carrosArray[$carro->getNome()] = $carro;
        $this->salvarArquivo();
    }

    // ===========================================
    // READ — retorna todos os carros cadastrados
    // ===========================================
    public function lerCarros(){
        return $this->carrosArray;
    }

    // ===========================================
    // UPDATE — atualiza valor e quantidade de um carro existente
    // ===========================================
    public function atualizarCarro($nome, $novoValor, $novaQtde){
        if(isset($this->carrosArray[$nome])){
            $this->carrosArray[$nome]->setValor($novoValor);
            $this->carrosArray[$nome]->setQtde($novaQtde);
        }
        $this->salvarArquivo();
    }

    // ===========================================
    // DELETE — remove um carro do sistema
    // ===========================================
    public function excluirCarro($nome){
        unset($this->carrosArray[$nome]);
        $this->salvarArquivo();
    }
}
