<?php

require_once 'Animal.php';

class Reptil extends Animal{

    //Atributo da Classe
    private $corEscama;
    
    //Metodo Acessor e Modificador
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

    //Metodos Sobreposto de Animal
    public function alimentar() {
        echo "<p>Comendo vegetais no mato ...</p>";
    }
    public function emitirSom() {
        echo "<p>Fazendo som de Reptil ...</p>";
    }
    public function locomover() {
        echo "<p>Rastejando pelo chao ...</p>";
    }

}
