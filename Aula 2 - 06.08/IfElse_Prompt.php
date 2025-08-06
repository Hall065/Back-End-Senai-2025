<?php
// Pega os dados via terminal
$nome = readline("Digite o nome do aluno: ");
$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$presenca = (float) readline("Digite a presença (%): ");

$media = ($nota1 + $nota2) / 2;

// Regras de aprovação
if (strtolower($nome) === "enzo") {
    echo "Aprovado automaticamente (filho do diretor)";
} elseif ($presenca < 75) {
    echo "Reprovado por falta. Presença: $presenca%";
} elseif ($media >= 7) {
    echo "Aprovado com média $media e presença de $presenca%";
} else {
    echo "Reprovado por nota. Média: $media | Presença: $presenca%";
}
?>
