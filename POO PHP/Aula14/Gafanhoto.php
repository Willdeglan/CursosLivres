<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{

    //Atributos da Classe
    private $login;
    private $totAssistindo;
    
    //Metodo Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }
    
    //Metodos Acessores e Modificadores
    public function getLogin() {
        return $this->login;
    }
    public function getTotAssistindo() {
        return $this->totAssistindo;
    }
    public function setLogin($login): void {
        $this->login = $login;
    }
    public function setTotAssistindo($totAssistindo): void {
        $this->totAssistindo = $totAssistindo;
    }
    
    //Metodo da Classe
    public function viewsMaisUm() {
        $this->totAssistindo ++;
    }
}
