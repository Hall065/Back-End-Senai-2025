<?php
/*
Ex 5 - Crie um método para a classe 'Cachorro' chamado de 'latir', no qual exibe uma mensagem "O cachorro $nome está latindo!"
Ex 6 - Crie um outro método chamado 'marcarTerritorio', que exibe a mensagem "O cachorro $nome da raça $raca está marcando território!"
Nota: Vou Refazer aa atividadea usando outros parametros pois não fiz uma classe de cachorro, esses serão:
Ex 5.2 - Crie um método para a classe 'GenshinPersonagem' chamado de 'atacar', no qual exibe uma mensagem "O personagem $nome está atacando com sua $arma!"
Ex 6.2 - Crie um outro método chamado 'resoar', que exibe a mensagem "O personagem $nome está resoando com seu $elemento!"
*/
class GenshinPersonagem {
    //Atributos
    public string $nome;
    public string $genero;
    public string $regiao;
    public string $arma;
    public string $elemento;

    //Construtores
    public function __construct(
        string $nome,
        string $genero,
        string $regiao,
        string $arma,
        string $elemento
    ) {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->regiao = $regiao;
        $this->arma = $arma;
        $this->elemento = $elemento;
    }

    //Metódos: // Ex 5.2 & Ex 6.2
    public function atacar() {
        echo "{$this->nome} está atacando com sua/seu {$this->arma}!\n";
    }
    public function ressoar() {
        echo " {$this->nome} está ressoando com sua visão {$this->elemento}!\n";
    }
}

// Objetos:
$persongame1 = new GenshinPersonagem(
    "Dehya",
    "Feminino",
    "Sumero",
    "Espadão",
    "Pyro"
);
$personagem1->atacar();// Ex 5.2
$personagem1->ressoar();// Ex 6.2

$persongame2 = new GenshinPersonagem(
    "Furina",
    "Feminino",
    "Fontaine",
    "Espada",
    "Hydro"
);
$personagem2->atacar();// Ex 5.2
$personagem2->ressoar();// Ex 6.2

$persongame3 = new GenshinPersonagem(
    "Raiden Shogun",
    "Feminino",
    "Inazuma",
    "Lança",
    "Electro"
);
$personagem3->atacar();// Ex 5.2
$personagem3->ressoar();// Ex 6.2

$persongame4 = new GenshinPersonagem(
    "Ganyu",
    "Feminino",
    "Liyue",
    "Arco",
    "Cryo"
);
$personagem4->atacar();// Ex 5.2
$personagem4->ressoar();// Ex 6.2

$persongame5 = new GenshinPersonagem(
    "Mavuika",
    "Feminino",
    "Natlan",
    "Espadão",
    "Pyro"
);
$personagem5->atacar();// Ex 5.2
$personagem5->ressoar();// Ex 6.2

$persongame6 = new GenshinPersonagem(
    "Albedo",
    "Masculino",
    "Mondstadt",
    "Espada",
    "Geo"
);
$personagem6->atacar();// Ex 5.2
$personagem6->ressoar();// Ex 6.2

$persongame7 = new GenshinPersonagem(
    "Xiao",
    "Masculino",
    "Liyue",
    "Lança",
    "Anemo"
);
$personagem7->atacar();// Ex 5.2
$personagem7->ressoar();// Ex 6.2

$persongame8 = new GenshinPersonagem(
    "Yae Miko",
    "Feminino",
    "Inazuma",
    "Catalisador",
    "Electro"
);
$personagem8->atacar();// Ex 5.2
$personagem8->ressoar();// Ex 6.2

$persongame9 = new GenshinPersonagem(
    "Tartaglia",
    "Masculino",
    "Snezhnaya",
    "Arco",
    "Hydro"
);
$personagem9->atacar();// Ex 5.2
$personagem9->ressoar();// Ex 6.2

$persongame10 = new GenshinPersonagem(
    "Amber",
    "Feminino",
    "Mondstadt",
    "Arco",
    "Pyro"
);
$personagem10->atacar();// Ex 5.2
$personagem10->ressoar();// Ex 6.2

?>