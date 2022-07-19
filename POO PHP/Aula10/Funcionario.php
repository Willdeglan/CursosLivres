<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    //Atributos da Classe
    private $setor;
    private $trabalhando;

    //Metodos da Classe
    public function getSetor() {
        return $this->setor;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setSetor($setor): void {
        $this->setor = $setor;
    }
    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }

    //Metodo da Classe
    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando;
    }
}
