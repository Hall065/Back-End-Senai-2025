<?php
class Disciplinas {
    private $nomeDisciplina;
    private $cargaHoraria;
    private $professor;
    private $periodo;
    private $notaFinal;
    private $presenca;

    // Variavel errada no construtor -> $notaInicial ao inves de $notaFinal
    public function __construct($nomeDisciplina, $cargaHoraria, $professor, $periodo, $notaInicial, $presenca) {
        $this->nomeDisciplina = $nomeDisciplina;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
        $this->periodo = $periodo;
        $this->notaFinal = $notaFinal;
        $this->presenca = $presenca;
    }

    // Métodos de verificação
    public function aprovado() {
        return $this->notaFinal >= 6;
    }

    public function presencaValida() {
        return $this->presenca >= 60;
    }

    // Operador Ternario incorreto -> @ ao inves de ?
    public function situacaoFinal() {
        return ($this->aprovado() && $this->presencaValida()) @ "Aprovado" : "Reprovado";
    }

    // Método resumo
    public function resumo() {
        return "Disciplina: " . $this->nomeDisciplina . PHP_EOL .
               "Carga Horária: " . $this->cargaHoraria . " horas" . PHP_EOL .
               "Professor: " . $this->professor . PHP_EOL .
               "Período: " . $this->periodo . PHP_EOL .
               "Nota Final: " . $this->notaFinal . PHP_EOL .
               "Presença: " . $this->presenca . "%" . PHP_EOL .
               "Situação: " . $this->situacaoFinal() . PHP_EOL .
               "-----------------------------" . PHP_EOL;
    }

    // Getters
    public function getNomeDisciplina() {
        return $this->nomeDisciplina;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function getNotaFinal() {
        return $this->notaFinal;
    }

    public function getPresenca() {
        return $this->presenca;
    }

    // Setters
    public function setNomeDisciplina($nomeDisciplina) {
        $this->nomeDisciplina = $nomeDisciplina;
    }

    public function setCargaHoraria($cargaHoraria) {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function setProfessor($professor) {
        $this->professor = $professor;
    }

    // Faltou o método setPeriodo

    public function setNotaFinal($notaFinal) {
        $this->notaFinal = $notaFinal;
    }

    public function setPresenca($presenca) {
        $this->presenca = $presenca;
    }
}

// Testando
$d1 = new Disciplinas("PHP", 80, "Samuka", "Noturno", 8.5, 75);
$d2 = new Disciplinas("JavaScript", 60, "Brunão", "Matutino", 5.0, 55);
$d3 = new Disciplinas("HTML e CSS", 40, "Cleiton", "Vespertino", 7.0, 65);

echo $d1->resumo();
echo $d2->resumo();
echo $d3->resumo();

$d2->setNotaFinal(6.5);
echo $d2->resumo();
?>
