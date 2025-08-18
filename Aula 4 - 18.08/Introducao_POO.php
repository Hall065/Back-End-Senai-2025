<?php

// Modelagem de dados sem ultiçizar POO

$marca_carro1="Honda";
$modelo_carro1="Civic";
$ano_carro1=2020;
$revo_carro1= true;
$numero_donos_carro1= 2;

$marca_carro2="BMW";
$modelo_carro2="320i";
$ano_carro2=2012;
$revo_carro2= false;
$numero_donos_carro2= 3;

$marca_carro3="Fiat";
$modelo_carro3="Uno";
$ano_carro3=2005;
$revo_carro3= false;
$numero_donos_carro3= 1;

$marca_carro4="volkswagen";
$modelo_carro4="Jetta";
$ano_carro4=2020;
$revo_carro4= true;
$numero_donos_carro4= 7;

function revisaoFeita($rev) {
    $rev=true;
    return $rev;
}

$revo_carro3 = revisaoFeita($revo_carro3);

function novoDono($qtdDonos) {
    return $qtdDonos++;
}

$nimero_donos_carro1 = novoDono($numero_donos_carro1);

?>