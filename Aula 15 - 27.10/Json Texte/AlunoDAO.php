<?php

require_once 'CRUD.php';
require_once 'Aluno.php';

class AlunoDAO {
    private $crud;

    public function __construct() {
        $this->crud = new CRUD('alunos.json');
    }

    // Criar novo aluno
    public function criarAlunos(Aluno $aluno) {
        $alunos = $this->crud->readAll();

        foreach ($alunos as $a) {
            if ($a['id'] == $aluno->getId()) {
                echo "⚠️ Já existe um aluno com o ID {$aluno->getId()}.\n";
                return;
            }
        }

        $alunos[] = [
            'id' => $aluno->getId(),
            'name' => $aluno->getName(),
            'curso' => $aluno->getCurso()
        ];

        $this->crud->saveAll($alunos);
        echo "✅ Aluno '{$aluno->getName()}' adicionado com sucesso!\n";
    }

    // Ler todos os alunos
    public function lerAlunos() {
        $dados = $this->crud->readAll();
        $lista = [];

        foreach ($dados as $a) {
            $lista[] = new Aluno($a['id'], $a['name'], $a['curso']);
        }

        return $lista;
    }

    // Atualizar aluno existente
    public function atualizarAlunos($id, $novoNome, $novoCurso) {
        $alunos = $this->crud->readAll();
        $atualizado = false;

        foreach ($alunos as &$a) {
            if ($a['id'] == $id) {
                $a['name'] = $novoNome;
                $a['curso'] = $novoCurso;
                $atualizado = true;
                break;
            }
        }

        if ($atualizado) {
            $this->crud->saveAll($alunos);
            echo "🔄 Aluno ID $id atualizado com sucesso!\n";
        } else {
            echo "❌ Aluno com ID $id não encontrado.\n";
        }
    }

    // Excluir aluno
    public function excluirAlunos($id) {
        $alunos = $this->crud->readAll();
        $novos = array_filter($alunos, fn($a) => $a['id'] != $id);

        if (count($novos) == count($alunos)) {
            echo "❌ Nenhum aluno com ID $id foi encontrado.\n";
            return;
        }

        $this->crud->saveAll(array_values($novos));
        echo "🗑️ Aluno ID $id removido!\n";
    }
}
