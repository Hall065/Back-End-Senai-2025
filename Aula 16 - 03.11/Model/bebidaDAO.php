<?php
class BebidaDAO {

    private $bebidasArray = [];
    private $file;

    public function __construct($file = 'bebidas.json') {
        $this->file = $file;
        // Carrega as bebidas do arquivo JSON se ele existir
        if (file_exists($this->file)) {
            $json = file_get_contents($this->file);
            $data = json_decode($json, true);
            if ($data) {
                foreach ($data as $item) {
                    $bebida = new Bebida($item['nome'], $item['preco'], $item['volume'], $item['qntd'], $item['categoria']);
                    $this->bebidasArray[] = $bebida;
                }
            }
        }
    }    

    // Salvar os produtos no arquivo JSON
    private function salvarArquivo() {
        $data = [];
        foreach ($this->bebidasArray as $bebida) {
            $data[] = [
                'nome' => $bebida->getNome(),
                'preco' => $bebida->getPreco(),
                'volume' => $bebida->getVolume(),
                'qntd' => $bebida->getQntd(),
                'categoria' => $bebida->getCategoria()
            ];
        }
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    // Criar
    public function adicionarBebidas(Bebida $bebida) {
        foreach ($this->bebidasArray as $b) {
            if ($b->getNome() === $bebida->getNome()) {
                return;
            }
        }
        $this->bebidasArray[] = $bebida;
        $this->salvarArquivo();
    }

    // Ler
    public function verBebidas() {
        return $this->bebidasArray;
    }

    // Atualizar
    public function atualizarBebidas($nome, $preco, $volume, $qntd, $categoria) {
        foreach ($this->bebidasArray as $i => $b) {
            if ($b->getNome() === $nome) {
                $this->bebidasArray[$i]->setPreco($preco);
                $this->bebidasArray[$i]->setVolume($volume);
                $this->bebidasArray[$i]->setQntd($qntd);
                $this->bebidasArray[$i]->setCategoria($categoria);
                $this->salvarArquivo();
                return;
            }
        }
    }

    // Excluir
    public function excluirBebidas($nome) {
        foreach ($this->bebidasArray as $i => $b) {
            if ($b->getNome() === $nome) {
                unset($this->bebidasArray[$i]);
                $this->bebidasArray = array_values($this->bebidasArray);
                $this->salvarArquivo();
                return;
                }
            }
        }
    }