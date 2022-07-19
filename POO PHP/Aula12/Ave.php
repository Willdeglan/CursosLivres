<?php

require_once 'Animal.php';

class Ave extends Animal{

    //Atributo da Classe
    private $corPena;
    
    //Metodo Acessor e Modificador
    public function getCorPena() {
        return $this->corPena;
    }
    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }

    //Metodos Sobrepostos da Classe Animal
    public function alimentar() {
        echo "<p>Comendo graos no chao ...</p>";
    }
    public function emitirSom() {
        echo "<p>Emitindo muitos Piu, piu ...</p>";
    }
    public function locomover() {
        echo "<p>Voando ...</p>";
    }

    //Metodo da Classe
    public function fazendoNinho() {
        echo "<p>Construindo ninho na arvore ...</p>";
    }
}
