<?php

class Banco {

    public int $numConta;
    protected String $tipo;
    private String $dono;
    private float $saldo;
    private bool $status;
    
    
    //Metodos acessores
    public function getNumConta() {
        return $this->numConta;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }
    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }
    public function setDono($dono): void {
        $this->dono = $dono;
    }
    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }
    public function setStatus($status): void {
        $this->status = $status;
    }

    //------------------------------------------
    
    //Metodos construtores
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com secesso.</p>";
    }

    //------------------------------------------
    
    //Metodos do tipo Banco
    public function abrirConta($t) {
        $this->setStatus(true);
        $this->setTipo($t);
        if ($this->getTipo() == "CC"){
            $this->setSaldo(50);
            echo "<p>Conta Aberta com secesso com R$ 50,00</p>";
        } else if($this->getTipo() == "CP"){
                    $this->setSaldo(150);
                    echo "<p>Conta Aberta com secesso com R$ 150,00</p>";
                }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Erro! Existe Saldo em conta.</p>";
        } else if ($this->getSaldo() < 0){
                    echo "<p>Erro! Conta com saldo devedor.</p>";
                } else {
                    echo "<p>Conta encerrada com sucesso.</p>";
                }
    }
    public function depositar($d){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $d);
            echo "<p>Deposito de R$ $d na conta de ".$this->getDono()."</p>";
        } else{
            echo "<p>Erro! A conta está fechada.</p>";
        }
    }
    public function sacar($s){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $s){
                $this->setSaldo($this->getSaldo() - $s);
                echo "<p>Saque realizado com sucesso.</p>";
            } else{
                echo "<p>Saldo insuficiente.</p>";
            }
        } else{
            echo "<p>Erro! Conta Fechada.</p>";
        }
    }
    public function pagarMensalidade(){
        if($this->getTipo() == "CC"){
            $m = 12;
        } else if($this->getTipo() == "CP"){
                    $m = 20;
                }
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $m);
            echo "<p>Mensalidade paga de R$ $m na conta do ".$this->getDono()."</p>";
        } else{
            echo "<p>Erro! Problema com a conta. Status Fechada.</p>";
        }
    }
}
