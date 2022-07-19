<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{

    //Atributos da Classe
    private $especialidade;
    private $salario;
    
    //Metodos Acessores e Modificadores
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }
    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    //Metodo da Classe
    public function receberAumento($aumento) {
        $this->salario += $aumento;
    }
}
