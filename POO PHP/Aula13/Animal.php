<?php

abstract class Animal {

    //Atributos da Classe
    protected $peso;
    protected $idade;
    protected $membros;
    
    //Metdos Acessores e Modificadores
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setMembros($membros): void {
        $this->membros = $membros;
    }

    //Metodo da Classe
    abstract function emitirSom();
}
