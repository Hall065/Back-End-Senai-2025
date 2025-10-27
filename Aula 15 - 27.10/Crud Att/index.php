<?php

require_once 'CRUD.php';
require_once 'AlunoDAO.php';

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
echo "Listagem inicial:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Atualizar alunos
$dao->atualizarAlunos(2, "Viper A.", "Design Grafico");
$dao->atualizarAlunos(7, "Clotilde", "Engenharia");
$dao->atualizarAlunos(8, "Joana", "Eletrica",);
$dao->atualizarAlunos(9, "Miguel", "Design",);
$dao->atualizarAlunos(6, "Amanda", "Logistica",);
$dao->atualizarAlunos(5, "Oliver", "Eletrica",);

// Ler alunos após atualização
echo "Listagem após atualização:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Excluir um aluno
$dao->excluirAlunos(1);
$dao->excluirAlunos(6);
$dao->excluirAlunos(7);

// Ler alunos após exclusão
echo "Listagem após exclusão:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}