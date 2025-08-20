<?php
// Criando uma classe chamada "Carro"
class Carro {

    // ======== ATRIBUTOS ========
    // Características do carro (privados para proteger os dados)
    private string $cor;
    private string $modelo;
    private int $ano;

    // ======== CONSTRUTOR ========
    // Método especial que é chamado automaticamente quando criamos um carro
    public function __construct(string $cor, string $modelo, int $ano) {
        // "this" significa ESTE objeto atual
        $this->cor = $cor;       // Define a cor
        $this->modelo = $modelo; // Define o modelo
        $this->ano = $ano;       // Define o ano
    }

    // ======== GETTERS ========
    // "Pega" os valores dos atributos (retorna o valor)
    public function getCor(): string {
        return $this->cor;
    }
    public function getModelo(): string {
        return $this->modelo;
    }
    public function getAno(): int {
        return $this->ano;
    }

    // ======== SETTERS ========
    // "Define" novos valores para os atributos
    public function setCor(string $cor): void {
        $this->cor = $cor;
    }
    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }
    public function setAno(int $ano): void {
        $this->ano = $ano;
    }

    // ======== OUTRO MÉTODO ========
    // Exemplo de ação que o carro pode fazer
    public function exibirDescricao(): void {
        echo "O carro é um {$this->modelo}, cor {$this->cor}, do ano {$this->ano}." . PHP_EOL;
    }
}

// ======== CRIANDO OBJETOS ========
$meuCarro = new Carro("Vermelho", "Fusca", 1972); // Usa o construtor

// Pega valores usando GETTERS
echo $meuCarro->getModelo() . PHP_EOL; // Mostra "Fusca"

// Define novos valores usando SETTERS
$meuCarro->setCor("Azul");
$meuCarro->setAno(1980);

// Usa outro método
$meuCarro->exibirDescricao(); // Mostra "O carro é um Fusca, cor Azul, do ano 1980."
?>
