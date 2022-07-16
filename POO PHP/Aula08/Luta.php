<?php

require_once 'Lutador.php';

class Luta {

    //Atributos da Classe
    private $desafiante;
    private $desafiado;
    private $round;
    private $aprovada;
    
    //Metodos Acessores e Modificadores
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getRound() {
        return $this->round;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }
    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }
    public function setRound($round): void {
        $this->round = $round;
    }
    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    //Metodos da Classe
    public function marcarLuta($ludador1, $lutador2) {
        if($ludador1->getCategoria() === $lutador2->getCategoria() && $ludador1 != $lutador2){
            $this->aprovada = true;
            $this->desafiante = $ludador1;
            $this->desafiado = $lutador2;
            echo "Luta Marcada pra Aconter Hoje, preparem os ringues !!!";
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
            echo "Erro !!! Lutadores de categoria diferente";
        }
    }
    public function lutar() {
        if($this->aprovada){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $venc = rand(0, 2);
            switch ($venc) {
                case 0: //Empate
                    echo "<br><p>Empate !</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1: //Desafiante Ganha
                    echo "<br><p>Desafiante ".$this->desafiante->getNome()." Venceu !</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo "<br><p>Desafiante ".$this->desafiado->getNome()." Venceu !</p>";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;
            }
            
        } else {
            echo "Luta não pode acontecer";
        }
    }

}
