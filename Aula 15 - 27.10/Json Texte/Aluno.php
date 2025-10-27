<?php

class Aluno {
    private $id;
    private $name;
    private $curso;

    public function __construct($id, $name, $curso) {
        $this->id = $id;
        $this->name = $name;
        $this->curso = $curso;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}
