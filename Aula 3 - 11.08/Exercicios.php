<?php
// Exercício 1 - Verificação de idade

$idade = readline("Digite sua idade: ");

if ($idade >= 18) {
    echo "Maior de Idade.";
} else {
    echo "Menor de Idade.";
}

?>

<?php
// Exercício 2 - Classificação de Nota

$nota = readline("Digite sua nota: ");

if ($nota >= 9) {
    echo "Muito Bom!";
} elseif ($nota >= 7) {
    echo "Passou!";
} else {
    echo "Reprovado.";
}

?>

<?php
// Exercício 3 - Dia da Semana

$dia = readline("Digite um número de 1 a 7: ");

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Número inválido.";
}

?>

<?php
// Exercício 4 - Calculadora Simples

$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$operacao = readline("Escolha a operação (+, -, *, /): ");

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "Divisão por zero não é permitida.";
            exit;
        }
        break;
    default:
        echo "Operação inválida.";
        exit;
}


echo "Resultado: $resultado\n";

?>

<?php
// Exercício 5 - Contagem Progressiva

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

?>

<?php
// Exercício 6 - Contagem Regressiva

for ($a = 10; $a >= 1; $a--) {
    echo $a . " ";
}

?>

<?php
// Exercício 7 - Números Pares

$final = readline("Digite o número final: ");

for ($b = 0; $b <= $final; $b++) {
    if ($b % 2 == 0) {
        echo $b . " ";
    }
}

?>

<?php
// Exercício 8 - Tabuada

$num = readline("Digite um número para ver a tabuada: ");

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "\n";
}

?>

<?php
// Exercício 9 - Classificação de Temperatura

$temperatura = readline("Digite a temperatura em °C: ");

if ($temperatura < 15) {
    echo "Frio";
} elseif ($temperatura <= 25) {
    echo "Agradável";
} else {
    echo "Quente";
}

?>

<?php
// Exercício 10 - Menu Interativo

for ($j = 1; $j <= 5; $j++) {
    echo "\nMenu:\n";
    echo "1 - Exemplo\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Olá, isso é para servir de exemplo\n";
            break;
        case 2:
            echo "Data Atual: " . date('d/m/Y H:i:s') . "\n";
            break;
        case 3:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida.\n";
    }
}

?>

<?php
// Exercício Extra - Identificar tipagem

$a = readline("Digite a primera variável: ");
$b = readline("Digite a segunda variável: ");

if ($a === $b) {
    echo "Variaveis iguais! Primerio valor " . gettype($a) . " e segundo valor " . gettype($b) . ".\n";
} else {
    echo "ERRO! Variáveis de tipos diferetes. Primerio valor " . gettype($a) . " e segundo valor " . gettype($b) . ".\n";
}

?>

<?php
// Exercício Extra - Identificar tipagem Completo

$a = readline("Digite a primeira variável: ");
$b = readline("Digite a segunda variável: ");

// Detecta tipo real de $a
if (is_numeric($a)) {
    $a = (strpos($a, '.') !== false) ? (float)$a : (int)$a;
} elseif (strtolower($a) === 'true' || strtolower($a) === 'false') {
    $a = strtolower($a) === 'true';
} elseif (strtolower($a) === 'null') {
    $a = null;
}

// Detecta tipo real de $b
if (is_numeric($b)) {
    $b = (strpos($b, '.') !== false) ? (float)$b : (int)$b;
} elseif (strtolower($b) === 'true' || strtolower($b) === 'false') {
    $b = strtolower($b) === 'true';
} elseif (strtolower($b) === 'null') {
    $b = null;
}

if ($a === $b) {
    echo "Variáveis iguais! Primeiro valor é do tipo " . gettype($a) . " e segundo é do tipo " . gettype($b) . ".\n";
} else {
    echo "ERRO! Variáveis diferentes. Primeiro valor é do tipo " . gettype($a) . " e segundo é do tipo " . gettype($b) . ".\n";
}

?>
