<?php

abstract class Pessoa {

    //Atributos da Classe
    private $nome;
    private $sexo;
    private $idade;
    
    //Metodos Acessores e Modificadores
    public function getNome() {
        return $this->nome;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    //Metodo da Classe
    public final function fazerAniversario() {
        $this->idade++;
    }
}
