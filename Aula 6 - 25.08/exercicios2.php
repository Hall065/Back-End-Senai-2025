<?php
// Crie 3 contrutores sendo:
// 1º Recebe 3 parametros sendo: $dia, $mes, $ano
// 2º Recebe 7 parametros sendo: $nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo;
// 3º Recebe 5 parametros sendo: $marca, $nome, $categoria, $data_frabricacao, $data_venda;
//Obs: Escreva os codigos em forma de comentário.

//--------------------------------------------------------------------------------------------------------------------

// 1º Construtor: Recebe 3 parâmetros: $dia, $mes, $ano
class Data {
    public $dia;
    public $mes;
    public $ano;

    public function __construct($dia, $mes, $ano) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }
}

// 2º Construtor: Recebe 7 parâmetros: $nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo
class Pessoa {
    public $nome;
    public $idade;
    public $cpf;
    public $telefone;
    public $endereco;
    public $estado_civil;
    public $sexo;

    public function __construct($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->estado_civil = $estado_civil;
        $this->sexo = $sexo;
    }
}

// 3º Construtor: Recebe 5 parâmetros: $marca, $nome, $categoria, $data_frabricacao, $data_venda
class Produto {
    public $marca;
    public $nome;
    public $categoria;
    public $data_frabricacao;
    public $data_venda;

    public function __construct($marca, $nome, $categoria, $data_frabricacao, $data_venda) {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->data_frabricacao = $data_frabricacao;
        $this->data_venda = $data_venda;
    }
}
?>