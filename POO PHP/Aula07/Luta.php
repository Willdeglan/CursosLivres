<?php
require_once './Lutador.php';
class Luta {

    //Atributos da Classe
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    
    //Metodos Acessores e Modificadores
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }

    //Metodos da Classe
    public function marcarLuta($L1, $L2){
        if(($L1->getCategoria() === $L2->getCategoria()) && ($L1 != $L2)){
            $this->aprovada = true;
            $this->desafiado = $L1;
            $this->desafiante = $L2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0://empate
                    echo "<p>Empate!!!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1://desafiado vence
                    echo "<p>".$this->desafiado->getNome()." venceu.</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2://desafoante vence
                    echo "<p>".$this->desafiante->getNome()." venceu.</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>A luta não pode acontecer !!!</p>";
        }
    }
}
