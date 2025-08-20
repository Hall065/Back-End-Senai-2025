<?php

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

$marca_carro4="Volkswagen";
$modelo_carro4="Jetta";
$ano_carro4=2020;
$revo_carro4= true;
$numero_donos_carro4= 7;


// Ex1:
function exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) {
    $revisaoTexto = $revisao ? "Sim" : "Não";
    echo "O carro $marca $modelo, ano $ano, já passou por revisão: $revisaoTexto, número de donos: $Ndonos.\n";
}

exibirCarro($modelo_carro1, $marca_carro1, $ano_carro1, $revo_carro1, $numero_donos_carro1);
exibirCarro($modelo_carro2, $marca_carro2, $ano_carro2, $revo_carro2, $numero_donos_carro2);
exibirCarro($modelo_carro3, $marca_carro3, $ano_carro3, $revo_carro3, $numero_donos_carro3);
exibirCarro($modelo_carro4, $marca_carro4, $ano_carro4, $revo_carro4, $numero_donos_carro4);

// Ex2:
function ehSeminovo($ano) {
    $anoAtual = date("Y");
    return ($anoAtual - $ano) <= 3;
}

echo "Seminovo? " . (ehSeminovo($ano_carro1) ? "Sim" : "Não") . "\n";
echo "Seminovo? " . (ehSeminovo($ano_carro2) ? "Sim" : "Não") . "\n";
echo "Seminovo? " . (ehSeminovo($ano_carro3) ? "Sim" : "Não") . "\n";
echo "Seminovo? " . (ehSeminovo($ano_carro4) ? "Sim" : "Não") . "\n";

// Ex3:
function precisaRevisao($revisao, $ano) {
    if ($revisao === false && $ano < 2022) {
        return "Precisa de revisão";
    } else {
        return "Revisão em dia";
    }
}

precisaRevisao($revo_carro1, $ano_carro1);
precisaRevisao($revo_carro2, $ano_carro2);
precisaRevisao($revo_carro3, $ano_carro3);
precisaRevisao($revo_carro4, $ano_carro4);

// Ex4:
function calcularValor($marca, $ano, $Ndonos) {
    $anoAtual = date("Y");

    // Definir preço base
    switch (strtolower($marca)) {
        case "bmw":
        case "porsche":
            $valor = 300000;
            break;
        case "nissan":
            $valor = 70000;
            break;
        case "byd":
            $valor = 150000;
            break;
        default:
            $valor = 50000;
    }

    // Desconto por donos adicionais
    if ($Ndonos > 1) {
        $descontoDonos = ($Ndonos - 1) * 0.05; 
        $valor = $valor - ($valor * $descontoDonos);
    }

    // Desvalorização por ano
    $anosUso = $anoAtual - $ano;
    $valor -= $anosUso * 3000;

    // Não deixar o valor negativo
    if ($valor < 0) {
        $valor = 0;
    }

    return $valor;
}

// Exebir valores dos carros
$valor1 = calcularValor($marca_carro1, $ano_carro1, $numero_donos_carro1);
echo "Marca: $marca_carro1\n";
echo "Modelo: $modelo_carro1\n";
echo "Ano: $ano_carro1\n";
echo "Número de donos: $numero_donos_carro1\n";
echo "Valor estimado: R$ " . number_format($valor1, 2, ',', '.') . "\n";

$valor2 = calcularValor($marca_carro2, $ano_carro2, $numero_donos_carro2);
echo "Marca: $marca_carro2\n";
echo "Modelo: $modelo_carro2\n";
echo "Ano: $ano_carro2\n";
echo "Número de donos: $numero_donos_carro2\n";
echo "Valor estimado: R$ " . number_format($valor2, 2, ',', '.') . "\n";

$valor3 = calcularValor($marca_carro3, $ano_carro3, $numero_donos_carro3);
echo "Marca: $marca_carro3\n";
echo "Modelo: $modelo_carro3\n";
echo "Ano: $ano_carro3\n";
echo "Número de donos: $numero_donos_carro3\n";
echo "Valor estimado: R$ " . number_format($valor3, 2, ',', '.') . "\n";

$valor4 = calcularValor($marca_carro4, $ano_carro4, $numero_donos_carro4);
echo "Marca: $marca_carro4\n";
echo "Modelo: $modelo_carro4\n";
echo "Ano: $ano_carro4\n";
echo "Número de donos: $numero_donos_carro4\n";
echo "Valor estimado: R$ " . number_format($valor4, 2, ',', '.') . "\n";

?>
