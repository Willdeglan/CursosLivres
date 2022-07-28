<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {

    //Atributos da Classe
    private $espectador;
    private $filme;
    
    //Metodo Construtor
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
    }
    
    //Metodo Acessores e Modificadores
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }
    public function setFilme($filme): void {
        $this->filme = $filme;
    }
        
    //Metodo da Classe
    public function avaliar1() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliar2($int) {
        $this->filme->setAvaliacao($int);
    }
    public function avaliar3($float) {
        $a = 0;
        if($float <= 25){
            $this->$a = 25;
        }else if ($float <= 50) {
            $this->$a = 50;
        }else if($float <= 75){
            $this->$a = 75;
        } else {
            $this->$a = 100;
        }
        $this->filme->setAvaliacao($a);
    }
}
