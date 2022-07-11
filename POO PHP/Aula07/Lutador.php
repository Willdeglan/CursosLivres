<?php
class Lutador {

    //Atributos da Classe
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrotas;
    private $empates;
    
    
    //Metodos Construtores
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitoria = $vitoria;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    
    //Metodos Acessores e Modificadores
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitoria() {
        return $this->vitoria;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setAltura($altura): void {
        $this->altura = $altura;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria(): void {
        if($this->peso < 52.2){
            $this->categoria = "Invalido";
        }elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Medio";
        }elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }
    public function setVitoria($vitoria): void {
        $this->vitoria = $vitoria;
    }
    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

        
    //Metodos da Classe
    public function apresentar(){
        echo "<p>-----------------------------------------</p>";
        echo "<p>Aqui apresento o lutador ".$this->getNome()." da ".$this->getNacionalidade();
        echo ".<br>Ele tem ".$this->getIdade()." anos.";
        echo " Pesa ".$this->getPeso()." Kg e altura de ".$this->getAltura()." metros.";
        echo " <br>Ele tem ".$this->getVitoria()." vitorias na carreira.";
        echo " Pedeu ".$this->getDerrotas()." lutas ";
        echo " <br>e por fim Empatou ".$this->getEmpates()." lutas.</p>";
    }
    public function status(){
        echo "<br><p>--------------------------------</p>";
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "--------------------------------";
        echo "<p>Tem Peso: ".$this->getCategoria()."</p>";
        echo "<p>Vitorias: ".$this->getVitoria()."</p>";
        echo "<p>Derrotas: ".$this->getDerrotas()."</p>";
        echo "<p>Empates: ".$this->getEmpates()."</p>";
    }
    public function ganharLuta(){
        $this->setVitoria($this->getVitoria() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}
