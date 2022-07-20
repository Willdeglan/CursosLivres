<?php

require_once 'Mamifero.php';

class Lobo extends Mamifero{

     //Metodo de Sobreposição
    public function emitirSom() {
        echo "<p>Auuuuuuuuuu!</p>";
    }
    
    
}
