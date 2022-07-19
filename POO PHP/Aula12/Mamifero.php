<?php

require_once 'Animal.php';

class Mamifero extends Animal{

    //Atributo da Classe
    private $corPelo;
    
    //Metodo Acessor e Modificador
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

    //Metodos Sobreposto da Classe Animal
    public function alimentar() {
        echo "<p>Comendo coisas de mamifero ...</p>";
    }

    public function emitirSom() {
        echo "<p>Emitindo som de mamifero ....</p>";
    }

    public function locomover() {
        echo "<p>Se locomovendo como mamifero ....</p>";
    }
}
