<?php
require_once 'Bebida.php';

class BebidaDAO {
    private $bebidasArray = [];
    private $arquivoJson = 'bebidas.json';

    public function __construct() {
        if (file_exists($this->arquivoJson)) {
            $conteudo = file_get_contents($this->arquivoJson);
            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $nome => $info) {
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }

    private function salvarArquivo() {
        $dados = [];
        foreach ($this->bebidasArray as $nome => $b) {
            $dados[$nome] = [
                'nome' => $b->getNome(),
                'categoria' => $b->getCategoria(),
                'volume' => $b->getVolume(),
                'valor' => $b->getValor(),
                'qtde' => $b->getQtde()
            ];
        }
        file_put_contents($this->arquivoJson, json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function criarBebida(Bebida $b) {
        $this->bebidasArray[$b->getNome()] = $b;
        $this->salvarArquivo();
    }

    public function lerBebidas() {
        return $this->bebidasArray;
    }

    public function atualizarBebida($nomeAntigo, $novoNome, $categoria, $volume, $valor, $qtde) {
        if (!isset($this->bebidasArray[$nomeAntigo])) {
            return false;
        }

        $bebida = $this->bebidasArray[$nomeAntigo];
        $bebida->setNome($novoNome);
        $bebida->setCategoria($categoria);
        $bebida->setVolume($volume);
        $bebida->setValor((float)$valor);
        $bebida->setQtde((int)$qtde);

        if ($novoNome !== $nomeAntigo) {
            unset($this->bebidasArray[$nomeAntigo]);
            $this->bebidasArray[$novoNome] = $bebida;
        }

        $this->salvarArquivo();
        return true;
    }

    public function excluirBebida($nome) {
        unset($this->bebidasArray[$nome]);
        $this->salvarArquivo();
    }
}
?>
