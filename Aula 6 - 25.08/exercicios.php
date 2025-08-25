<?php
// Crie uma classe "Motos" com ao menos 4 atruibutos esem a ultilização de um construtor.

// Atributos
class Motos {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
}

// Objetos
$moto1 = new Motos();
$moto1->marca = "Honda";
$moto1->modelo = "CG 160";
$moto1->ano = 2022;
$moto1->cor = "Vermelha";

$moto2 = new Motos();
$moto2->marca = "Yamaha";
$moto2->modelo = "Fazer 250";
$moto2->ano = 2023;
$moto2->cor = "Azul";

?>