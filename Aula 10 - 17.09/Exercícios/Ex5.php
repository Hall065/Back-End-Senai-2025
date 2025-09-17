<?php
class Calculadora {
    public function somar() {
        $numArgs = func_num_args();   // Conta quantos argumentos vieram
        $args = func_get_args();      // Pega os argumentos em array

        if ($numArgs == 2) {
            return $args[0] + $args[1];
        } elseif ($numArgs == 3) {
            return $args[0] + $args[1] + $args[2];
        } else {
            return "Erro: informe 2 ou 3 números.";
        }
    }
}

// Teste
$calc = new Calculadora();

echo $calc->somar(5, 10) . "\n";       // 15
echo $calc->somar(5, 10, 20) . "\n";   // 35
echo $calc->somar(5) . "\n";           // Erro
