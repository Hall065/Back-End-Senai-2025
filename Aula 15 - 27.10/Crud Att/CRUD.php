<?php

class Aluno {
    private $id;
    private $name;
    private $curso;

    public function __construct($id, $name, $curso) {
        $this->setId($id);
        $this->setName($name);
        $this->setCurso($curso);
    }

    // Getters
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getCurso() {
        return $this->curso;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }

}

?>