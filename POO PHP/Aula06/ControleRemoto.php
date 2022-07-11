<?php
require_once './Controlador.php';

class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;
    
    //Metodo construtor
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    //Metodos acessores
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }
    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    
    //Função da classe
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenur() {
        echo "<br>---------- Menu ----------";
        echo "<br>Está ligado? ".($this->getLigado()?"Sim.":"Não.");
        echo "<br>Está tocando? ".($this->getTocando()? "Sim.":"Não.");
        echo "<br>Volume? ".$this->getVolume();
        for($i=0; $i<= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "</br>";
    }
    public function fecharMenur() {
        echo "<br>Fechando Menu ...";
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "Erro. Aparecho desligado.";
        }
    }
    public function menosVolume() {
         if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "Erro. Aparelho desligado";
        }
    }
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
}