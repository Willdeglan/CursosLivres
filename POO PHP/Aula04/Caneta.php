<?php

class Caneta {

    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;

    public function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(true);
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setTampada($tampada): void {
        $this->tampada = $tampada;
    }
}
