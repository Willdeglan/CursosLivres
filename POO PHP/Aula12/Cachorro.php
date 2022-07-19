<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero{

    //Metodos da Classe
    public function enterrarOsso() {
        echo "<p>Enterrando o osso no chao ...</p>";
    }
    public function abanandoRabo() {
        echo "<p>Abanando o rapo pro dono ...</p>";
    }
}
