<?php

require_once 'Animal.php';

class Peixe extends Animal{

    //Atributo da Classe
    private $corEscama;
    
    //Metodo Acessor e Modificador
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

    //Metodos Sobreposto da Classe Animal
    public function alimentar() {
        echo "<p>Comendo substancias na agua ...</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe nao emiti som !!!</p>";
    }
    public function locomover() {
        echo "<p>Nadando muito ...</p>";
    }

    //Metodo da Classe
    public function soltandoBolha() {
        echo "<p>Soltando bolhas na agua ...</p>";
    }
}
