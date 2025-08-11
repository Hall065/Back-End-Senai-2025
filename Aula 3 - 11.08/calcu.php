<?php
// Exercício Extra - Identificar tipagem

$a = readline("Digite a primera variável: ");
$b = readline("Digite a segunda variável: ");

if ($a === $b) {
    echo "Variaveis iguais! Primerio valor " . gettype($a) . " e segundo valor " . gettype($b) . ".\n";
} else {
    echo "ERRO! Variáveis de tipos diferetes. Primerio valor " . gettype($a) . " e segundo valor " . gettype($b) . ".\n";
}