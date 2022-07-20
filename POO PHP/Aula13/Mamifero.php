<?php

require_once 'Animal.php';

class Mamifero extends Animal{

    //Atributo da Classe
    protected $corPelo;
    
    //Metodo Acessor e Modificador
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

    //Metodo de Sobreposição
    public function emitirSom() {
        echo "<p>Som de Mamifero!</p>";
    }
}
