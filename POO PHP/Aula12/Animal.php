<?php

abstract class Animal {

    //Atributos da Classe
    protected $peso;
    protected $idade;
    protected $membro;
    
    //Metodos Acessores e Modificadores
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembro() {
        return $this->membro;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setMembro($membro): void {
        $this->membro = $membro;
    }
    
    //Metodos da Classe
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
}
