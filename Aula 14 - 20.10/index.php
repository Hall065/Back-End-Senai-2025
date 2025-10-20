<?php

require_once 'CRUD.php';
require_once 'AlunoDAO.php';

$dao = new AlunoDAO();

// Criar alunos
$dao->criarAlunos(new Aluno(1, "Hall", "Development"));
$dao->criarAlunos(new Aluno(2, "Viper", "Design"));
$dao->criarAlunos(new Aluno(3, "Zeny", "Marketing"));

// Ler alunos
echo "Listagem inicial:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Atualizar um aluno
$dao->atualizarAlunos(2, "Viper A.", "Design Grafico");
// Ler alunos após atualização
echo "Listagem após atualização:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}

// Excluir um aluno
$dao->excluirAlunos(1);
// Ler alunos após exclusão
echo "Listagem após exclusão:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getName()} - {$aluno->getCurso()}\n";
}
?>