<?php

require_once 'Lobo.php';

class Cachorro extends Lobo{

    //Metodo de Sobreposição
    public function emitirSom() {
        echo "<p>Au! Au! Au!!</p>";
    }
    
    //Metodos da classe
    public function reagirFrase($frase) {
        if($frase == "comida" || $frase == "oi"){
            echo "<p>Abanar o rabo e latir.</p>";
        } else {
            echo "<p>Rosnar.</p>";
        }
    }
    public function reagirHoraMin($hora, $min) {
        if($hora < 12){
            echo "<p>Latir e abanar o Rabo.</p>";
        } else if($hora >= 12 && $hora <18){
            echo "<p>Ignorar.</p>";
        } else {
            echo "<p>Latir e correr.</p>";
        }
    }
    public function reagirDono($dono) {
        if($dono){
            echo "<p>Abana o rabinho ...</p>";
        } else {
            echo "<p>Latir muito.</p>";
        }
    }
    public function reagirIdadePeso($idade, $peso) {
        if($idade < 4){
            if($peso < 2){
                echo "<p>Correr.</p>";
            }else{
                echo "<p>Latir.</p>";
            }
        }else {
            if($peso < 2){
                echo "<p>Se esconder.</p>";
            } else {
                echo "<p>Abanar o rabo.</p>";
            }
        }
            
        
    }
}
