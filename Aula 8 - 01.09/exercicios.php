<?php
// Ex 1
class Carro {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo){
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }

    public function setMarca($marca){
        $this->marca = ucwords(strtolower($marca));
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setModelo($modelo){
        $this->modelo = ucwords(strtolower($modelo));
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function exibirInfo(){
        echo "Marca: " . $this->getMarca() . "<br>";
        echo "Modelo: " . $this->getModelo() . "<br>";
    }
}

$carro1 = new Carro("bmw", "328i");

?>

<?php
// Ex 2
Class Pessoa {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->email = $email;
    }
    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome() {
        return $this->nome;
    }
    public function setIdade($idade){
        $this->idade = abs((int)$idade);
    }
    public function getIdade(){
        return $this->idade;
    }
    public function exibirInfo(){
        echo "O nome é " . $this->getNome() . ", tenho " . $this->idade . " anos e o email é " . $this->email . "<br>";
    }    
}

$pessoa1 = new Pessoa("Samuel", 22, "samuel@exemplo.com");
?>

<?php
// Ex 3
class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->setNome($nome);
        $this->setNota($nota);
    }

    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNota($nota) {
        if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            $this->nota = 0;
        }
    }

    public function getNota() {
        return $this->nota;
    }

    public function exibirInfo() {
        echo "Aluno: " . $this->getNome() . "<br>";
        echo "Nota: " . $this->getNota() . "<br>";
    }
}

$aluno1 = new Aluno("João", 8.5);
$aluno2 = new Aluno("Maria", 12);
$aluno3 = new Aluno("Carlos", -3);

?>

<?php
// Ex 4
class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        $this->preco = floatval($preco);
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setEstoque($estoque) {
        $this->estoque = intval($estoque);
    }

    public function getEstoque() {
        return $this->estoque;
    }
    public function __construct($nome, $preco, $estoque) {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }
    public function exibirInfo() {
        echo "O produto " . $this->getNome() . " custa R$ " . number_format($this->getPreco(), 2, ',', '.') . " e possui " . $this->getEstoque() . " unidades em estoque.<br>";
    }
}
$produto1 = new Produto("mouse gamer", 150.99, 25);

?>

<?php
// Ex 5
class Funcionario {
    private $nome;
    private $salario;

    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        $this->salario = floatval($salario);
    }

    public function getSalario() {
        return $this->salario;
    }
    public function __construct($nome, $salario) {
        $this->setNome($nome);
        $this->setSalario($salario);
    }
    public function exibirInfo() {
        echo "Nome do funcionário: " . $this->getNome() . "<br>";
        echo "Salário do funcionário: R$ " . number_format($this->getSalario(), 2, ',', '.') . "<br>";
    }
}

// Inic Values
$funcionario1 = new Funcionario("ana paula", 2500.00);

// New Values
$funcionario1->setNome("Carlos Silva");
$funcionario1->setSalario(3000.50);

?>