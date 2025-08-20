<?php
class GenshinPersonagem {
    public string $nome;
    public string $genero;
    public string $regiao;
    public string $arma;
    public string $elemento;

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
}

// Atualizando o personagem existente
$persongame1 = new GenshinPersonagem(
    "Dehya",
    "Feminino",
    "Sumero",
    "Espadão",
    "Pyro"
);

// Criando mais 4 personagens
$persongame2 = new GenshinPersonagem(
    "Furina",
    "Feminino",
    "Fontaine",
    "Espada",
    "Hydro"
);

$persongame3 = new GenshinPersonagem(
    "Raiden Shogun",
    "Feminino",
    "Inazuma",
    "Lança",
    "Electro"
);

$persongame4 = new GenshinPersonagem(
    "Ganyu",
    "Feminino",
    "Liyue",
    "Arco",
    "Cryo"
);

$persongame5 = new GenshinPersonagem(
    "Mavuika",
    "Feminino",
    "Natlan",
    "Espadão",
    "Pyro"
);

$persongame6 = new GenshinPersonagem(
    "Albedo",
    "Masculino",
    "Mondstadt",
    "Espada",
    "Geo"
);

$persongame7 = new GenshinPersonagem(
    "Xiao",
    "Masculino",
    "Liyue",
    "Lança",
    "Anemo"
);

$persongame8 = new GenshinPersonagem(
    "Yae Miko",
    "Feminino",
    "Inazuma",
    "Catalisador",
    "Electro"
);

$persongame9 = new GenshinPersonagem(
    "Tartaglia",
    "Masculino",
    "Snezhnaya",
    "Arco",
    "Hydro"
);

$persongame10 = new GenshinPersonagem(
    "Amber",
    "Feminino",
    "Mondstadt",
    "Arco",
    "Pyro"
);

?>