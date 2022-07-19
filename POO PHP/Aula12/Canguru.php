<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{

    //Metodo da Classe
    public function usarBolsa() {
        echo "<p>Usando a bolda pra guardar a cria.</p>";
    }
    
    //Metodo de Sobreposição da Classe Mamifero
    public function locomover() {
        echo "<p>Se locomovendo pulando ...</p>";
    }
}
