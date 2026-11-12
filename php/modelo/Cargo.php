<?php

abstract class Cargo{
    protected string $nomeFuncionario;

    public function __toString(){
        $dados = "O(A) funcionário(a) " . $this->nomeFuncionario . " cargo " . $this->getCargo() . ", possui salário de de R$ " . $this->getSalario() . ".\n" ;
        return $dados;
    }

    public abstract function getCargo();
    
    public abstract function getSalario();


    /**
     * Get the value of nomeFuncionario
     */
    public function getNomeFuncionario(): string
    {
        return $this->nomeFuncionario;
    }

    /**
     * Set the value of nomeFuncionario
     */
    public function setNomeFuncionario(string $nomeFuncionario): self
    {
        $this->nomeFuncionario = $nomeFuncionario;

        return $this;
    }
}