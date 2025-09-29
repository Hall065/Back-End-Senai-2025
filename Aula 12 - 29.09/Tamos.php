<?php

class Eletrodomestico
{
    private $nome;
    private $marca;
    private $potencia;
    private $garantia;
    private $voltagem;
    private $preco;

    public function __construct($nome, $marca, $potencia, $garantia, $voltagem, $preco)
    {
        $this->setNome($nome);
        $this->setMarca($marca);
        $this->setPotencia($potencia);
        $this->setGarantia($garantia);
        $this->setVoltagem($voltagem);
        $this->setPreco($preco);
    }

    public function exibirDados(){
        return "\n\n| INFO.\nDispositivo: {$this->getNome()}\nMarca: {$this->getMarca()}\nPotencia: {$this->getPotencia()}W\nGarantia: {$this->getGarantia()}\nVoltagem: {$this->getVoltagem()}V\nPreço: R$ {$this->getPreco()}";
    }

    public function setNome($nome)
    {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setMarca($marca)
    {
        $this->marca = ucwords(strtolower($marca));
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setPotencia($potencia)
    {
        if ($potencia > 0) {
            $this->potencia = $potencia;
        } else {
            echo "\n[ERRO] Valor inválido!";
        }
    }

    public function getPotencia()
    {
        return $this->potencia;
    }

    public function setGarantia($garantia)
    {
        if (is_bool($garantia)) {
            $this->garantia = $garantia;
        } else {
            echo "\n[ERRO] Valor inválido! Insira apenas true/false.";
        }
    }

    public function getGarantia()
    {
        if ($this->garantia) {
            return "Ativa";
        } else {
            return "Expirada";
        }
    }

    public function setVoltagem($voltagem)
    {
        if ($voltagem > 0) {
            $this->voltagem = $voltagem;
        } else {
            echo "\n[ERRO] Valor inválido!";
        }
    }

    public function getVoltagem()
    {
        return $this->voltagem;
    }

    public function setPreco($preco)
    {
        if ($preco > 0) {
            $this->preco = number_format($preco, 2, ',', '.');
        } else {
            echo "\n[ERRO] Valor inválido!";
        }
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function ligarDispositivo()
    {
        echo "\n\n{$this->nome} foi LIGADO(A)!";
    }

    public function desligarDispositivo()
    {
        echo "\n{$this->nome} foi DESLIGADO(A)!";
    }
}

Class Liquidificador extends Eletrodomestico
{
    private $cor;
    private $modelito;

    public function __construct($nome, $marca, $potencia, $garantia, $voltagem, $preco, $cor, $modelito) 
    {
    $this->setNome($nome);
    $this->setMarca($marca);
    $this->setPotencia($potencia);
    $this->setGarantia($garantia);
    $this->setVoltagem($voltagem);
    $this->setPreco($preco);
    $this->setCor($cor);
    $this->setModelo($modelito);
    }

    public function setCor($cor)
    {
        $this->cor = ucwords(strtolower($cor));
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setModelo($modelito)
    {
        $this->modelito = ucwords(strtolower($modelito));
    }

    public function getModelo()
    {
        return $this->modelito;
    }

    public function exibirDados(){
        return parent::exibirDados() . "\nCor: {$this->getCor()}\nModelo: {$this->getModelo()}";
    }
}

Class Churrasqueira extends Eletrodomestico
{
    private $tamanho;
    private $categoria;

    public function __construct($nome, $marca, $potencia, $garantia, $voltagem, $preco, $tamanho, $categoria) 
    {
    $this->setNome($nome);
    $this->setMarca($marca);
    $this->setPotencia($potencia);
    $this->setGarantia($garantia);
    $this->setVoltagem($voltagem);
    $this->setPreco($preco);
    $this->setTamanho($tamanho);
    $this->setCategoria($categoria);
    }

    public function setTamanho($tamanho)
    {
        $this->tamanho = ucwords(strtolower($tamanho));
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = ucwords(strtolower($categoria));
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function exibirRecebidos(){
        return parent::exibirDados() . "\nCor: {$this->getTamanho()}\nModelo: {$this->getCategoria()}";
    }
}

echo "----MICROONDAS----";
$eletro1 = new Eletrodomestico("Microondas", "Eletrolux", 1600, true, 127, 521.55);
echo $eletro1->ligarDispositivo();
echo $eletro1->desligarDispositivo();
echo $eletro1->exibirDados();

echo "\n\n----GELADEIRA----";
$eletro2 = new Eletrodomestico("Geladeira", "Brastemp", 250, false, 220, 3695.69);
echo $eletro2->ligarDispositivo();
echo $eletro2->desligarDispositivo();
echo $eletro2->exibirDados();

echo "\n\n----AR CONDICIONADO----";
$eletro3 = new Eletrodomestico("Ar Condicionado", "Sansung", 2000, true, 220, 2599);
echo $eletro3->ligarDispositivo();
echo $eletro3->desligarDispositivo();
echo $eletro3->exibirDados();

echo "\n\n----LIQUIDIFICADOR----";
$eletro4 = new Liquidificador("Liquidificador", "Mondial", 300, true, 127, 189.90, "Tubo", "Rosa");
echo $eletro4->ligarDispositivo();
echo $eletro4->desligarDispositivo();
echo $eletro4->exibirDados();

echo "\n\n----CHURRASQUEIRA----";
$eletro5 = new Churrasqueira("Churrasqueira", "Britania", 1500, true, 220, 349.90, "Média", "Controle Remoto");
echo $eletro5->ligarDispositivo();
echo $eletro5->desligarDispositivo();
echo $eletro5->exibirDados();