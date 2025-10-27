<?php

require_once 'CRUD.php';
require_once 'AlunoDAO.php';
require_once 'Aluno.php';

$dao = new AlunoDAO();

function menu() {
    echo "\n==============================\n";
    echo "     🧠 GERENCIAR ALUNOS\n";
    echo "==============================\n";
    echo "1️⃣  - Listar alunos\n";
    echo "2️⃣  - Adicionar aluno\n";
    echo "3️⃣  - Atualizar aluno\n";
    echo "4️⃣  - Excluir aluno\n";
    echo "0️⃣  - Sair\n";
    echo "==============================\n";
    echo "Escolha uma opção: ";
}

do {
    menu();
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case '1':
            echo "\n📋 LISTAGEM DE ALUNOS:\n";
            $alunos = $dao->lerAlunos();
            if (empty($alunos)) {
                echo "Nenhum aluno encontrado.\n";
            } else {
                foreach ($alunos as $a) {
                    echo "{$a->getId()} - {$a->getName()} - {$a->getCurso()}\n";
                }
            }
            break;

        case '2':
            echo "\n🆕 ADICIONAR ALUNO:\n";
            echo "ID: ";
            $id = (int) trim(fgets(STDIN));
            echo "Nome: ";
            $nome = trim(fgets(STDIN));
            echo "Curso: ";
            $curso = trim(fgets(STDIN));

            $dao->criarAlunos(new Aluno($id, $nome, $curso));
            break;

        case '3':
            echo "\n✏️  ATUALIZAR ALUNO:\n";
            echo "ID do aluno que deseja atualizar: ";
            $id = (int) trim(fgets(STDIN));
            echo "Novo nome: ";
            $nome = trim(fgets(STDIN));
            echo "Novo curso: ";
            $curso = trim(fgets(STDIN));

            $dao->atualizarAlunos($id, $nome, $curso);
            break;

        case '4':
            echo "\n🗑️  EXCLUIR ALUNO:\n";
            echo "ID do aluno que deseja excluir: ";
            $id = (int) trim(fgets(STDIN));
            $dao->excluirAlunos($id);
            break;

        case '0':
            echo "\n👋 Encerrando o programa...\n";
            break;

        default:
            echo "\n❌ Opção inválida! Tente novamente.\n";
            break;
    }

} while ($opcao != '0');
