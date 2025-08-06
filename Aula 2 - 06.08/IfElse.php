<?php
//Variáveis de entrada
$nota1 = 4;
$nota2 = 3;
$presenca = 40;
$filho_diretor = "enzo";

$media = ($nota1 + $nota2) / 2; // Cálculo da média

// Verificação especial: o protegido
if (strtolower($filho_diretor) === "enzo") {
    echo "Aprovado automaticamente (filho do diretor)";
} elseif ($presenca < 75) { // Verificação de presença
    echo "Reprovado por falta. Presença: $presenca%";
} elseif ($media >= 7) { // Verificação de média
    echo "Aprovado com média $media e presença de $presenca%";
} else { // Reprovação por nota
    echo "Reprovado por nota. Média: $media | Presença: $presenca%";
}
?>