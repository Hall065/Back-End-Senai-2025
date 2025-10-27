<?php
class ProdutoDAO {
    private $file;
    private $produtos = [];

    public function __construct($file = 'produtos.json') {
        $this->file = $file;
        // Carrega os produtos do arquivo JSON se ele existir
        if (file_exists($this->file)) {
            $json = file_get_contents($this->file);
            $data = json_decode($json, true);
            if ($data) {
                foreach ($data as $item) {
                    $produto = new Produtos($item['codigo'], $item['nome'], $item['preco']);
                    $this->produtos[$produto->getCodigo()] = $produto;
                }
            }
        }
    }

    // Salvar os produtos no arquivo JSON
    private function salvarArquivo() {
        $data = [];
        foreach ($this->produtos as $produto) {
            $data[] = [
                'codigo' => $produto->getCodigo(),
                'nome' => $produto->getNome(),
                'preco' => $produto->getPreco()
            ];
        }
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    // Criar
    public function criarProdutos(Produtos $produto) {
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarArquivo();
    }

    // Ler
    public function lerProdutos() {
        return $this->produtos;
    }

    // Atualizar
    public function atualizarProdutos($codigo, $nome, $preco) {
        if (isset($this->produtos[$codigo])) {
            $this->produtos[$codigo]->setNome($nome);
            $this->produtos[$codigo]->setPreco($preco);
            $this->salvarArquivo();
        }
    }

    // Excluir
    public function excluirProdutos($codigo) {
        if (isset($this->produtos[$codigo])) {
            unset($this->produtos[$codigo]);
            $this->salvarArquivo();
        }
    }
}
