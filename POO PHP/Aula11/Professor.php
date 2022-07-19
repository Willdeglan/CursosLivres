<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{

    //Atributos da Classe
    private $especialização;
    private $salario;
    
    //Metodos Acessores e Modificadores
    public function getEspecialização() {
        return $this->especialização;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setEspecialização($especialização): void {
        $this->especialização = $especialização;
    }
    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    //Metodo da Classe
    public function receberSalario($param) {
        $this->salario = $param;
    }
}
