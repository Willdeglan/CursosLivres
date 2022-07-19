<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{

    //Atributos da Classe
    private $matricula;
    private $curso;
    
    //Metodos Acessores e Modificadores
    public function getMatricula() {
        return $this->matricula;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }
    public function setCurso($curso): void {
        $this->curso = $curso;
    }

    //Metodo da Classe
    public function pagarMensalidade() {
        echo "<p>Pagando a mensalidade do(a) ".$this->getNome()."</p>";
    }
}
