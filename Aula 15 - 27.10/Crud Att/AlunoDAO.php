<?php

class AlunoDAO {
    private $alunos = [];   

    // Métodos
    public function criarAlunos(Aluno $aluno) {
        $this->alunos[$aluno->getId()] = $aluno;
    }
    public function lerAlunos() {
        return $this->alunos;
    }
    public function atualizarAlunos($id, $novoNome, $novoCurso) {
        if(isset($this->alunos[$id])) {
            $this->alunos[$id]->setName($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
    }
    public function excluirAlunos($id) {
        unset($this->alunos[$id]);
    }
}
?>