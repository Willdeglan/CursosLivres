<?php

class Pessoa {

    //Atributos da Classe
    private $nome;
    private $idade;
    private $sexo;
    
    //Metodo Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //Metodos Acessores e Modificadores
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
        
    //Metodo da Classe
    public function fazerAniversario() {
        $this->idade++;
    }
}
