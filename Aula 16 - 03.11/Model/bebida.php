<?php

class Bebida {
    private $nome;
    private $categoria;
    private $volume;
    private $valor;
    private $qtde;

    public function __construct($nome, $categoria, $volume, $valor, $qtde){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->volume = $volume;
        $this->valor = $valor;
        $this->qtde = $qtde;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of qtde
     */ 
    public function getQtde()
    {
        return $this->qtde;
    }

    /**
     * Set the value of qtde
     *
     * @return  self
     */ 
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;

        return $this;
    }
}