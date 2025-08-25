<?php

class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estadoCivil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

    public function __construct($nome, $cpf, $sexo, $email, $estadoCivil, $cidade, $estado, $endereco, $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadoCivil = $estadoCivil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
    //Ex 7 |-----------------------------------------------------------------------------------------------------------
    public function testandoReservista() { // Método testandoReservista
        if (strtoupper($this->sexo) === "M") {
            echo "{$this->nome}, apresente seu certificado de reservista do tiro de guerra!\n";
        } else {
            echo "{$this->nome}, tudo certo!\n";
        }
    }
    //Ex 8
    public function casamento($anos_casado) {
        if (strtolower($this->estadoCivil) === "casado") {
            echo "Parabéns pelo seu casamento de {$anos_casado} anos, {$this->nome}!\n";
        } else {
            echo "Solteiro, {$this->nome}!\n";
        }
    }
    //-----------------------------------------------------------------------------------------------------------------
}

// Usuário 1
$usuario1 = new Usuario(
    "Josenildo Afonso Souza",
    "100.200.300-40",
    "Masculino",
    "josenewdo.souza@gmail.com",
    "Casado",
    "Xique-Xique",
    "Bahia",
    "Rua da amizade, 99",
    "40123-98"
);
$usuario1->testandoReservista(); //Ex 7
$usuario1->casamento(20); //Ex 7

// Usuário 2
$usuario2 = new Usuario(
    "Valentina Passos Silva",
    "070.070.060-70",
    "Feminino",
    "silva.valen@outlook.com",
    "Divorciada",
    "Iracemápolis",
    "São Paulo",
    "Avenida da saudade, 1942",
    "23456-24"
);
$usuario2->testandoReservista(); //Ex 7
$usuario2->casamento(5); //Ex 7

// Usuário 3
$usuario3 = new Usuario(
    "Claudio Braz Nepumoceno",
    "575.575.242-32",
    "Masculino",
    "Clauclau.nepumoceno@gmail.com",
    "Solteiro",
    "Piripiri",
    "Piauí",
    "Estrada 3, 33",
    "12345-99"
);
$usuario3->testandoReservista(); //Ex 7
$usuario3->casamento(0); //Ex 7
?>