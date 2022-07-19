<?php

require_once 'Aluno.php';

class Bolsista extends Aluno{

    //Atributos da Classe
    private $bolsa;
    
    //Metodo Acessor e Modificador
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }

    //Metodos da Classe
    public function renovarBolsa() {
        echo "Renovando bolsa do ".$this->getNome();
    }
    
    public function pagarMensalidade() {
        echo "Pagamento facilitado para bolsista.";
    }
}
