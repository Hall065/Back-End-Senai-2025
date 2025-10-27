<?php

require_once 'CRUD.php';
require_once 'AlunoDAO.php';
require_once 'Aluno.php';

$dao = new AlunoDAO();

// Criar alunos
$dao->criarAlunos(new Aluno(1, "Hall", "Development"));
$dao->criarAlunos(new Aluno(2, "Viper", "Design"));
$dao->criarAlunos(new Aluno(3, "Zeny", "Marketing"));
$dao->criarAlunos(new Aluno(4, "Aurora", "Arquitetura"));
$dao->criarAlunos(new Aluno(5, "Oliver", "Gestão"));
$dao->criarAlunos(new Aluno(6, "Amanda", "Luta"));
$dao->criarAlunos(new Aluno(7, "Geysa", "Engenharia"));
$dao->criarAlunos(new Aluno(8, "Joab", "Eletrica"));
$dao->criarAlunos(new Aluno(9, "Miguel", "Streamer"));

// Ler alunos
echo "\n=== LISTAGEM INICIAL ===\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Atualizar alunos
$dao->atualizarAlunos(2, "Viper A.", "Design Gráfico");
$dao->atualizarAlunos(7, "Clotilde", "Engenharia");
$dao->atualizarAlunos(8, "Joana", "Eletrica");
$dao->atualizarAlunos(9, "Miguel", "Design");
$dao->atualizarAlunos(6, "Amanda", "Logistica");
$dao->atualizarAlunos(5, "Oliver", "Eletrica");

// Ler após atualização
echo "\n=== APÓS ATUALIZAÇÃO ===\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Excluir alunos
$dao->excluirAlunos(1);
$dao->excluirAlunos(6);
$dao->excluirAlunos(7);

// Ler após exclusão
echo "\n=== APÓS EXCLUSÃO ===\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}
