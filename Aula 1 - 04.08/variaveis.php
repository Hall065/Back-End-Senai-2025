<?php

    echo"Olá! \n";
    $nome = "Hall! \n";
    $idade = "21";
    $ano_atual = 2025;

    $data_nasc= $ano_atual - $idade;
    echo "Data de nascimento: $data_nasc \n";


    //Questão 2:

    $frase = "Programação em php.";

    echo strtoupper($frase) . "\n";
    echo strtolower($frase) . "\n";

    //Questão 3:

    $frase2 = "O PHP foi criado em mil novecentos e noventa e cinco";
    $frase2 = str_replace(['O', 'a', 'i', 'o', 'e'], ['0', '4', '1', '0', '3'], $frase2);
    echo $frase2 . "\n";

?>